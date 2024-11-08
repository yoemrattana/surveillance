<h4 class="fw-bold text-primary">{{__('district.2_composition_of_local_specialist_office_officers')}}</h4>
<table class="table table-bordered border border-1">
    <thead class="text-center align-middle table-primary">
        <tr>
            <th rowspan="2"></th>
            <th rowspan="2">{{__('district.local_specialist_office')}}</th>
            <th colspan="2">{{__('district.number_of_staffs')}}</th>
            <th colspan="2">{{__('district.chief')}}</th>
            <th colspan="2">{{__('district.vice_chief')}}</th>
        </tr>
        <tr>
            <th>{{__('district.total')}}</th>
            <th>{{__('district.female')}}</th>
            <th>{{__('district.male')}}</th>
            <th>{{__('district.female')}}</th>
            <th>{{__('district.male')}}</th>
            <th>{{__('district.female')}}</th>
        </tr>
    </thead>
    <tbody >
        <!-- ko foreach: new Array(4,5,6,7,8,9,10,11,12,13,14,15,16) -->
        <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), $data) -->
                <td data-bind="text: no()"></td>

                <td data-bind="text:  question()"></td>
            
                <td>
                    <input type="number" class="form-control" data-bind="value: value" required />
                </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), $data + ".f") -->
                
                <td>
                    <input type="number" class="form-control" data-bind="value: value" required />
                </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), $data + ".a") -->
                <td>
                    <input type="number" class="form-control" data-bind="value: value" required />
                </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), $data + ".a.f") -->
                <td>
                    <input type="number" class="form-control" data-bind="value: value" required />
                </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), $data + ".b") -->
                <td>
                    <input type="number" class="form-control" data-bind="value: value" required />
                </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), $data + ".b.f") -->
                <td>
                    <input type="number" class="form-control" data-bind="value: value" required />
                </td>
                <!-- /ko -->
        </tr>
        <!-- ko if: $data == 10 -->
            <tr>
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), '10.1') -->
                    
                    <td rowspan="2" ></td>
                    
                    <td data-bind="text: no() + ' ' + question()"></td>
                
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(),  "10.1.f") -->
                    
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(),  "10.1.a") -->
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), "10.1.a.f") -->
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), "10.1.b") -->
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), "10.1.b.f") -->
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    
                
            </tr>
            <tr>
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), '10.2') -->
                    
                    
                    
                    <td data-bind="text: no() + ' ' + question()"></td>
                
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(),  "10.2.f") -->
                    
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(),  "10.2.a") -->
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), "10.2.a.f") -->
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), "10.2.b") -->
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), "10.2.b.f") -->
                    <td>
                        <input type="number" class="form-control" data-bind="value: value" required />
                    </td>
                    <!-- /ko -->
                    
                
            </tr>
        <!-- /ko -->
        <!-- /ko -->
    </tbody>
</table>
<br>
<table class="table table-bordered border border-1">
    <tbody>
        <!-- ko foreach: new Array(17,18,19,20,21) -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_framework_officers(), $data) -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('district.amount')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.station')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- /ko -->
    </tbody>
</table>