<h4 class="fw-bold text-primary">{{__('village.category_male_statistics')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="text-center align-middle table-primary">
        <tr>
            <th rowspan="2" class="col-num">{{__('general.num')}}</th>
            <th rowspan="2">{{__('general.agegroup')}}</th>
            <th rowspan="2" class="col-2">{{__('general.number')}}</th>
            <th colspan="4">{{__('general.general_school')}}</th>
            <th rowspan="2">{{__('general.private_university')}}</th>
            <th rowspan="2">{{__('general.specialize_school')}}</th>
            <th rowspan="2">{{__('general.illiterate')}}</th>
        </tr>
        <tr>
            <th>{{ __('general.kinderkathen')}}</th>
            <th>{{ __('general.primary_school')}}</th>
            <th>{{ __('general.secondary_school')}}</th>
            <th>{{ __('general.high_school')}}</th>
        </tr>
    </thead>
    <tbody>
        <!-- ko foreach: new Array(3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14) -->
    
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_male_education(), $data) -->
            <td data-bind="text: no()" class="col-num"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->
            <!-- ko if: $data == 4 || $data == 5 || $data == 6 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_male_education(), $data + '.a') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if: $data !== 4 && $data !== 5 && $data !== 6 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->

            <!-- ko if:  $data == 6 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_male_education(), $data + '.b') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data == 7 || $data == 8 || $data == 9 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_male_education(), $data + '.a') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data !== 6 && $data !== 7 && $data !== 8 && $data !== 9 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->

            <!-- ko if:  $data == 8 || $data == 9 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_male_education(), $data + '.b') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data !== 8 && $data !== 9 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->

            <!-- ko if:  $data == 9 || $data == 10 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_male_education(), $data + '.c') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data !== 9 && $data !== 10 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->

            <!-- ko if:  $data == 10 || $data == 11 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_male_education(), $data + '.a') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data !== 10 && $data !== 11 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->
           
            <!-- ko if:  $data == 10 || $data == 11 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_male_education(), $data + '.b') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data !== 10 && $data !== 11 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->
          
            <!-- ko if:  $data == 9 || $data == 10 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_male_education(), $data+".d") -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data == 11 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_male_education(), $data+".c") -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data == 12 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_male_education(), $data+".a") -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->
            
             <!-- ko if:  $data !== 9 && $data !== 10 && $data !== 11  && $data !== 12 -->
             <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->
               
       </tr>
        <!-- /ko -->
    </tbody>
</table>
