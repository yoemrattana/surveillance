function setUser(model) {
    return {
        id:  ko.observable(model?.id() || 0),
        name: ko.observable(model?.name()).extend({ required: true }),
        username: ko.observable(model?.username()).extend({ required: true }),
        role: ko.observable(model?.role()).extend({ required: true }),
        password: ko.observable().extend({required:true}).extend({minLength:6})
    }
}

function viewModel() {
    var self = this;
    self.listModel = ko.observableArray();
    self.listRole = ko.observableArray();
    self.view = ko.observable('list');
    self.user = ko.observable();

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
    app.showLoader();
    axios.get('/admin/user/get-user').then(function(rs){
        let users = rs.data.users.map( r => app.ko(r))
        let roles = rs.data.roles.map( r => app.ko(r))
        self.listModel(users)
        self.listRole(roles);
        app.hideLoader()
    })

    self.create = () => {
        self.user(new setUser())
        app.modal('modalUser').show()
    }

    self.save = () => {
        if (self.errors().length != 0) {
            self.errors.showAllMessages();
            return;
        }

        let model = app.unko(self.user())

        app.showLoader();
        axios.post('/admin/user/store', model)
          .then(function (rs) {
                if (!model.id) {
                    self.listModel.push(app.ko(rs.data.users))
                } 
                app.modal('modalUser').hide()
                app.hideLoader();
          })
          .catch(function (error) {
            Swal.fire({
                title: "Error!",
                text: error.message,
                icon: "error"
              });
              app.hideLoader();
          });

          //error.response.data.data?.password
    }

    self.edit = (model) => {
        let u = setUser(model)
        self.user(u);
        app.modal('modalUser').show()
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
                axios.post('/admin/user/destroy', {id: id}).then(function(rs) {
                    self.listModel.remove(model);
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }).catch(function(error){
                    Swal.fire({
                        title: "Error!",
                        text: error.message,
                        icon: "error"
                    });
                })
            }
        });
    }

}