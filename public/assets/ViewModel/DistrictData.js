function viewModel() {
    var self = this;

    self.view = ko.observable('list');
    self.listModel = ko.observableArray();
    self.questions = ko.observableArray();
    self.lang = ko.observable($('.changeLang').val());
    self.tableDetails = ko.observable();
    self.masterModel = ko.observable();

    var place = null;

    app.ajax('/admin/district-data/getdata').done(function (rs) {
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
            app.ajax('/admin/district-data/getdetail', submit).done(function (rs) {
                self.masterModel(master);
                self.tableDetails(rs);
                self.view('detail');
            });
        }
    };

    self.district_1 = ko.pureComputed(() => {
        var nums = [1, 2, 2.1, 2.2, 2.3, 2.4, 2.5, 3];
        var answers = ['total', 'female'];
        return prepare(nums, answers, 'district_1');
    });

    self.district_2a = ko.pureComputed(() => {
        var nums = [4, 5, 6, 7, 8, 9, 10, 10.1, 10.2, 11, 12, 13, 14, 15, 16];
        var answer = ['staff_total', 'staff_female', 'chief_male', 'chief_female', 'vice_male', 'vice_female'];
        return prepare(nums, answer, 'district_2a');
    });

    self.district_2b = ko.pureComputed(() => {
        var nums = Array.range(17, 21);
        var answer = ['qty'];
        return prepare(nums, answer, 'district_2b');
    });

    self.district_3 = ko.pureComputed(() => {
        var nums = [22, 23];
        var answer = ['qty'];
        return prepare(nums, answer, 'district_3');
    });

    self.district_4 = ko.pureComputed(() => {
        var nums = Array.range(24, 28);
        var answer = ['a_total', 'a_female', 'b_total', 'b_female'];
        return prepare(nums, answer, 'district_4');
    });

    self.district_5 = ko.pureComputed(() => {
        var nums = [29, 29.1, 29.2, 29.3, 29.4, 29.5, 29.6, 29.7, 29.8, 29.9, '29.10'];
        var answer = ['agent', 'income'];
        return prepare(nums, answer, 'district_5');
    });

    self.district_6a = ko.pureComputed(() => {
        var nums = Array.range(30, 35).reduce((arr, r) => arr.concat(r + 0.1, r + 0.2, r + 0.3, r + 0.4), []);
        var answer = ['qty'];
        return prepare(nums, answer, 'district_6a');
    });

    self.district_6b = ko.pureComputed(() => {
        var nums = [36, 37];
        var answer = ['qty', 'total', 'female'];
        return prepare(nums, answer, 'district_6b');
    });

    self.district_7 = ko.pureComputed(() => {
        var nums = Array.range(38, 42);
        var answer = ['qty1', 'qty2'];
        return prepare(nums, answer, 'district_7');
    });

    self.district_8 = ko.pureComputed(() => {
        var nums = Array.range(43, 46);
        var answer = ['qty', 'total', 'female'];
        return prepare(nums, answer, 'district_8');
    });

    self.save = function () {
        var master = newModel().applyData(app.unko(self.masterModel()));
        if (master.id == 0) {
            master.created_by = 'admin';
        } else {
            master.updated_by = 'admin';
            master.updated_on = moment().sqlformat();
        }

        var arr = [1, '2a', '2b', 3, 4, 5, '6a', '6b', 7, 8];
        var tables = arr.reduce((obj, k) => (obj['district_' + k] = self['district_' + k]()) && obj, {});

        var submit = {
            master,
            tables: JSON.stringify(tables)
        };

        app.ajax('/admin/district-data/save', submit).done(function (model) {
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
        app.ajax('/admin/district-data/delete', submit).done(function () {
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
