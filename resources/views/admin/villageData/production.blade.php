<h4 class="text-primary fw-bold">{{__('village.category_production')}}</h4>
<h6>{{__('village.num_of_production_craft')}}</h6>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th rowspan="2"></th>
        <th rowspan="2">{{__('village.description')}}</th>
        <th class="col-2" rowspan="2">{{__('village.num_of_location')}}</th>
        <th colspan="2">{!!__('village.num_of_craft_owner_worker') !!}</th>
    </tr>
    <tr class="text-center align-middle">
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 7))">
    <tr>
        <!-- ko if: (sort == 55 && $index() == 0) -->
            <td rowspan="3" class="text-center align-middle" data-bind="text: sort"></td>
        <!-- /ko -->
        <!-- ko ifnot: sort == 55 -->
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <!-- /ko -->
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

<br>

<h4 class="text-primary fw-bold">{{__('village.service_business_located')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $data.filter(x => x.section()=='7-2')">
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.location')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
