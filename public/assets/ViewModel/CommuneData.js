function viewModel() {
    var self = this;

    self.view = ko.observable('list');
    self.listModel = ko.observableArray();
    self.questions = ko.observableArray();
    self.lang = ko.observable($('.changeLang').val());
    self.tableDetails = ko.observable();
    self.masterModel = ko.observable();

    var place = null;

    app.ajax('/admin/commune-data/getdata').done(function (rs) {
        place = rs.place;
        self.listModel(rs.list);
        self.questions(rs.questions);
    });

    function prepare(nums, answers, tblname) {
        if (self.questions().length == 0) return [];
        return nums.map(no => {
            var q = self.questions().find(r => r.no == no);

            var model = answers.reduce((obj, key) => (obj[key] = null) ?? obj, {});
            model.q_id = q.id;

            if (self.tableDetails()) {
                var found = self.tableDetails()[tblname].find(r => r.q_id == q.id);
                answers.forEach(key => model[key] = found[key]);
            }

            model.no = () => no;
            model.group = () => self.lang() == 'en' ? q.group_en : q.group_kh;
            model.question = () => self.lang() == 'en' ? q.question_en : q.question_kh;

            return model;
        });
    }

    function newModel() {
        return {
            id: 0,
            ds_code: null,
            cm_code: null,
            recorded_by: '',
            phone: ''
        };
    }

    self.showNew = function () {
        self.showEdit(newModel());
    };

    self.showEdit = function (master) {
        master = app.ko(master);

        master.pv_code = ko.observable(master.ds_code()?.substr(0, 2));
        master.pvList = place.pv;
        master.dsList = () => place.ds.filter(r => r.pvcode == master.pv_code());

        if (master.id() == 0) {
            self.masterModel(master);
            self.tableDetails(null);
            self.view('detail');
        } else {
            var submit = { id: master.id() };
            app.ajax('/admin/commune-data/getdetail', submit).done(function (rs) {
                self.masterModel(master);
                self.tableDetails(rs);
                self.view('detail');
            });
        }
    };

    self.commune_1 = ko.pureComputed(() => {
        var nums = [1, 2,];
        var answers = ['total', 'female'];
        return prepare(nums, answers, 'commune_1');
    });

    self.commune_2 = ko.pureComputed(() => {
        var nums = [3, 4, 5, 6, 7, 8, 8.1, 8.2, 9, 9.1, 9.2, 10,];
        var answers = ['place', 'qty', 'ha'];
        return prepare(nums, answers, 'commune_2');
    });

    self.commune_3 = ko.pureComputed(() => {
        var nums = [11, 12, 13,];
        var answer = ['ha'];
        return prepare(nums, answer, 'commune_3');
    });

    self.commune_4 = ko.pureComputed(() => {
        var nums = [14, 15, 16, 17, 18,];
        var answer = ['ha', 'ton'];
        return prepare(nums, answer, 'commune_4');
    });

    self.commune_5 = ko.pureComputed(() => {
        var nums = [19, 20, 21, 22, 23,];
        var answer = ['ha', 'ton'];
        return prepare(nums, answer, 'commune_5');
    });

    self.commune_6 = ko.pureComputed(() => {
        var nums = [24,25,26];
        var answer = ['ha', 'ton'];
        return prepare(nums, answer, 'commune_6');
    });

    self.commune_7 = ko.pureComputed(() => {
        var nums = [27,28,29];
        var answer = ['ha', 'ton'];
        return prepare(nums, answer, 'commune_7');
    });

    self.commune_8 = ko.pureComputed(() => {
        var nums = [30,31,32,33,34,35,36,37];
        var answer = ['ha', 'ton'];
        return prepare(nums, answer, 'commune_8');
    });

    self.commune_9 = ko.pureComputed(() => {
        var nums = [38,39,40,41,42,43,44,45,46,47,48];
        var answer = ['ha', 'ton', 'tons'];
        return prepare(nums, answer, 'commune_9');
    });

    self.commune_10 = ko.pureComputed(() => {
        var nums = [49,50,51,51.1,51.2,51.3,51.4,51.5,51.6,51.7];
        var answer = ['meter'];
        return prepare(nums, answer, 'commune_10');
    });

    self.commune_11 = ko.pureComputed(() => {
        var nums = [52,53,54];
        var answer = ['place', 'amount'];
        return prepare(nums, answer, 'commune_11');
    });

    self.commune_12 = ko.pureComputed(() => {
        var nums = [55,56,57];
        var answer = ['place', 'amount'];
        return prepare(nums, answer, 'commune_12');
    });

    self.commune_13 = ko.pureComputed(() => {
        var nums = [58,59,60,61,62,63];
        var answer = ['place', 'room', 'classes', 'people'];
        return prepare(nums, answer, 'commune_13');
    });

    self.commune_14 = ko.pureComputed(() => {
        var nums = [64,65,66,67,68,69];
        var answer = ['place', 'room', 'classes', 'people'];
        return prepare(nums, answer, 'commune_14');
    });
    
    self.commune_15 = ko.pureComputed(() => {
        var nums = [70,70.1,70.2,70.3,71,71.1,71.2];
        var answer = ['school', 'boytoilet', 'girltoilet'];
        return prepare(nums, answer, 'commune_15');
    });


    // self.district_2b = ko.pureComputed(() => {
    //     var nums = Array.range(17, 21);
    //     var answer = ['qty'];
    //     return prepare(nums, answer, 'district_2b');
    // });

    // self.district_3 = ko.pureComputed(() => {
    //     var nums = [22, 23];
    //     var answer = ['qty'];
    //     return prepare(nums, answer, 'district_3');
    // });

    // self.district_4 = ko.pureComputed(() => {
    //     var nums = Array.range(24, 28);
    //     var answer = ['a_total', 'a_female', 'b_total', 'b_female'];
    //     return prepare(nums, answer, 'district_4');
    // });

    // self.district_5 = ko.pureComputed(() => {
    //     var nums = [29, 29.1, 29.2, 29.3, 29.4, 29.5, 29.6, 29.7, 29.8, 29.9, '29.10'];
    //     var answer = ['agent', 'income'];
    //     return prepare(nums, answer, 'district_5');
    // });

    // self.district_6a = ko.pureComputed(() => {
    //     var nums = Array.range(30, 35).reduce((arr, r) => arr.concat(r + 0.1, r + 0.2, r + 0.3, r + 0.4), []);
    //     var answer = ['qty'];
    //     return prepare(nums, answer, 'district_6a');
    // });

    // self.district_6b = ko.pureComputed(() => {
    //     var nums = [36, 37];
    //     var answer = ['qty', 'total', 'female'];
    //     return prepare(nums, answer, 'district_6b');
    // });

    // self.district_7 = ko.pureComputed(() => {
    //     var nums = Array.range(38, 42);
    //     var answer = ['qty1', 'qty2'];
    //     return prepare(nums, answer, 'district_7');
    // });

    // self.district_8 = ko.pureComputed(() => {
    //     var nums = Array.range(43, 46);
    //     var answer = ['qty', 'total', 'female'];
    //     return prepare(nums, answer, 'district_8');
    // });

    self.save = function () {
        var master = newModel().applyData(app.unko(self.masterModel()));
        if (master.id == 0) {
            master.created_by = 'admin';
        } else {
            master.updated_by = 'admin';
            master.updated_on = moment().sqlformat();
        }

        var arr = [1, 2];
        var arr = [1];
        var tables = arr.reduce((obj, k) => (obj['commune_' + k] = self['commune_' + k]()) && obj, {});

        var submit = {
            master,
            tables: JSON.stringify(tables)
        };

        app.ajax('/admin/commune-data/save', submit).done(function (model) {
            if (master.id == 0) {
                self.listModel.push(model);
            } else {
                var old = self.listModel().find(r => r.id == model.id);
                self.listModel.replace(old, model);
            }
            self.back();
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
            ['សាលា', 'School'],
            ['ចំនួនបន្ទប់បង្គន់សរុប', 'boytoilet'],
            ['ចំនួនបន្ទប់បង្គន់សំរាប់សិស្សសី', 'girltoilet'],
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
            ['តោន/ហ.ត', 'tons'],
            ['តោន', 'ton'],
            ['ម៉ែត្រ', 'Meter'],
            ['ខ្សែ', 'Line'],
            ['ស្រូវប្រាំង', 'rice paddy'],
            ['បន្ទប់', 'room'],
            ['ថ្នាក់', 'classes']

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
