function setDetail(model) {
    return {
        id: ko.observable(model?.id || 0),
        name: ko.observable(),
    }
}

function setSection(model) {
    return {
        group: ko.observable(model?.group1),
        group2: ko.observable(model?.group2),
        fields: ko.observableArray(model?.fields),
    };
}

function setField(model) {
    return {
        sort: ko.observable(model?.sort),
        section: ko.observable(model?.section),
        group: ko.observable(model?.group),
        id_attribute: ko.observable(model?.id_attribute),
        name_attribute: ko.observable(local.in('kh', '') ? model?.name_attribute_khmer : model?.name_attribute),
        code_attribute: ko.observable(model?.code_attribute),
        value: ko.observable(model?.value),
    }
}

function viewModel() {
    const self = this;
    self.masterModel = ko.observableArray();
    self.listModel = ko.observableArray();
    self.detailModel = ko.observable();
    self.view = ko.observable('detail');

    self.pvList = ko.observableArray();
    self.dsList = ko.observableArray();
    self.cmList = ko.observableArray();
    self.vlList = ko.observableArray();

    self.pv = ko.observable();
    self.ds = ko.observable();
    self.cm = ko.observable();
    self.vl = ko.observable();

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

    self.errors = ko.validation.group(this, {deep: true, observable: false});

    var place = null;
    let id = 0
    app.ajax('/admin/village-data/get-data/'+id).done(function (rs) {
        console.log(rs.master)
        place = rs.place;
        self.masterModel(rs.master)
        self.pvList(place.pv);
        self.detailModel(rs.attributes.map(r => setField(r)));
    });

    function setMaster() {
        return {
            pv: ko.observable(),
            ds: ko.observable(),
            cm: ko.observable(),
            vl: ko.observable(),
            year: ko.observable()
        }
    }

    self.create = () => {
        self.view('detail');
    }

    self.save = () => {
        if (self.errors().length != 0) {
            self.errors.showAllMessages();
            return;
        }

        let model = app.unko(self.role())

        app.ajax('/admin/role/store', {submit: model}).done(function (id) {

        })
    }

    self.edit = (model) => {
        self.view('detail');
    }

    self.pv.subscribe(function (code) {
        self.odList(code == null ? [] : place.od.filter(r => r.pvcode == code));
    });

    self.groupLevel1 = (data) => {
        let rs =  _.chain(data)
            .groupBy(x => x.group())
            .map((v, i) => {
                return {
                    sort: _.get(_.find(v, 'sort'), 'sort')(),
                    label: _.get(_.find(v, 'name_attribute'), 'name_attribute')(),
                    fields: v
                }
            }).sortBy(x => Number(x.sort)).value()
        return rs
    }

    self.groupLevel2 = (data) => {
        let rs = _.chain(data).groupBy(x => x.group()).map((v, i) => {
            const group = _(v)
                .groupBy(r => r.name_attribute()).map((value, key) => {
                    return {
                        label: key,
                        fields: value
                    }
                }).value()
            return {
                label: i,
                group,
            }
        }).sortBy(x => Number(x.sort)).value()

        return rs
    }

    self.groupLevel3 = (data) => {
        let rs = _.chain(data).groupBy(x => x.group()).map((v, i) => {
            const group = _(v)
                .groupBy(r => r.name_attribute()).map((value, key) => {
                    return {
                        label: key,
                        fields: value
                    }
                }).value()[0]
            return {
                sort: _.get(_.find(v, 'sort'), 'sort')(),
                label: group.label,
                fields: group.fields
            }
        }).value()
        return rs
    }

    self.delete = (model) => {
        //let id = model.id();
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
                //   app.ajax('/admin/role/destroy', {id: id}).done(function(rs){
                //       self.listModel.remove(model)

                //       Swal.fire({
                //           title: "Deleted!",
                //           text: "Your file has been deleted.",
                //           icon: "success"
                //       });
                //   })
            }
        });
    }

    self.getField = function (index, fields, field_name) {
        for (let field of fields) {
            let [age, _field_name] = field.code_attribute().split("_")
            if (_field_name === field_name) return field
        }
        return false
    }

    self.getField2 = function (index, fields, field_name) {
        for (let field of fields) {
            let _field_name = field.code_attribute()
            if (_field_name === field_name) return field
        }
        return false
    }

    self.getField3 = function (index, fields, field_name) {
        for (let field of fields) {
            let [age, _field_name] = field.code_attribute().split("_")
            if (_field_name === field_name) return field
        }
        return false
    }
}
