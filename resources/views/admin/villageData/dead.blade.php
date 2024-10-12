<h4 class="text-primary fw-bold">{{__('village.dead')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th rowspan="2" class="col-num"></th>
        <th rowspan="2">{{__('village.dead_num')}}</th>
        <th class="col-2" colspan="3">{{__('village.under_18')}}</th>
        <th colspan="2">{{__('village.over_18')}}</th>
    </tr>
    <tr class="text-center align-middle">
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
        <th class="col-2">{{__('village.under_5_case')}}</th>
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 41))">
    <tr>
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'female').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, '5').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total18').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, '18Female').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>

    </tr>
    </tbody>
</table>
