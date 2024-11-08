function newModel() {
    return {
        id: 0,
        vl_code: null,
        phone: '',
        commune_leader: 'N/A',
        year: '',        
        phone_commune: '',
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
        value_txt: ko.observable(model?.value_txt),
    }
}


function viewModel() {
    const self = this;
    
    self.listModel = ko.observableArray();
    self.tableDetails = ko.observable();
    self.masterModel = ko.observableArray();
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
    self.commune_leader  = ko.observable('N/A')
    self.phone_commune = ko.observable();
    self.successMessage = ko.observable();

    var place = null;


    app.ajax('/admin/village-data/getdata').done(function (rs) {
        place = rs.place;
        self.masterModel(rs.master);
        self.questions(rs.questions);
        self.pvList(place.pv);      
    });
    
    function prepare(nums, answers, tblname) {
        if (self.questions().length == 0) return [];
        return nums.map(no => {
            var q = self.questions().find(r => r.no == no);

            var model = answers.reduce((obj, key) => (obj[key] = null) ?? obj, {});
            model.question_id = q.id;

            if (self.tableDetails() && self.tableDetails()[tblname]) {
                var found = self.tableDetails()[tblname]?.find(r => r.question_id == q.id);
                found && answers.forEach(key => model[key] = (found[key] || 0));
            }

            model.no = () => no;
            model.group = () => self.lang() == 'en' ? q.group_en : q.group_kh;
            model.sub_group = () => self.lang() == 'en' ? q.sub_group_en : q.sub_group_kh;
            model.question = () => self.lang() == 'en' ? q.question_en : q.question_kh;
            model.unit = () => self.lang() == 'en' ? q.unit_en : q.unit_kh;
            model.short_code = () => q.short_code;
            model.value = ko.observable(q?.value) ;
            model.value_txt = ko.observable(q?.value_txt) ;
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
    // ============
    self.village_base_profile = ko.pureComputed(() => {
        var nums = [1, 2];
        var answers = ['value'];
        return prepare(nums, answers, 'village_base_profile');
    });
    self.village_male_education = ko.pureComputed(() => {
        var nums = [3, 4, "4.a", 5,"5.a", 6, "6.a","6.b", 7,"7.a", 8,"8.a","8.b", 9,"9.a","9.b","9.c","9.d", 10,"10.a","10.b","10.c","10.d", 11,"11.a","11.b","11.c", 12,"12.a", 13, 14];
        var answers = ['value'];
        return prepare(nums, answers, 'village_male_education');
    });
    self.village_female_education = ko.pureComputed(() => {
        var nums = [16, 17, "17.a", 18,"18.a", 19, "19.a","19.b", 20,"20.a", 21,"21.a","21.b", 22,"22.a","22.b","22.c","22.d", 23,"23.a","23.b","23.c","23.d", 24,"24.a","24.b","24.c", 25,"25.a", 26, 27];
        var answers = ['value'];
        return prepare(nums, answers, 'village_female_education');
    });
    self.village_school_location = ko.pureComputed(() => {
        var nums = [29, 30, 31];
        var answers = ['value'];
        return prepare(nums, answers, 'village_school_location');
    });
    self.village_occupation = ko.pureComputed(() => {
        var nums = [32, "32.f", "32.a", "32.a.f",
                    33, "33.f", "33.a", "33.a.f",
                    34, "34.f", "34.a", "34.a.f",
                    35, "35.f", "35.a", "35.a.f",
                    36, "36.f", "36.a", "36.a.f",
                    37, "37.f", "37.a", "37.a.f",
                    38, "38.f", "38.a", "38.a.f",
                    39, "39.f", "39.a", "39.a.f",
                    40, "40.f", "40.a", "40.a.f",
                    41, "41.f", "41.a", "41.a.f",
                    42, "42.f", "42.a", "42.a.f",
                    43, "43.f", "43.a", "43.a.f",
                    44, "44.f", "44.a", "44.a.f",
                    45, "45.f", "45.a", "45.a.f",
                    46, "46.f", "46.a", "46.a.f",
                    47, "47.f", "47.a", "47.a.f",
                    48, "48.f", "48.a", "48.a.f",
                    49, "49.f", "49.a", "49.a.f",
                    50, "50.f", "50.a", "50.a.f",
                    51, "51.f", "51.a", "51.a.f",
                    52, "52.f", "52.a", "52.a.f",
                    53, "53.f", "53.a", "53.a.f",
                    54, "54.f", "54.a", "54.a.f",
                ];
        var answers = ['value'];
        return prepare(nums, answers, 'village_occupation');
    });
    self.village_production = ko.pureComputed(() => {
        var nums = [55, "55.a", "55.b", "55.1","55.1.a","55.1.b","55.2","55.2.a","55.2.b",
                    56, "56.a", "56.b", 
                    57, "57.a", "57.b", 
                    58, "58.a", "58.b", 
                    59, "59.a", "59.b", 
                    60, "60.a", "60.b", 
                    61, "61.a", "61.b", 
                    62, "62.a", "62.b", 
                    63, "63.a", "63.b", 
                    64, "64.a", "64.b", 
                    65, "65.a", "65.b", 
                    66, "66.a", "66.b", 
                    67, "67.a", "67.b", 
                    68, "68.a", "68.b", 
                    69, 70, 71, 72, 
                ];
        var answers = ['value'];
        return prepare(nums, answers, 'village_production');
    });


    self.village_store = ko.pureComputed(() => {
        var nums = [
                    73, "73.a", "73.b", 
                    74, "74.a", "74.b", 
                    75, "75.a", "75.b", 
                    76, "76.a", "76.b", 
                    77, "77.a", "77.b", 
                    78, "78.a", "78.b", 
                    79, "79.a", "79.b", 
                    80, "80.a", "80.b", 
                    81, "81.a", "81.b", 
                    82, "82.a", "82.b", 
                    83, "83.a", "83.b", 
                    84, "84.a", "84.b", 
                    85, "85.a", "85.b", 
                    86, "86.a", "86.b",
                    87, "87.a", "87.b",
                    88, "88.a", "88.b",
                    89, "89.a", "89.b",
                ];
        var answers = ['value'];
        return prepare(nums, answers, 'village_store');
    });

    self.village_agriculture = ko.pureComputed(() => {
        var nums = [
                    90, 91, 92, 93, 94, 95, 96, 97, 98,"98.1", 99, 100, 101, 102, 103, 104
                ];
        var answers = ['value'];
        return prepare(nums, answers, 'village_agriculture');
    });

    self.agriculture_machinery = ko.pureComputed(() => {
        var nums = ["105", "105.a", "106", "106.a", "107", "107.a",
                    "108", "108.a", "109", "109.a", "110", "110.a",
                    "111", "111.a", "112", "112.a", "113", "113.a",
                    "114", "114.a"
                    ];
        var answers = ['value'];
        return prepare(nums, answers, 'agriculture_machinery');
    });    
    self.truck_transportation = ko.pureComputed(() => {
        var nums = ["115", "115.a", "116", "116.a", "117", "117.a",
                    "118", "118.a", "119", "119.a", "120", "120.a",
                    "121", "121.a", "122", "122.a", "123", "123.a",
                    "124", "124.a", "125", "125.a", "126", "126.a",
                    "127", "127.a", "128", "128.a", "129", "129.a",
                    "130", "130.a"
                    ];
        var answers = ['value'];
        return prepare(nums, answers, 'truck_transportation');
    });    
    self.distance_village_province = ko.pureComputed(() => {
        var nums = ["131", "132", "133"];
        var answers = ['value'];
        return prepare(nums, answers, 'distance_village_province');
    });

    self.livestock = ko.pureComputed(() => {
        var nums = ["134", "134.a", "135", "135.a", "136", "136.a",
                    "137", "137.a", "138", "138.a", "139", "139.a",
                    "140", "140.a", "141", "141.a", "142", "142.a",
                    "143", "143.a"];
        var answers = ['value'];
        return prepare(nums, answers, 'livestock');
    });

    self.home = ko.pureComputed(() => {
        var nums = ["144", "144.a", "144.b", "144.c", "144.d", "144.e", "144.f",
                    "145", "145.a", "145.b", "145.c", "145.d", "145.e", "145.f", 
                    "145.1", "145.1.a", "145.1.b", "145.1.c", "145.1.d", "145.1.e", "145.1.f",
                    "146", "146.a", "146.b", "146.c", "146.d", "146.e", "146.f",
                    "147", "147.a", "147.b", "147.c", "147.d", "147.e", "147.f",
                    "148", "148.a", "148.b", "148.c", "148.d", "148.e", "148.f",
                    "149", "149.a", "149.b", "149.c", "149.d", "149.e", "149.f",
                    "150", "150.a", "150.b", "150.c", "150.d"];
        var answers = ['value'];
        return prepare(nums, answers, 'home');
    });

    self.health = ko.pureComputed(() => {
        var nums = ["151", "152", "153", "154", "154.a", "154.b", "154.c",
                    "155", "155.a", "155.b", "155.c", "156", "157", "157.1"];
        var answers = ['value', 'value_txt'];
        return prepare(nums, answers, 'health');
    });
    self.water_resource = ko.pureComputed(() => {
        var nums = ["158", "159", "159.a", "160", "160.a", "161",
                     "161.a", "162", "162.a", "163", "164", 165, 166, 167,
                     168, 169];
        var answers = ['value'];
        return prepare(nums, answers, 'water_resource');
    });

    self.toilet = ko.pureComputed(() => {
        var nums = ["170", "170.1", "170.2"];
        var answers = ['value'];
        return prepare(nums, answers, 'toilet');
    });

    self.vunerability = ko.pureComputed(() => {
        var nums = ["171", "171.a", "171.b", "172", "172.a", "172.b", "173", "173.a", "173.b",
                    "174", "175", "175.a", "176", "177", "178", "179", "180", "181", "182", "183",
                    "184", "184.a", "184.1", "184.1.a", "185", "185.a", "185.1", "185.1.a",
                    ];
        var answers = ['value'];
        return prepare(nums, answers, 'vunerability');
    });

    self.disability = ko.pureComputed(() => {
        var nums = ["186", "186.f", "186.1", "186.1.f", "186.2", "186.2.f",
                    "186.3", "186.3.f", "186.4", "186.4.f", "187", "187.f", 
                    "188", "188.f", "189", "189.f", "190", "190.f"
                    ];
        var answers = ['value'];
        return prepare(nums, answers, 'disability');
    });

    self.natural_resource = ko.pureComputed(() => {
        var nums = ["191", "191.a", "192", "192.a", "193", "193.a",
                    "194", "194.a", "195", "195.a", "196", "197"
                    ];
        var answers = ['value'];
        return prepare(nums, answers, 'natural_resource');
    });

    self.security = ko.pureComputed(() => {
        var nums = ["198", "199", "200", "201", "201.1", "201.2"];
        var answers = ['value'];
        return prepare(nums, answers, 'security');
    });

    self.violence = ko.pureComputed(() => {
        var nums = ["202", "203", "204", "204.f", "204.1", "204.1.f", "205"];
        var answers = ['value'];
        return prepare(nums, answers, 'violence');
    });

    self.dead = ko.pureComputed(() => {
        var nums = ["206", "206.a", "206.b", "206.c", "206.d", "206.1",
                    "206.1.a", "206.1.b", "206.1.c", "206.1.d", "206.2",
                    "206.2.a", "206.2.b", "206.2.c", "206.2.d", "206.3",
                    "206.3.a", "206.3.b", "206.3.c", "206.3.d", "206.4",
                    "206.4.a", "206.4.b", "206.4.c", "206.4.d", "206.5",
                    "206.5.a", "206.5.b", "206.5.c", "206.5.d", "206.6",
                    "206.6.a", "206.6.b", "206.6.c", "206.6.d", "206.7",
                    "206.7.a", "206.7.b", "206.7.c", "206.7.d", "206.8",
                    "206.8.a", "206.8.b", "206.8.c", "206.8.d", "206.9",
                    "206.9.a", "206.9.b", "206.9.c", "206.9.d", "206.10",
                    "206.10.a", "206.10.b", "206.10.c", "206.10.d", "206.11",
                    "206.11.a", "206.11.b", "206.11.c", "206.11.d"];
        var answers = ['value'];
        return prepare(nums, answers, 'dead');
    });

    self.minority = ko.pureComputed(() => {
        var nums = ["207", "207.a", "207.b", "207.c", "207.d", "208",
                    "208.a", "208.b", "208.c", "208.d", "209", "209.a",
                    "209.b", "209.c", "209.d", "210", "210.a", "210.b",
                    "210.c", "210.d", "211", "211.a", "211.b", "211.c",
                    "211.d", "212", "212.a", "212.b", "212.c", "212.d",
                    "213", "213.a", "213.b", "213.c", "213.d", "214",
                    "214.a", "214.b", "214.c", "214.d", "215", "215.a",
                    "215.b", "215.c", "215.d", "216", "216.a", "216.b",
                    "216.c", "216.d", "217", "217.a", "217.b", "217.c",
                    "217.d", "218", "218.a", "218.b", "218.c", "218.d",
                    "219", "219.a", "219.b", "219.c", "219.d", "220",
                    "220.a", "220.b", "220.c", "220.d", "221", "221.a",
                    "221.b", "221.c", "221.d", "222", "222.a", "222.b",
                    "222.c", "222.d", "223", "223.a", "223.b", "223.c",
                    "223.d", "224", "224.a", "224.b", "224.c", "224.d",
                    "225", "225.a", "225.b", "225.c", "225.d", "226",
                    "226.a", "226.b", "226.c", "226.d", "227", "227.a",
                    "227.b", "227.c", "227.d"];
        var answers = ['value'];
        return prepare(nums, answers, 'minority');
    });

    self.sum_truck = ko.computed(function(){
        var sum = 0;
        var truck_no = ["115.a", "116.a", "117.a", "118.a", "119.a", "120.a"]
        for(var p = 0; p < self.truck_transportation().length; ++p)
        {
            if(truck_no.includes(self.truck_transportation()[p].no())){
                if(self.truck_transportation()[p].value()){
                    sum += parseInt(self.truck_transportation()[p].value());
                }                
            }            
        }
        return sum;
    });

    self.sum_boat = ko.computed(function(){
        var sum = 0;
        var boat_no = ["125.a", "126.a"]
        for(var p = 0; p < self.truck_transportation().length; ++p)
        {
            if(boat_no.includes(self.truck_transportation()[p].no())){
                if(self.truck_transportation()[p].value()){
                    sum += parseInt(self.truck_transportation()[p].value());
                }              
            }            
        }
        return sum;
    });

    self.sum_motor_boat = ko.computed(function(){
        var sum = 0;
        var boat_no = ["127.a", "128.a", "129.1"]
        for(var p = 0; p < self.truck_transportation().length; ++p)
        {
            if(boat_no.includes(self.truck_transportation()[p].no())){
                if(self.truck_transportation()[p].value()){
                    sum += parseInt(self.truck_transportation()[p].value());
                }              
            }            
        }
        return sum;
    });



    // =============
    self.loadData = () => {
        if(self.vl() && self.year()){
            let params = `vl_code=${self.vl()}&year=${self.year()}`
            app.ajax('/admin/village-data/search?'+params).done(function (response) {
                self.recorded_by(response.updated_by);
                self.phone(response.phone);
                self.phone_commune(response.phone_commune);
                self.masterModel(response);
                self.questions(response.questions);
            });
        }        
    }


    self.save = () => {
        if (self.vl() == null) return;
        var master = newModel().applyData(app.unko(self.masterModel()));
        
        if (master.id == 0) {
            master.recorded_by = self.recorded_by();
        }
        master.updated_by = self.recorded_by();
        master.updated_at = moment().sqlformat();
        master.vl_code = self.vl()
        master.year = self.year()
        master.phone = self.phone()
        master.commune_leader = self.commune_leader()
        master.phone_commune = self.phone_commune()

        
        var formData = ko.toJSON(self.question_params());
        var params = { master, responses: formData };
        console.log(params);
        app.ajax('/admin/village-data/save', params).done(function (response) {
            console.log('++++++++++++ save +++++++++++++');
            console.log(params);
            self.successMessage(response.message);
            app.showToast();
        });
    };

    self.question_params = function (model) {
        const categories = [
            self.village_base_profile,
            self.village_male_education,
            self.village_female_education,
            self.village_school_location,
            self.village_occupation,
            self.village_production,
            self.village_store,
            self.village_agriculture,
            self.agriculture_machinery,
            self.truck_transportation,
            self.distance_village_province,
            self.livestock,
            self.home,
            self.health,
            self.water_resource,
            self.toilet,
            self.vunerability,
            self.disability,
            self.natural_resource,
            self.security,
            self.violence,
            self.dead,
            self.minority
        ];
    
        const mapCategory = category => category().map(item => ({
            question_id: item.question_id,
            value: item.value,
            value_txt: item.value_txt
        }));
    
        return categories.flatMap(mapCategory);
    };

   
    self.showDelete = function (model) {
        var submit = { id: model.id };
        app.ajax('/admin/village-data/delete', submit).done(function () {
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
    
    self.getVlName = function (code) {
        return place.vl.find(r => r.code == code)[self.lang() == 'en' ? 'name' : 'namek'];
    };
}

$(document).on('keydown', 'input[type=number]', function (event) {
    var keys = ['e', 'E', '-', '+', ','];
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


