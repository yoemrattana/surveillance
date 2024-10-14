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
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 9))">
    <tr>
        <td data-bind="text: sort" class="text-center align-middle"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'location').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.location')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'female').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
