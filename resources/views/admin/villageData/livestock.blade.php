<h4 class="fw-bold text-primary">{{__('village.livestock_raising')}}</h4>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <tr>
        <th class="col-num"></th>
        <th>{{__('general.animal_type')}}</th>
        <th class="col-4">{{__('village.num_of_family_foster')}}</th>
        <th class="col-4">{{__('village.num_animal_raising')}}</th>
    </tr>
    <!-- ko foreach: new Array(134, 135, 136, 137, 138, 139, 140) -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.livestock(), $data) -->
            <td data-bind="text: no()" class="col-num"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.has')}}</span>
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.livestock(), $data+".a") -->
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.has')}}</span>
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
    <!-- /ko -->
</table>
<br/>
<span class="fs-6">
    {{__('village.livestock_note')}}
    <ul>
        <li>{{__('village.count_cow_note')}}</li>
        <li>{{__('village.count_pig_note')}}</li>
        <li>{{__('village.count_chicken_note')}}</li>
        <li>{{__('village.count_duck_note')}}</li>
        <li>{{__('village.count_goat_note')}}</li>
        <li>{{__('village.count_crocodie_note')}}</li>
    </ul>
</span>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <tr>
        <th class="col-num"></th>
        <th>{{__('general.fishery')}}</th>
        <th class="col-4">{{__('village.num_of_family_foster')}}</th>
        <th class="col-4">{{__('village.total_benefit')}}</th>
    </tr>
    <!-- ko foreach: new Array(141, 142, 143) -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.livestock(), $data) -->
            <td data-bind="text: no()" class="col-num"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.has')}}</span>
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.livestock(), $data+".a") -->
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.has')}}</span>
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
    <!-- /ko -->

</table>