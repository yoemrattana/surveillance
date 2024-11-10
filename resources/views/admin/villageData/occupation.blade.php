<h4 class="fw-bold text-primary">{{__('village.occupation')}}</h4>
<p>
  {{__('village.occupation_subtitle')}}
</p>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
        <tr>
            <th rowspan="2" class="col-num"></th>
            <th class="align-middle text-center" rowspan="2">{{__('village.description')}}</th>
            <th class="text-center" colspan="3">{{__('village.pop_from_18age')}}</th>
        </tr>
        <tr>
            <th class="text-center col-1">{{__('village.sex')}}</th>
            <th class="text-center col-2">{{__('village.main_work')}}</th>
            <th class="text-center col-2">{{__('village.secondary_work')}}</th>
        </tr>
    </thead>

    <tbody>
        <!-- ko foreach: new Array( 32,33,34,35,36, 37, 38, 39, 40, 41,
                                    42,43, 44,45, 46, 47, 48, 49,50, 51, 52) -->

        <!-- ko if: $data !== 52 -->
        <tr data-bind="visible: $index()==0">
            <td colspan="5"><h4>{{__('village.rice_farming')}}</h4></td>
        </tr>
        <tr data-bind="visible: $index()==4">
            <td colspan="5"><h4>{{__('village.fishing')}}</h4></td>
        </tr>
        <tr data-bind="visible: $index()==7">
            <td colspan="5"><h4>{{__('village.craftwork')}}</h4></td>
        </tr>
        <tr data-bind="visible: $index()==15">
            <td colspan="5"><h4>{{__('village.service')}}</h4></td>
        </tr>

        
        <tr>
           <!-- ko with: $parent.getQuestionByNo($parent.village_occupation(), $data) -->
            <td rowspan="2" data-bind="text: no()"></td>
            <td rowspan="2" data-bind="text: question()"></td>
            <td class="text-center">{{__('general.male')}}</td>
           
            <td>
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.village_occupation(), $data+".a") -->
            <td>
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_occupation(), $data+".f") -->
            <td class="text-center">{{__('general.female')}}</td>
            <td>
                <div class="input-group">
                    <input data-bind="value: value" type="text"
                        class="form-control">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->

            <!-- ko with: $parent.getQuestionByNo($parent.village_occupation(), $data+".a.f") -->
            <td>
                <div class="input-group">
                    <input data-bind="value: value" type="text" class="form-control">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- /ko -->

        <!-- ko if: $data == 52 -->
        <tr>
           <!-- ko with: $parent.getQuestionByNo($parent.village_occupation(), "52") -->
            <td rowspan="2" data-bind="text: no()"></td>
            <td rowspan="2" data-bind="text: question()"></td>
            <td class="text-center">{{__('general.male')}}</td>
           
            <td>
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->

            <td data-bind="css: { cellx: true }"></td>

        </tr>

        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_occupation(),"52.f") -->
            <td class="text-center">{{__('general.female')}}</td>
            <td>
                <div class="input-group">
                    <input data-bind="value: value" type="text"
                        class="form-control">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->

            <td data-bind="css: { cellx: true }"></td>
           
        </tr>
        <!-- /ko -->
        <!-- /ko -->
    </tbody>
</table>

<br>
<!-- add new 11/08/2024 -->
<table class="tbl-data table table-bordered border border-1">
    <thead class="table-primary">
         <tr class="text-center align-middle">
            <th class="col-num">{{__('general.num')}}</th>
            <th>{{__('general.description')}}</th>
            <th>{{__('general.gender')}}</th>
            <th class="col-2">{{__('general.total')}}</th>
        </tr>
    </thead>
    <tbody>        
        <!-- ko foreach: new Array(53, 54) -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.village_occupation(), $data) -->
                    <td rowspan="4" data-bind="text: no()"></td>
                    <td rowspan="2" data-bind="text: question()"></td>
                    <td>
                        {{__('general.male')}}
                    </td>
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="text" class="form-control">
                            <span class="input-group-text">{{__('general.person')}}</span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.village_occupation(), $data + ".f") -->
                    <td>
                        {{__('general.female')}}
                    </td>
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="text" class="form-control">
                            <span class="input-group-text">{{__('general.person')}}</span>
                        </div>
                    </td>
                <!-- /ko -->                
            </tr>

            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.village_occupation(), $data+".a") -->
                    <td rowspan="2" data-bind="html: question()"></td>
                    <td>
                        {{__('general.male')}}
                    </td>
                    <td>
                        <div class="input-group">
                            
                            <input data-bind="value: value" type="text" class="form-control">
                            <span class="input-group-text">{{__('general.person')}}</span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.village_occupation(), $data + ".a.f") -->
                    <td>
                        {{__('general.female')}}
                    </td>
                    <td>
                        <div class="input-group">                            
                            <input data-bind="value: value" type="text" class="form-control">
                            <span class="input-group-text">{{__('general.person')}}</span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>

        <!-- /ko -->
        
    </tbody>
</table>







