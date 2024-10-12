<h4 class="text-primary fw-bold">{{__('village.natural_resource')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.description')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th>{{__('general.num_person')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 36))">
    <tr>
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'poeple').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<table class="tbl-data table table-bordered border border-1">
    <tbody data-bind="foreach: $data.filter( r => r.section() == 37)">
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>{{__('village.natural_resource_note')}}</p>
