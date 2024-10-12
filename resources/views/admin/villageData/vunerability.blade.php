<h4 class="text-primary fw-bold">{{__('village.vunerability_group')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th rowspan="2" class="col-num"></th>
        <th rowspan="2">{{__('general.description')}}</th>
        <th class="col-2" rowspan="2">{{__('general.num_family')}}</th>
        <th colspan="2">{{__('village.children_under_18')}}</th>
    </tr>
    <tr class="text-center align-middle">
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 28))">
    <tr>
        <td class="text-center align-middle col-num" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'female').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<table class="tbl-data table table-bordered border border-1">
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 29))">
    <tr>
        <td class="text-center align-middle col-num" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>

        <td data-bind="attr: {colspan: sort == 175 ? 1 : 2}" class="col-2">
            <div class="input-group">
                <!-- ko if: sort != 175-->
                <span class="input-group-text">{{__('general.has')}}</span>
                <!-- /ko -->
                <!-- ko if: sort == 175-->
                <span class="input-group-text">{{__('general.total')}}</span>
                <!-- /ko -->
                <input data-bind="value: $root.getField2($index() ,fields, 'total').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>

        <!-- ko if: sort == 175-->
        <td style="width: 300px !important;">
            <div class="input-group ">
                <span class="input-group-text">{{__('general.female')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'female').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <!-- /ko -->
    </tr>
    </tbody>
</table>

<br>
<h5>{{__('village.hiv')}}</h5>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $data.filter(x => x.section()==30)">
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
<h5>{{__('village.orphan')}}</h5>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $data.filter(x => x.section()==31)">
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<h5>{{__('village.trafficking')}}</h5>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle col-num">
        <th rowspan="2"></th>
        <th rowspan="2">{{__('general.description')}}</th>
        <th>{{__('general.gender')}}</th>
        <th class="col-2">{{__('village.under_18')}}</th>
        <th class="col-2">{{__('village.over_18')}}</th>
        <th class="col-2">{{__('general.total')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 32))">
    <tr>
        <!-- ko if: $index() % 2 == 0-->
        <td rowspan="2" class="text-center align-middle col-num" data-bind="text: sort"></td>
        <td rowspan="2" data-bind="text: label"></td>
        <td>{{__('general.female')}}</td>
        <!-- /ko -->
        <!-- ko if: $index() % 2 != 0-->
        <td>{{__('general.male')}}</td>
        <!-- /ko -->
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, '18').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, '18up').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>

<h5>{{__('village.disabled_people')}}</h5>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.description')}}</th>
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 33))">
        <tr>
            <!-- ko if: sort == 186-->
            <td data-bind="text: sort" class="col-1"></td>
            <!-- /ko -->
            <!-- ko if: sort == '186.1'-->
            <td rowspan="4" class="col-1">{{__('village.in_that')}}</td>
            <!-- /ko -->
            <td data-bind="text: label"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.total')}}</span>
                    <input data-bind="value: $root.getField2($index() ,fields, 'total').value" type="number"
                           class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.female')}}</span>
                    <input data-bind="value: $root.getField2($index() ,fields, 'female').value" type="number"
                           class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<br>

<table class="tbl-data table table-bordered border border-1">
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 34))">
    <tr>
        <td data-bind="text: sort" class="col-num"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.total')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'total').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.female')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'female').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.description')}}</th>
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 35))">
    <tr>
        <td data-bind="text: sort" class="col-1"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'female').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
