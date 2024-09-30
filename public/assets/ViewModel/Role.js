function setRole() {
    return {
        id:  ko.observable(0),
        name: ko.observable().extend({ required: true }),
        display_name: ko.observable().extend({ required: true }),
        description: ko.observable().extend({ required: true }),
    }
}

function viewModel() {
    var self = this;
    self.listModel = ko.observableArray();
    self.listModule = ko.observableArray();
    self.listPermission = ko.observableArray();
    self.detailModel = ko.observable();
    self.view = ko.observable('list');
    self.role = ko.observable();

    ko.validation.init({
        registerExtenders: true,
        messagesOnModified: true,
        insertMessages: false,
        parseInputAttributes: true,
        messageTemplate: null,
        errorElementClass: 'input-error',
        errorClass: 'message-error',
        decorateElementOnModified: true,
        decorateInputElement: true
    }, true);

    self.errors = ko.validation.group(this, { deep: true, observable: false });

    app.ajax('/admin/setting/get-role').done(function (rs) {
        let roles = rs['roles'];
        roles.forEach((r) => {
            r.permissions.forEach(x => delete x.pivot)
        })
        roles = roles.map(r => app.ko(r))
        
        self.listModel(roles);
        let modules = rs['modules'].map(r => app.ko(r));
        self.listModule(modules);
    });


    self.showPermission = (model) => {
        self.view('module');
        self.role(model);
    }

    self.hasPermission = (permission) => {
        let role = self.listModel().find(r => r.id() == self.role()?.id());
        let permissions = role?.permissions()
        return permissions?.find(r => r?.id() == permission.id())
    }

    self.changePermission = (permission) => {
        let role = self.listModel().find(r => r.id() == self.role()?.id());
        let permissions = role?.permissions()
        let assignPermission = 'no';
        if(!self.hasPermission(permission)) {
            assignPermission = 'yes';
            permissions.push(permission)
        } else {
            let x = permissions.find(x => x.id() == permission.id())
            permissions.remove(x)
        }

        let submit = {
            roleId : self.role()?.id(),
            permissionId: permission.id(),
            assignPermission: assignPermission
        }

        app.ajax('/admin/role-permission/store', submit)
        
        return true;
    }

    self.createRole = () => {
        self.role(new setRole())
        app.modal('modalRole').show()
    }

    self.save = () => {
        if (self.errors().length != 0) {
            self.errors.showAllMessages();
            return;
        }

        let model = app.unko(self.role())

        app.ajax('/admin/role/store', {submit: model}).done(function(id){
            if (!model.id) {
                let role = self.role()
                role['id'] = ko.observable(id)
                role['permissions'] = ko.observableArray([])
                self.listModel.push(role)
            } 
            app.modal('modalRole').hide()
        })
    }

    self.edit = (model) => {
        self.role(model);
        app.modal('modalRole').show()
    }

    self.delete = (model) => {  
        let id = model.id();
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
        if (result.isConfirmed) {
            app.ajax('/admin/role/destroy', {id: id}).done(function(rs){
                self.listModel.remove(model)

                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            })
        }
        });
    }

}