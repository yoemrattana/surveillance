<h6>{{__('village.machinery')}}</h6>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 11))">

    <tr>
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit')}}</span>
            </div>
        </td>
    </tr>

    </tbody>

</table>
<br>
<p>{{__('village.machinery_note')}}</p>
<br>
<h5>{{__('village.car_transport')}}</h5>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 12))">

    <tr>
        <td class="text-center align-middle" data-bind="visible: sort!=120.1 ,text: sort"></td>
        <td class="text-center align-middle" data-bind="visible: sort==120.1"></td>
        <td data-bind="text: label"></td>
        <td data-bind="css: {cellx: sort == '120.1'}">
            <!-- ko if: sort != 120.1-->
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
            <!-- /ko -->
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<h6>{{__('village.moto_bicycle')}}</h6>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 13))">

    <tr>
        <td class="text-center align-middle" data-bind="visible: sort!=120.1 ,text: sort"></td>
        <td class="text-center align-middle" data-bind="visible: sort==120.1"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<h6>{{__('village.boat')}}</h6>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>

    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 14))">
    <tr>
        <td class="text-center align-middle" data-bind="visible: sort!=126.1 ,text: sort"></td>
        <td class="text-center align-middle" data-bind="visible: sort==126.1"></td>
        <td data-bind="text: label"></td>
        <td data-bind="css: {cellx: sort == '126.1'}">
            <!-- ko if: sort != 126.1-->
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
            <!-- /ko -->
        </td>
        <td>

            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<h6>{{__('village.motor_boat')}}</h6>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 15))">
    <tr>
        <td class="text-center align-middle" data-bind="visible: sort!=130.1 ,text: sort"></td>
        <td class="text-center align-middle" data-bind="visible: sort==130.1"></td>
        <td data-bind="text: label"></td>
        <td data-bind="css: {cellx: sort == '130.1'}">
            <!-- ko if: sort != 130.1-->
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
            <!-- /ko -->
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>{{__('village.transportation_note')}}</p>
<br>
<h6>{{__('village.average_distance_from_village_commune')}}</h6>
<table class="tbl-data table table-bordered border border-1 mt-3" data-bind="foreach: $data.filter( r => r.section() == 16)">
    <tr>
        <td data-bind="text: sort" class="col-num"></td>
        <td data-bind="text: name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.dist')}}</span>
            </div>
        </td>
    </tr>
</table>

<!-- 17 -->
<br>
<h6 class="text-center">{{__('village.livestock_raising')}}</h6>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 17))">
    <tr>
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit_animal')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>{{__('village.livestock_note')}}</p>
<table class="table table-bordered border border-1 mt-3">
    <tr>
        <td>{{__('village.count_cow_note')}}</td>
        <td>{{__('village.count_pig_note')}}</td>
    </tr>
    <tr>
        <td>{{__('village.count_chicken_note')}} </td>
        <td>{{__('village.count_duck_note')}}</td>
    </tr>
    <tr>
        <td>{{__('village.count_goat_note')}}</td>
        <td>{{__('village.count_crocodie_note')}}</td>
    </tr>
</table>

<br>

<!-- 18-->
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.fishery')}}</th>
        <th class="col-2">{{__('village.num_of_family_foster')}}</th>
        <th class="col-2">{{__('village.total_benefit')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 18))">
    <tr>
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.kg')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
