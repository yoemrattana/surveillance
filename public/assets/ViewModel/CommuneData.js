function newModel() {
    return {
        id: 0,
        ds_code: null,
        cm_code: null,
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
    self.cmList = ko.observableArray();
    self.vlList = ko.observableArray();
    self.pv = ko.observable();
    self.ds = ko.observable();
    self.cm = ko.observable();
    self.vl = ko.observable();
    self.year = ko.observable();
    self.recorded_by = ko.observable();
    self.phone = ko.observable();
    self.successMessage = ko.observable();

    var place = null;

    app.ajax('/admin/commune-data/getdata').done(function (rs) {
        place = rs.place;
        self.masterModel(rs.master)
        self.questions(rs.questions);
        self.pvList(place.pv);
        // self.tableDetails({commune_base_profile: rs.questions});
    });



    function prepare(nums, answers, tblname) {
        if (self.questions().length == 0) return [];
        return nums.map(no => {
            var q = self.questions().find(r => r.no == no);

            var model = answers.reduce((obj, key) => (obj[key] = null) ?? obj, {});
            model.commune_question_id = q.id;

            if (self.tableDetails() && self.tableDetails()[tblname]) {
                var found = self.tableDetails()[tblname]?.find(r => r.commune_question_id == q.id);
                found && answers.forEach(key => model[key] = (found[key] || 0));
            }

            model.no = () => no;
            model.group = () => self.lang() == 'en' ? q.group_en : q.group_kh;
            model.sub_group = () => self.lang() == 'en' ? q.sub_group_en : q.sub_group_kh;
            model.question = () => self.lang() == 'en' ? q.question_en : q.question_kh;
            model.unit = () => self.lang() == 'en' ? q.unit_en : q.unit_kh;
            return model;
        });
    }

    self.showNew = function () {
        self.showEdit(newModel());
    };

    self.pv.subscribe(function (code) {
        self.dsList(code == null ? [] : place.ds.filter(r => r.pvcode == code));
    });
    self.ds.subscribe(function (code) {
        self.cmList(code == null ? [] : place.cm.filter(r => r.dscode == code));
    });
    self.cm.subscribe(function (code) {
        if(code != null){
            self.loadData();
        }
    });
    self.year.subscribe(function (year) {
        if(year != null){
            self.loadData();
        }
    });

    self.commune_base_profile = ko.pureComputed(() => {
        var nums = [1, 2, 3, 4, 5, 6, 7, 8, '8.1', '8.2', 9, '9.1', '9.2', 10, 11, 12, 13];
        var answers = ['total', 'female'];
        return prepare(nums, answers, 'commune_base_profile');
    });

    self.commune_agriculture = ko.pureComputed(() => {
        var nums = [14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, '24.a', 25, '25.a', 26, '26.a', 27, 28, 29];
        var answers = ['total'];
        return prepare(nums, answers, 'commune_agriculture');
    });

    self.commune_production = ko.pureComputed(() => {
        var nums = [30, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48];
        var answer = ['es_land_growed', 'land_production', 'avg_production_in_ha', 'es_production'];
        return prepare(nums, answer, 'commune_production');
    });

    self.commune_transportation = ko.pureComputed(() => {
        var nums = [49, 50, 51, "51.1", "51.2", "51.3", "51.4", "51.5", "51.6", "51.7"];
        var answer = ['total'];
        return prepare(nums, answer, 'commune_transportation');
    });
    self.commune_education = ko.pureComputed(() => {
        var nums = [52, 53, 54, 55, 56, 57, 58, "58.a", 59, "59.a", 60, "60.a", 
                    61, "61.a", 62, "62.a", 63, "63.a", 64, "64.a", 65, "65.a", 
                    66, "66.a", 67, "67.a", 68, "68.a", 69, "69.a",
                    70, '70.1', '70.2', '70.3', 71, '71.1', '71.2',
                    72, '72.a', 73, '73.a', 74, '74.a', 75, '75.a', 76, '76.a', 77, '77.a',
                    78, '78.1', '78.2', '78.3', 79, '79.1', '79.2',
                    80, '80.a', 81, '81.a', 82, '82.a', 83, '83.a', 84, '84.a', 85, '85.a',
                    86, '86.1', '86.2', '86.3', 87, '87.1', '87.2'];
        var answer = ['total', 'female'];
        return prepare(nums, answer, 'commune_education');
    });
    self.commune_natural_resource = ko.pureComputed(() => {
        var nums = [90, 91, 92, 93, 94];
        var answer = ['num_community', 'community_land', 'num_family'];
        return prepare(nums, answer, 'commune_natural_resource');
    });    
    self.commune_disaster = ko.pureComputed(() => {
        var nums = [95, '95.1', '95.2',96, 97, 98, 99, 100, 101, 102, '103.1', '103.2', '103.3',   
                    104, 105, 106, 107, 108, 109, '109.1', 110, '110.1', 111, 112, '112.1', 113, '113.1',
                    114, 115, 116, 117, 118, 119, 120, 121, 122, 123];
        var answer = ['total'];
        return prepare(nums, answer, 'commune_disaster');
    });

    self.loadData = () => {
        if(self.cm() && self.year()){
            let params = `cm_code=${self.cm()}&year=${self.year()}`
            app.ajax('/admin/commune-data/search?'+params).done(function (response) {
                self.recorded_by(response.recorded_by)  ;
                self.phone(response.phone)  ;
                self.masterModel(response);
                self.tableDetails(response.detail);
            });
        }        
    }

    self.save = function () {
        if (self.cm() == null) return;

        var master = newModel().applyData(app.unko(self.masterModel()));
        if (master.id == 0) {
            master.created_by = 'admin';
        } else {
            master.updated_by = 'admin';
            master.updated_on = moment().sqlformat();
        }

        master.ds_code = self.ds()
        master.cm_code = self.cm()
        master.year = self.year()
        master.recorded_by = self.recorded_by()
        master.phone = self.phone()

        var tables = {'commune_base_profile': self.commune_base_profile(),
                      'commune_agriculture': self.commune_agriculture(),
                      'commune_production': self.commune_production(), 
                      'commune_transportation': self.commune_transportation(),
                      'commune_education': self.commune_education(), 
                      'commune_natural_resource': self.commune_natural_resource(),
                      'commune_disaster': self.commune_disaster()
                    }

        var params = {
            master,
            tables: JSON.stringify(tables)
        };
        app.ajax('/admin/commune-data/save', params).done(function (response) {
            console.log('++++++++++++ save +++++++++++++');
            console.log(response);
            self.successMessage(response.message);
            app.showToast();
        });
    };

    self.showDelete = function (model) {
        var submit = { id: model.id };
        app.ajax('/admin/commune-data/delete', submit).done(function () {
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

    self.getCmName = function (code) {
        return place.cm.find(r => r.code == code)[self.lang() == 'en' ? 'name' : 'namek'];
    };

    function changeLang() {
        var words = [
            ['សរុប', 'Total'],
            ['នាក់', 'People'],
            ['ប្រុស', 'Male'],
            ['ស្រី', 'Female'],
            ['ចំនួន', 'Amount'],
            ['ស្ថានីយ៍', 'Station'],
            ['មាន', 'Have'],
            ['ចំនួនបុគ្គល', 'Number of staffs'],
            ['ប្រធាន', 'Chief'],
            ['អុនប្រធាន', 'Vice chief'],
            ['រៀល', 'Riel'],
            ['អង្គការ', 'Organization'],
            ['ខេត្ត', 'Province'],
            ['ស្រុក', 'District'],
            ['ឃុំ', 'Commune'],
            ['កត់ត្រាដោយ', 'Recorded by'],
            ['លេខទូរស័ព្ទ', 'Phone number'],
            ['កន្លែង', 'Place'],
            ['គ្រែ', 'Bed'],
            ['ប័ណ្ណ', 'Card'],
            ['ការិយាល័យជំនាញក្នុងស្រុក', 'Local Specialist Office'],
            ['វិស័យ', 'Sector'],
            ['បណ្តុះបណ្ណាលដោយវិស័យជំនាយ', 'Training by specialists'],
            ['បណ្តុះបណ្ណាលដោយអង្គការ/ឯកជន', 'Training by NGO / Private'],
            ['ប្រាក់ចំណូល', 'Revenue'],
            ['ភ្នាក់ងារ', 'Agent'],
            ['ចំណូលប៉ាន់ស្មានប្រចាំឆ្នាំ(រៀល)', 'Estimated annual income (Riel)'],
            ['ទិន្នន័យថ្នាក់ស្រុក', 'District Data'],
            ['១. សមាសភាពរដ្ឋបាលក្នុងស្រុក', '1. Local administrative composition'],
            ['២. សមាសភាពមន្ត្រីការិយាល័យជំនាញក្នុងស្រុក (មន្ត្រីក្របខណ្ឌ)', '2. Composition of Local Specialist Office Officers (Framework Officers)'],
            ['៣. ការងារគាំទ្រ', '3. Support work'],
            ['៤. ការងារបណ្តុះបណ្ណាលវិជ្ជាជីវៈ', '4. Vocational training'],
            ['៥. ចំណូលបានចុះបញ្ជីនៅស្នាក់ការពន្ធដារស្រុក', '5. Income registered at the district tax office'],
            ['៦. ចំនួនអង្គការមិនមែនរដ្ឋាភិបាលជាតិ និងអន្តរជាតិ', '6. Number of national and international NGOs'],
            ['៧. ការងារសុខាភិបាល', '7. Health work'],
            ['៨. ការងារអប់រំ', '8. Education'],
            ['បន្ថែម', 'New'],
            ['រក្សាទុក', 'Save'],
            ['ត្រលប់', 'Back'],
            ['កែប្រែ', 'Edit'],
            ['លុប', 'Delete'],
            ['ហ.ត', 'ha'],
            ['តោន/ហ.ត', 'ton/ha']
        ];

        $('.container-fluid *').each(function () {
            var a = self.lang() == 'en' ? 0 : 1;
            var b = self.lang() == 'en' ? 1 : 0;
            var found = words.find(r => r[a] == this.innerHTML);
            if (found != null) this.innerHTML = found[b];
        });
    }
    changeLang();

    $('.changeLang').off().change(function () {
        self.lang(this.value);
        changeLang();
        ko.refreshView();
    });
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
