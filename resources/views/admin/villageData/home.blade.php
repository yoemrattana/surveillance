<h4 class="text-primary fw-bold">{{__('village.housing')}}</h4>
<span class="fs-6">{{__('village.housing_note')}}</span>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
        <tr class="text-center align-middle">
            <th rowspan="2" class="col-num"></th>
            <th rowspan="2" class="col-2">{{__('village.housing_type')}}</th>
            <th rowspan="2" class="col-2">{{__('village.num_of_family')}}</th>
            <th rowspan="2">{{__('village.num_of_house_total')}}</th>
            <th colspan="4">{{__('village.house_with_light')}}</th>
            <th rowspan="2">{{__('village.house_with_tv')}}</th>
        </tr>
        <tr>
            <th>{{__('village.electricity')}}</th>
            <th>{{__('village.battery')}}</th>
            <th>{{__('village.sun')}}</th>
            <th>{{__('village.bio_energy')}}</th>
        </tr>
    </thead>
    <tbody>
    <!-- ko foreach: new Array(144, 145, "145.1", 146, 147, 148, 149) -->
        <tr class="text-center">
            <!-- ko with: $parent.getQuestionByNo($parent.home(), $data) -->
                <td data-bind="text: no()" class="col-num"></td>
                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <input data-bind="value: value" type="number" class="form-control" >
                        
                    </div>
                    <span class="fs-6" data-bind="text: unit()"></span>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.home(), $data+".a") -->
                <td>
                    <div class="input-group">
                        <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                    </div>
                    <span class="fs-6" data-bind="text: unit()"></span>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.home(), $data+".b") -->
                <td>
                    <div class="input-group">
                        <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                    </div>
                    <span class="fs-6" data-bind="text: unit()"></span>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.home(), $data+".c") -->
                <td>
                    <div class="input-group">
                        <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                    </div>
                    <span class="fs-6" data-bind="text: unit()"></span>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.home(), $data+".d") -->
                <td>
                    <div class="input-group">
                        <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                    </div>
                    <span class="fs-6" data-bind="text: unit()"></span>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.home(), $data+".e") -->
                <td>
                    <div class="input-group">
                        <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                    </div>
                    <span class="fs-6" data-bind="text: unit()"></span>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.home(), $data+".f") -->
                <td>
                    <div class="input-group">
                        <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                    </div>
                    <span class="fs-6" data-bind="text: unit()"></span>
                </td>
            <!-- /ko -->
        </tr>
    <!-- /ko -->        
    </tbody>

</table>
<br>
<span class="fs-6">{{__('village.num_housing_note')}}</span>
<br/>

<h4 class="text-primary fw-bold">{{__('village.home_no_people_living')}}</h4>
<br/>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
        <tr>
            <th>{{__('village.thatched_roof_house')}}</th>
            <th>{{__('village.zinc_house')}}</th>
            <th>{{__('village.cement_well_house')}}</th>
            <th>{{__('village.flat_house')}}</th>
            <th>{{__('village.villa_house')}}</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <!-- ko with: getQuestionByNo(home(), '150') -->
                <td>
                    <div class="input-group">
                        <input data-bind="value: value" type="number" class="form-control" >
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
            <!-- ko foreach: new Array('a', 'b', 'c', 'd') -->
                <!-- ko with: $parent.getQuestionByNo($parent.home(), '150.'+$data) -->
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                        
                    </td>
                <!-- /ko -->
            <!-- /ko -->
        </tr>
    </tbody>
    
</table>