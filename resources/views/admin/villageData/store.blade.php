<h4 class="text-primary fw-bold">{{__('village.num_store_around_far_market')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th rowspan="2" class="col-num"></th>
        <th rowspan="2">{{__('general.description')}}</th>
        <th class="col-2" rowspan="2">{{__('village.num_of_location')}}</th>
        <th colspan="2">{!!__('village.num_of_craft_owner_worker') !!}</th>
    </tr>
    <tr class="text-center align-middle">
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
    </tr>
    </thead>
    <tbody>
        <!-- ko foreach: new Array(73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89) -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_store(), $data) -->
            <td data-bind="text: no()" class="text-center align-middle"></td>
            <td data-bind="text: question()"></td>
    
            <td>
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.location')}}</span>
                </div>
            </td>
            <!-- /ko -->

            <!-- ko with: $parent.getQuestionByNo($parent.village_store(), $data+".a") -->
            <td>
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->

            <!-- ko with: $parent.getQuestionByNo($parent.village_store(), $data+".b") -->
            <td>
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- /ko -->
    </tbody>
</table>
