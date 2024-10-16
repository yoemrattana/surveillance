<style>
    #myform input {
        text-align: center;
    }
</style>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-end gap-1">
            <button class="btn btn-primary gap-2" form="myform">
                <span class="fa fa-save"></span>
                <span>រក្សាទុក</span>
            </button>
            <button class="btn btn-primary gap-2" data-bind="click: back">
                <span class="fa fa-arrow-left"></span>
                <span>ត្រលប់</span>
            </button>
        </div>
        <hr>

        <form id="myform" data-bind="submit: save">
            <h2 class="pt-2 text-center">ទិន្នន័យថ្នាក់ឃុំ</h2>

            <div class="row g-2 my-5" data-bind="with: masterModel">
                <div class="col-auto">
                    <div class="input-group">
                        <span class="input-group-text">ខេត្ត</span>
                        <select class="form-select"
                            data-bind="value: pv_code, 
                                    options: pvList.sortasc($root.lang() == 'en' ? 'name' : 'namek'),
                                    optionsValue: 'code',
                                    optionsText: $root.lang() == 'en' ? 'name' : 'namek',
                                    optionsCaption: ''"
                            required></select>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="input-group">
                        <span class="input-group-text">ស្រុក</span>
                        <select class="form-select"
                            data-bind="value: ds_code, 
                                    options: dsList().sortasc($root.lang() == 'en' ? 'name' : 'namek'),
                                    optionsValue: 'code',
                                    optionsText: $root.lang() == 'en' ? 'name' : 'namek',
                                    optionsCaption: ''"
                            required></select>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="input-group">
                        <span class="input-group-text">ឃុំ/សង្កាត់</span>
                        <select class="form-select"
                            data-bind="value: cm_code, 
                                    options: dsList().sortasc($root.lang() == 'en' ? 'name' : 'namek'),
                                    optionsValue: 'code',
                                    optionsText: $root.lang() == 'en' ? 'name' : 'namek',
                                    optionsCaption: ''"
                            required></select>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="input-group">
                        <span class="input-group-text">កត់ត្រាដោយ</span>
                        <input type="text" class="form-control" data-bind="value: recorded_by" required />
                    </div>
                </div>
                <div class="col-auto">
                    <div class="input-group">
                        <span class="input-group-text">លេខទូរស័ព្ទ</span>
                        <input type="number" class="form-control" data-bind="value: phone" required />
                    </div>
                </div>
            </div>


            <div class="fs-5" data-bind="visible: lang() == 'kh'">
                ដោយទិន្នន័យមួយចំនួនមានការពាក់ព័ន្ធជាមួយភូមិជាច្រើនក្នុងឃុំសង្កាត់ បើសិនអោយភូមិនីមួយៗស្រង់ ទិន្នន័យនោះនឹងមានភាពស្ទួន 
                ហេតុនេះនាំឱ្យមានការកត់ត្រាស្ថិតិទាំងនោះនៅថ្នាក់ឃុំ-សង្កាត់វិញ ទិន្នន័យទាំងនោះមាន ៖
            </div>
            <div class="fs-5" data-bind="visible: lang() == 'en'">
                Since some of the data is relevant to many communes in the district, if each commune has to extract that
                data
                There will be duplication, so it is necessary to record those statistics at the district level. Those
                data include:
            </div>
            <br />

            {{-- <h4>១. សមាសភាពរដ្ឋបាលក្នុងស្រុក</h4> --}}
            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_1">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        {{-- <td data-bind="text: group(), visible: group() != null && no() == '2.1'" rowspan="5"></td> --}}

                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: total" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ស្រី</span>
                                <input type="number" class="form-control" data-bind="value: female" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br />

            {{-- <table class="table table-bordered">
                <tbody data-bind="foreach: commune_2">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: place" required />
                                <span class="input-group-text">កន្លែង</span>
                            </div>
                        </td>
                        
                    </tr>
                </tbody>
            </table> --}}



            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_2">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && (no() == '8.1' || no() == '9.1')" rowspan="2"></td>
                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>


                        <!-- ko if: no().in(3,4) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: place" required />
                                <span class="input-group-text">កន្លែង</span>
                            </div>
                        </td>
                        <!-- /ko -->

                        <!-- ko if: no().in(5) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: qty" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        
                        <!-- /ko -->
						<!-- ko if: no().in(6,7,8,8.1,8.2,9,9.1,9.2,10) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: ha" required />
                                <span class="input-group-text">ហ.ត</span>
                            </div>
                        </td>
                        
                        <!-- /ko -->
                    </tr>
                </tbody>
            </table>
            <br />
            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_3">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <td>
                            <!-- ko if: no().in(11,12,13) -->
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: ha" required />
                                <span class="input-group-text">ហ.ត</span>
                            </div>
                       <!-- /ko -->
                        
                    </tr>
                </tbody>
            </table> 

            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_4">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <!-- ko if: no().in(14,15,16,18) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: ha" required />
                                <span class="input-group-text">ហ.ត</span>
                            </div>
                        </td>
                        <!-- /ko -->
                        <!-- ko if: no().in(17) -->
                        <td>
                            
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: ton" required />
                                <span class="input-group-text">តោន/ហ.ត</span>
                            </div>
                            
                        </td>
                        <!-- /ko -->
                        
                    </tr>
                </tbody>
            </table>
            
            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_5">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <!-- ko if: no().in(19,20,21,23) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: ha" required />
                                <span class="input-group-text">ហ.ត</span>
                            </div>
                        </td>
                        <!-- /ko -->
                        <!-- ko if: no().in(22) -->
                        <td>
                            
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: ton" required />
                                <span class="input-group-text">តោន/ហ.ត</span>
                            </div>
                            
                        </td>
                        <!-- /ko -->
                         
                    </tr>
                </tbody>
            </table> 

            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_6">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <!-- ko if: no().in(24,26) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: ha" required />
                                <span class="input-group-text">តោន</span>
                            </div>
                            
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: ha" required />
                                <span class="input-group-text">តោន</span>
                            </div>
                            
                        </td>
                        <!-- /ko -->
                        <!-- ko if: no().in(25) -->
                        <td>
                            
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: ton" required />
                                <span class="input-group-text">តោន/ហ.ត</span>
                            </div>
                            
                        </td>
                        <td>
                            
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: ton" required />
                                <span class="input-group-text">តោន/ហ.ត</span>
                            </div>
                            
                        </td>
                        <!-- /ko -->
                         

                    </tr>
                </tbody>
            </table>

            <br />
            
            <table class="table table-bordered">
            <thead class="text-center">
                    <tr>
                        <th rowspan="2">rice paddy</th>
                    </tr>
            </thead>

            <table class="table table-bordered">
            <tr>

            </tr>
                <tbody data-bind="foreach: commune_7">
                    <tr>
                        
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        
                        <!-- ko if: no().in(27,28,29) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: ton" required />
                                <span class="input-group-text">តោន</span>
                            </div>
                        </td>
                        <!-- /ko -->
                        
                    </tr>
                </tbody>
            </table>

            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_8">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <!-- ko if: no().in(30,31,32,33,34,35,36,37) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: ha" required />
                                <span class="input-group-text">ហិកតា</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: ton" required />
                                <span class="input-group-text">តោន</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: ton" required />
                                <span class="input-group-text">តោន</span>
                            </div>
                        </td>
                        <!-- /ko -->

                    </tr>
                </tbody>
            </table>

            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_9">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <!-- ko if: no().in(38,39,40,41,42,43,44,45,46,47,48) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="number" class="form-control" data-bind="value: ha" required />
                                <span class="input-group-text">ហិកតា</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="number" class="form-control" data-bind="value: ha" required />
                                <span class="input-group-text">ហិកតា</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="number" class="form-control" data-bind="value: ton" required />
                                <span class="input-group-text">តោន</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text"></span>
                                <input type="number" class="form-control" data-bind="value: ton" required />
                                <span class="input-group-text">តោន</span>
                            </div>
                        </td>
                        <!-- /ko -->

                    </tr>
                </tbody>
            </table>

            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_10">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && (no() == '51.1')" rowspan="7"></td>
                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>

                         <!-- ko if: no().in(49,50,51) -->
                         <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: meter" required />
                                <span class="input-group-text">ម៉ែត្រ</span>
                            </div>
                        </td>
                        <!-- /ko -->

                        <!-- ko if: no().in(51.1,51.2,51.3,51.4,51.5,51.6,51.7) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: meter" required />
                                <span class="input-group-text">ម៉ែត្រ</span>
                            </div>
                        </td>
                        <!-- /ko -->

                    </tr>
                </tbody>
            </table>


            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_11">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <!-- ko if: no().in(52) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: place" required />
                                <span class="input-group-text">កន្លែង</span>
                            </div>
                        </td>
                        <!-- /ko -->
                        <!-- ko if: no().in(53,54) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: amount" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                    </tr>
                </tbody>
            </table>

            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_12">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <!-- ko if: no().in(55) -->
                        <td colspan = "2">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: place" required />
                                <span class="input-group-text">កន្លែង</span>
                            </div>
                        </td>
                        <!-- /ko -->
                        <!-- ko if: no().in(56,57) -->
                         
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: amount" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ស្រី</span>
                                <input type="number" class="form-control" data-bind="value: amount" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                    </tr>
                </tbody>
            </table>

            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_13">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <!-- ko if: no().in(58) -->
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: place" required />
                                <span class="input-group-text">កន្លែង</span>
                            </div>
                        </td>
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: place" required />
                                <span class="input-group-text">កន្លែង</span>
                            </div>
                        </td>
                        <!-- /ko -->
                        <!-- ko if: no().in(59) -->
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: room" required />
                                <span class="input-group-text">បន្ទប់</span>
                            </div>
                        </td>
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: room" required />
                                <span class="input-group-text">បន្ទប់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                        <!-- ko if: no().in(60) -->
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: classes" required />
                                <span class="input-group-text">ថ្នាក់</span>
                            </div>
                        </td>
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: classes" required />
                                <span class="input-group-text">ថ្នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                        <!-- ko if: no().in(61) -->
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">ស្រី</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                         <!-- ko if: no().in(62) -->
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">ស្រី</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                         <!-- ko if: no().in(63) -->
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">ស្រី</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->

                    </tr>
                </tbody>
            </table>

            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_14">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '8.1'" rowspan="2"></td>


                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <!-- ko if: no().in(64) -->
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: place" required />
                                <span class="input-group-text">កន្លែង</span>
                            </div>
                        </td>
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: place" required />
                                <span class="input-group-text">កន្លែង</span>
                            </div>
                        </td>
                        <!-- /ko -->
                        <!-- ko if: no().in(65) -->
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: room" required />
                                <span class="input-group-text">បន្ទប់</span>
                            </div>
                        </td>
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: room" required />
                                <span class="input-group-text">បន្ទប់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                        <!-- ko if: no().in(66) -->
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: classes" required />
                                <span class="input-group-text">ថ្នាក់</span>
                            </div>
                        </td>
                        <td colspan = "5">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: classes" required />
                                <span class="input-group-text">ថ្នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                        <!-- ko if: no().in(67) -->
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">ស្រី</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                         <!-- ko if: no().in(68) -->
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">ស្រី</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                         <!-- ko if: no().in(69) -->
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">ស្រី</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td colspan = "3">
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: people" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->

                    </tr>
                </tbody>
            </table>

            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: commune_15">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && (no() == '70.1'|| no() == '71.1')" rowspan="3"></td>
                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>

                         <!-- ko if: no().in(70,70.1,70.2,70.3,71) -->
                         <td colspan="2">
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: school" required />
                                <span class="input-group-text">សាលា</span>
                            </div>
                        </td>
                        <!-- /ko -->
                         

                        <!-- ko if: no().in(71.1,71.2) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: boytoilet" required />
                                <span class="input-group-text">ចំនួនបន្ទប់បង្គន់សរុប</span>
                            </div>
                           
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: girltoilet" required />
                                <span class="input-group-text">ចំនួនបន្ទប់បង្គន់សំរាប់សិស្សសី</span>
                            </div>
                            
                        </td>
                        <!-- /ko -->

                    </tr>
                </tbody>
            </table>

            {{-- <h4>២. សមាសភាពមន្ត្រីការិយាល័យជំនាញក្នុងស្រុក (មន្ត្រីក្របខណ្ឌ)</h4>
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th rowspan="2"></th>
                        <th rowspan="2">ការិយាល័យជំនាញក្នុងស្រុក</th>
                        <th colspan="2">ចំនួនបុគ្គល</th>
                        <th colspan="2">ប្រធាន</th>
                        <th colspan="2">អុនប្រធាន</th>
                    </tr>
                    <tr>
                        <th>សរុប</th>
                        <th>ស្រី</th>
                        <th>ប្រុស</th>
                        <th>ស្រី</th>
                        <th>ប្រុស</th>
                        <th>ស្រី</th>
                    </tr>
                </thead>
                <tbody data-bind="foreach: district_2a">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '10.1'" rowspan="2"></td>

                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <td>
                            <input type="number" class="form-control" data-bind="value: staff_total" required />
                        </td>
                        <td>
                            <input type="number" class="form-control" data-bind="value: staff_female" required />
                        </td>
                        <td>
                            <input type="number" class="form-control" data-bind="value: chief_male" required />
                        </td>
                        <td>
                            <input type="number" class="form-control" data-bind="value: chief_female" required />
                        </td>
                        <td>
                            <input type="number" class="form-control" data-bind="value: vice_male" required />
                        </td>
                        <td>
                            <input type="number" class="form-control" data-bind="value: vice_female" required />
                        </td>
                    </tr>
                </tbody>
            </table>

            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: district_2b">
                    <tr>
                        <td data-bind="text: no()"></td>
                        <td data-bind="text: question()"></td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: qty" required />
                                <span class="input-group-text">ស្ថានីយ៍</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br />

            <h4>៣. ការងារគាំទ្រ</h4>
            <table class="table table-bordered">
                <tbody data-bind="foreach: district_3">
                    <tr>
                        <td data-bind="text: no()"></td>
                        <td data-bind="text: question()"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" class="form-control" data-bind="value: qty" required />
                                <span class="input-group-text">ប័ណ្ណ</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br />

            <h4>៤. ការងារបណ្តុះបណ្ណាលវិជ្ជាជីវៈ</h4>
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th rowspan="2"></th>
                        <th rowspan="2">វិស័យ</th>
                        <th colspan="2">បណ្តុះបណ្ណាលដោយវិស័យជំនាយ</th>
                        <th colspan="2">បណ្តុះបណ្ណាលដោយអង្គការ/ឯកជន</th>
                    </tr>
                    <tr>
                        <th>សរុប</th>
                        <th>ស្រី</th>
                        <th>សរុប</th>
                        <th>ស្រី</th>
                    </tr>
                </thead>
                <tbody data-bind="foreach: district_4">
                    <tr>
                        <td data-bind="text: no()"></td>
                        <td data-bind="text: question()"></td>
                        <td>
                            <div class="input-group">
                                <input type="number" class="form-control" data-bind="value: a_total" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="number" class="form-control" data-bind="value: a_female" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="number" class="form-control" data-bind="value: b_total" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="number" class="form-control" data-bind="value: b_female" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-2" data-bind="visible: lang() == 'kh'">
                សំគាល់៖ ការបណ្តុះបណ្តាលវិជ្ជាជីវៈសំដៅទៅលើការបណ្តុះបណ្តាលទាំងឡាយណា ដែលនៅពេលបញ្ចប់វគ្គ
                សិក្ខាកាមដែលបានចូលរួមអាចយកមុខវិជ្ជានោះទៅប្រកបជាមុខរបរទទួលទានបាន ដូចជា៖ បណ្តុះបណ្តាលកាត់ដេរ ត្បាញហូល
                ផាមួង ធ្វើម្ហូប ការបណ្តុះផ្សិត ជាងជួសជុលម៉ាស៊ីន ម៉ូតូ អគ្គីសនី មគ្គុទេសទេសចរណ៍ ….។ល។
            </div>
            <div class="mt-2" data-bind="visible: lang() == 'en'">
                Note: Vocational training refers to any training that at the end of the course
                Participants can take the subject to eat, such as: Training, tailoring, weaving.
                Palm, cooking, mushroom growing, repairing electric motors, tour guides, etc.
            </div>
            <br />

            <h4>៥. ចំណូលបានចុះបញ្ជីនៅស្នាក់ការពន្ធដារស្រុក</h4>
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th></th>
                        <th>ប្រាក់ចំណូល</th>
                        <th>ភ្នាក់ងារ</th>
                        <th>ចំណូលប៉ាន់ស្មានប្រចាំឆ្នាំ(រៀល)</th>
                    </tr>
                </thead>
                <tbody data-bind="foreach: district_5">
                    <tr>
                        <td data-bind="text: no(), visible: group() == null"></td>
                        <td data-bind="text: group(), visible: group() != null && no() == '29.1'" rowspan="10"></td>

                        <td data-bind="text: group() == null ? question() : no() + ' ' + question()"></td>
                        <td>
                            <input type="text" class="form-control" data-bind="value: agent" required />
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="number" class="form-control" data-bind="value: income" required />
                                <span class="input-group-text">រៀល</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br />

            <h4>៦. ចំនួនអង្គការមិនមែនរដ្ឋាភិបាលជាតិ និងអន្តរជាតិ</h4>
            <table class="table table-bordered">
                <tbody data-bind="foreach: district_6a">
                    <tr>
                        <td data-bind="text: no().toFixed(0), visible: no() * 10 % 10 == 1" rowspan="4"></td>
                        <td data-bind="text: group(), visible: no() * 10 % 10 == 1" rowspan="4"></td>

                        <td data-bind="text: question()"></td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">មាន</span>
                                <input type="number" class="form-control" data-bind="value: qty" required />
                                <span class="input-group-text" data-bind="visible: no() * 10 % 10 <= 2">អង្គការ</span>
                                <span class="input-group-text" data-bind="visible: no() * 10 % 10 == 3">នាក់</span>
                                <span class="input-group-text" data-bind="visible: no() * 10 % 10 == 4">ឃុំ</span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br />

            <table class="table table-bordered">
                <tbody data-bind="foreach: district_6b">
                    <tr>
                        <td data-bind="text: no()"></td>
                        <td data-bind="text: question()"></td>

                        <!-- ko if: no() == 36 -->
                        <td colspan="2">
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: qty" required />
                                <span class="input-group-text">កន្លែង</span>
                            </div>
                        </td>
                        <!-- /ko -->

                        <!-- ko if: no() == 37 -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: total" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ស្រី</span>
                                <input type="number" class="form-control" data-bind="value: female" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                    </tr>
                </tbody>
            </table>
            <br />

            <h4>៧. ការងារសុខាភិបាល</h4>
            <table class="table table-bordered">
                <tbody data-bind="foreach: district_7">
                    <tr>
                        <td data-bind="text: no()"></td>
                        <td data-bind="text: question()"></td>

                        <!-- ko if: no().in(38,40,42) -->
                        <td>
                            <div class="input-group">
                                <input type="number" class="form-control" data-bind="value: qty1" required />
                                <span class="input-group-text">កន្លែង</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ចំនួន</span>
                                <input type="number" class="form-control" data-bind="value: qty2" required />
                                <span class="input-group-text">គ្រែ</span>
                            </div>
                        </td>
                        <!-- /ko -->

                        <!-- ko if: no().in(39,41) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: qty1" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ស្រី</span>
                                <input type="number" class="form-control" data-bind="value: qty2" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                    </tr>
                </tbody>
            </table>
            <br />

            <h4>៨. ការងារអប់រំ</h4>
            <table class="table table-bordered">
                <tbody data-bind="foreach: district_8">
                    <tr>
                        <td data-bind="text: no()"></td>
                        <td data-bind="text: question()"></td>

                        <!-- ko if: no().in(43,45) -->
                        <td colspan="2">
                            <div class="input-group">
                                <input type="number" class="form-control" data-bind="value: qty" required />
                                <span class="input-group-text">កន្លែង</span>
                            </div>
                        </td>
                        <!-- /ko -->

                        <!-- ko if: no().in(44,46) -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">សរុប</span>
                                <input type="number" class="form-control" data-bind="value: total" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">ស្រី</span>
                                <input type="number" class="form-control" data-bind="value: female" required />
                                <span class="input-group-text">នាក់</span>
                            </div>
                        </td>
                        <!-- /ko -->
                    </tr>
                </tbody>
            </table> --}}

        </form>
    </div>
</div>
