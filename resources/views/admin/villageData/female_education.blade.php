<h4 class="fw-bold text-primary">{{__('village.category_female_statistics')}} </h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="text-center align-middle table-primary">
        <tr>
            <th rowspan="2">{{__('general.num')}}</th>
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
        
        <!-- ko foreach: new Array(16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27) -->
        
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_female_education(), $data) -->
            <td data-bind="text: no()" class="col-num"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->
            <!-- ko if: $data == 17 || $data == 18 || $data == 19 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_female_education(), $data + '.a') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if: $data !== 17 && $data !== 18 && $data !== 19 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->

            <!-- ko if:  $data == 19 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_female_education(), $data + '.b') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data == 20 || $data == 21 || $data == 22 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_female_education(), $data + '.a') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data !== 19 && $data !== 20 && $data !== 21 && $data !== 22 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->

            <!-- ko if:  $data == 21 || $data == 22 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_female_education(), $data + '.b') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data !== 21 && $data !== 22 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->

            <!-- ko if:  $data == 22 || $data == 23 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_female_education(), $data + '.c') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data !== 22 && $data !== 23 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->

            <!-- ko if:  $data == 23 || $data == 24 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_female_education(), $data + '.a') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data !== 23 && $data !== 24 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->
           
            <!-- ko if:  $data == 23 || $data == 24 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_female_education(), $data + '.b') -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data !== 23 && $data !== 24 -->
            <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->
          
            <!-- ko if:  $data == 22 || $data == 23 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_female_education(), $data+".d") -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data == 24 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_female_education(), $data+".c") -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->

            <!-- ko if:  $data == 25 -->
            <td>
                <!-- ko with: $parent.getQuestionByNo($parent.village_female_education(), $data+".a") -->
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
                <!-- /ko -->
            </td>
            <!-- /ko -->
            
             <!-- ko if:  $data !== 22 && $data !== 23 && $data !== 24  && $data !== 25 -->
             <td data-bind="css: { cellx: true }"></td>
            <!-- /ko -->
               
       </tr>
       <!-- /ko -->
    </tbody>
</table>
