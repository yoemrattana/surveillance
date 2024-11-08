function newModel() {
    return {
        id: 0,
        ds_code: null,
        year: '',
        recorded_by: '',
        phone: '',
    };
}

function setField(model) {
    return {
        no: ko.observable(model?.no),
        group: ko.observable(model?.group),
        sub_group: ko.observable(model?.sub_group),
        group: ko.observable(model?.group),
        id: ko.observable(model?.id),
        name: ko.observable(local.in('kh', '') ? model?.name_attribute_khmer : model?.name_attribute),
        value: ko.observable(model?.value),
    }
}


function viewModel() {
    var self = this;

    self.listModel = ko.observableArray();
    self.tableDetails = ko.observable();
    self.masterModel = ko.observable();
    self.view = ko.observable('detail');
    self.questions = ko.observableArray();
    self.lang = ko.observable($('.changeLang').val());
    self.pvList = ko.observableArray();
    self.dsList = ko.observableArray();
    self.pv = ko.observable();
    self.ds = ko.observable();
    self.year = ko.observable(moment().year());
    self.recorded_by = ko.observable();
    self.phone = ko.observable();
    self.successMessage = ko.observable();

    var place = null;


    app.ajax('/admin/district-data/getdata').done(function (rs) {
        place = rs.place;

        self.masterModel(rs.master)
        self.questions(rs.questions);
        self.pvList(place.pv);

    });

   
    function prepare(nums, answers, tblname) {
        if (self.questions().length == 0) return [];
        return nums.map(no => {
            var q = self.questions().find(r => r.no == no);
            if (!q) {
                return null; 
            }
    
            var model = answers.reduce((obj, key) => (obj[key] = null) ?? obj, {});
            model.question_id = q.id;
    
            if (self.tableDetails() && self.tableDetails()[tblname]) {
                var found = self.tableDetails()[tblname]?.find(r => r.question_id == q.id);
                if (found) {
                    answers.forEach(key => model[key] = (found[key] || 0));
                }
            }
    
            model.no = () => no;
            model.group = () => self.lang() == 'en' ? q.group_en : q.group_kh;
            model.sub_group = () => self.lang() == 'en' ? q.sub_group_en : q.sub_group_kh;
            model.question = () => self.lang() == 'en' ? q.question_en : q.question_kh;
            model.unit = () => self.lang() == 'en' ? q.unit_en : q.unit_kh;
            model.short_code = () => q.short_code;
            model.value = ko.observable(q?.value);
            return model;
        }).filter(model => model !== null); 
    }
    

    self.showNew = function () {
        self.showEdit(newModel());
    };
    
    self.pv.subscribe(function (code) {
        self.dsList(code == null ? [] : place.ds.filter(r => r.pvcode == code));
    });
    
    self.ds.subscribe(function (code) {
        if(code != null){
            self.loadData();
        }
    });
    
    self.year.subscribe(function (year) {
        if(year != null){
            self.loadData();
        }
    });
 
    //1. Local administrative composition
    self.district_admin_composition = ko.pureComputed(() => {
        var nums = [1, '1.f', 2,'2.f', 2.1, '2.1.f', 2.2, '2.2.f',
                    2.3, '2.3.f', 2.4, '2.4.f', 2.5, '2.5.f', 3, '3.f'];
        var answers = ['value'];
        return prepare(nums, answers, 'district_admin_composition');
    });
    
    //2. Composition of Local Specialist Office Officers (Framework Officers
    self.district_framework_officers = ko.pureComputed(() => {
        var nums = [4,'4.f','4.a','4.a.f','4.b','4.b.f', 
                    5, '5.f', '5.a', '5.a.f', '5.b','5.b.f',
                    6, '6.f', '6.a', '6.a.f', '6.b','6.b.f',
                    7, '7.f', '7.a', '7.a.f', '7.b','7.b.f',
                    8, '8.f', '8.a', '8.a.f', '8.b','8.b.f',
                    9, '9.f', '9.a', '9.a.f', '9.b','9.b.f',
                    10, '10.f', '10.a', '10.a.f', '10.b','10.b.f',
                    10.1, '10.1.f', '10.1.a', '10.1.a.f', '10.1.b','10.1.b.f',
                    10.2, '10.2.f', '10.2.a', '10.2.a.f', '10.2.b','10.2.b.f',
                    11, '11.f', '11.a', '11.a.f', '11.b','11.b.f',
                    12, '12.f', '12.a', '12.a.f', '12.b','12.b.f',
                    13, '13.f', '13.a', '13.a.f', '13.b','13.b.f',
                    14, '14.f', '14.a', '14.a.f', '14.b','14.b.f',
                    15, '15.f', '15.a', '15.a.f', '15.b','15.b.f',
                    16, '16.f', '16.a', '16.a.f', '16.b','16.b.f',
                    17,18,19,20,21,
                ];
        var answers = ['value'];
        return prepare(nums, answers, 'district_framework_officers');
    });

   //3. Support work
    self.district_support_work = ko.pureComputed(() => {
        var nums = [22, 23];
        var answers = ['value'];
        return prepare(nums, answers, 'district_support_work');
    });

    //4. Vocational training
    self.district_vocational_training = ko.pureComputed(() => {
        var nums = [24, '24.f', '24.a', '24.a.f',
                    25, '25.f', '25.a', '25.a.f',
                    26, '26.f', '26.a', '26.a.f',
                    27, '27.f', '27.a', '27.a.f',
                    28, '28.f', '28.a', '28.a.f',
                ];
        var answers = ['value'];
        return prepare(nums, answers, 'district_vocational_training');
    });

    //5. Income registered at the district tax office
    self.district_tax_office = ko.pureComputed(() => {
        var nums = [29, "29.a",
                    "29.1", "29.1.a",
                    29.2, "29.2.a",
                    29.3, "29.3.a",
                    29.4, "29.4.a",
                    29.5, "29.5.a",
                    29.6, "29.6.a",
                    29.7, "29.7.a",
                    29.8, "29.8.a",
                    29.9, "29.9.a",
                    "29.10","29.10.a",
                ];
        var answers = ['value'];
        return prepare(nums, answers, 'district_tax_office');
    });

    //6. Number of national and international NGOs
    self.district_national_and_international_NGOs = ko.pureComputed(() => {
        var nums = [30,'30.1','30.2','30.3',
            31,'31.1','31.2','31.3',
            32,'32.1','32.2','32.3',
            33,'33.1','33.2','33.3',
            34,'34.1','34.2','34.3',
            35,'35.1','35.2','35.3',
            36,37,'37.f'];
        var answers = ['value'];
        return prepare(nums, answers, 'district_national_and_international_NGOs');
    });

    //7. Health work
    self.district_health_work = ko.pureComputed(() => {
        var nums = [38,'38.a',
                    39,'39.a',
                    40,'40.a',
                    41,'41.a',
                    42,'42.a'];
        var answers = ['value'];
        return prepare(nums, answers, 'district_health_work');
    });

    //8. Education
    self.district_education = ko.pureComputed(() => {
        var nums = [43, 44, '44.f', 45, 46, '46.f'];
        var answers = ['value'];
        return prepare(nums, answers, 'district_education');
    });


    self.loadData = () => {
        if(self.ds() && self.year()){
            let params = `ds_code=${self.ds()}&year=${self.year()}`
            app.ajax('/admin/district-data/search?'+params).done(function (response) {
                self.recorded_by(response.updated_by)  ;
                self.phone(response.phone)  ;
                self.masterModel(response);
                self.questions(response.questions);
            });
        } 
          
    }

    self.save = function () {
        if (self.ds() == null) return;
        var master = newModel().applyData(app.unko(self.masterModel()));
        if (master.id == 0) {
            master.recorded_by = self.recorded_by();
        }
        master.updated_by = self.recorded_by();
        master.updated_at = moment().sqlformat();

        master.ds_code = self.ds();
        master.year = self.year();
        master.recorded_by = self.recorded_by();
        master.phone = self.phone();        
        var formData = ko.toJSON(self.question_params());
        var params = { master, responses: formData };

        app.ajax('/admin/district-data/save', params).done(function (response) {
            console.log('++++++++++++ save +++++++++++++');
            console.log(params);
            self.successMessage(response.message);
            app.showToast();
        });
    };

    self.question_params = function (model) {
        const categories = [
            self.district_admin_composition,
            self.district_framework_officers,
            self.district_support_work,
            self.district_vocational_training,
            self.district_national_and_international_NGOs,
            self.district_tax_office,
            self.district_health_work,
            self.district_education
        ];
    
        const mapCategory = category => category().map(item => ({
            question_id: item.question_id,
            value: item.value
        }));
    
        return categories.flatMap(mapCategory);
    };

    self.showDelete = function (model) {
        var submit = { id: model.id };
        app.ajax('/admin/district-data/delete', submit).done(function () {
            self.listModel.remove(model);
        });
    };

    self.back = function () {
        self.view('list');
    };

    self.getQuestionByNo = function(questions, no){
        return questions.filter(function(i){return i.no() == no})[0]
    };

    self.getPvName = function (code) {
        var pvcode = place.ds.find(r => r.code == code).pvcode;
        return place.pv.find(r => r.code == pvcode)[self.lang() == 'en' ? 'name' : 'namek'];
    };

    self.getDsName = function (code) {
        return place.ds.find(r => r.code == code)[self.lang() == 'en' ? 'name' : 'namek'];
    };
}

$(document).on('keydown', 'input[type=number]', function (event) {
    var keys = ['e', 'E', '-', '+', '.'];
    if (keys.contain(event.key)) event.preventDefault();
});

//write null if empty string
$(document).on('change', 'input[type=number]', function () {
    var binding = ko.bindingProvider.instance.getBindings(this, ko.contextFor(this));
    if (ko.unwrap(binding.value) === '') {
        if (ko.isObservable(binding.value)) binding.value(null);
        else binding._ko_property_writers.value(null);
    }
});
