<h4 class="text-primary fw-bold">{{__('village.minority')}}</h4>
<h6>{{__('village.minority_note')}}</h6>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th rowspan="2" colspan="2">{{__('village.ethnic')}}</th>
        <th rowspan="2">{{__('general.num_family')}}</th>
        <th class="col-2" colspan="2">{{__('general.num_people')}}</th>
        <th colspan="2">{{__('village.6_11_year')}}</th>
    </tr>
    <tr class="text-center align-middle">
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 42))">
    <tr>
        <!-- ko ifnot: sort == 228-->
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <!-- /ko -->
        <!-- ko if: sort == 228-->
        <td class="text-center align-middle"></td>
        <!-- /ko -->
        <td data-bind="text: label"></td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
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
                <input data-bind="value: $root.getField2($index() ,fields, 'total6-11').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total6-11Female').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>

    </tr>
    </tbody>
</table>
