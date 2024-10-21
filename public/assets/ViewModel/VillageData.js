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
        id_attribute: ko.observable(model?.id),
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
    self.lang = ko.observable($('.changeLang').val());
    self.successMessage = ko.observable();
    self.errorMessage = ko.observable();

    self.pvList = ko.observableArray();
    self.dsList = ko.observableArray();
    self.cmList = ko.observableArray();
    self.vlList = ko.observableArray();

    self.pv = ko.observable();
    self.ds = ko.observable();
    self.cm = ko.observable();
    self.vl = ko.observable();
    self.year = ko.observable();
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
            year: ko.observable(),
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

        var master = newModel().applyData(app.unko(self.masterModel()));
        if (master.id == 0) {
            master.created_at = moment().sqlformat();
        } else {
            master.updated_at = moment().sqlformat();
        }

        master.code_village = self.vl()
        master.year = self.year()
        master.phone_village = 85512999999
        master.commune_leader = 'N/A'
        master.phone_commune = 85512999999

        var formData = ko.toJSON(self.detailModel().map(item => ({
                                        attribute_id: item.id_attribute,
                                        value: item.value
                                    }))
                         );
        var params = {
            master,
            village_attributes: formData
        };

        app.ajax('/admin/village-data/save', params).done(function (response) {
            console.log('++++++++++++ save +++++++++++++');
            console.log(response);
            self.successMessage(response.message);
            app.showToast();
        });
    }

    self.edit = (model) => {
        self.view('detail');
    }

    self.loadData = () => {
        if(self.vl() && self.year()){
            let params = `vl_code=${self.vl()}&year=${self.year()}`
            app.ajax('/admin/village-data/search?'+params).done(function (response) {
                self.masterModel(response);
                self.detailModel(response.attributes.map(r => setField(r)));
            });
        }        
    }

    self.pv.subscribe(function (code) {
        self.dsList(code == null ? [] : place.ds.filter(r => r.pvcode == code));
    });
    self.ds.subscribe(function (code) {
        self.cmList(code == null ? [] : place.cm.filter(r => r.dscode == code));
    });
    self.cm.subscribe(function (code) {
        self.vlList(code == null ? [] : place.vl.filter(r => r.cmcode == code));
    });
    self.vl.subscribe(function (code) {
        if(code != null){
            self.loadData();
        }
        
    });
    self.year.subscribe(function (year) {
        if(year != null){
            self.loadData();
        }
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

function newModel() {
    return {
        id: 0,
        code_village: null,
        year: '',
        phone_village: 85512999999,
        commune_leader: 'N/A',
        phone_commune: 85512999999,
    };
}
