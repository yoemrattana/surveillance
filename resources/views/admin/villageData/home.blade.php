<h4 class="text-primary fw-bold">{{__('village.housing')}}</h4>
<h6>{{__('village.housing_note')}}</h6>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th rowspan="2" class="col-num"></th>
        <th rowspan="2">{{__('village.housing_type')}}</th>
        <th rowspan="2">{{__('village.num_of_family')}}</th>
        <th rowspan="2">{{__('village.num_of_house')}}</th>
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

    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 19))">
    <tr>
        <!-- ko if: $index() == 1-->
        <td rowspan="2" class="text-center align-middle" data-bind="text: sort"></td>
        <!-- /ko -->
        <!-- ko if: !sort.in(145, '149.1')-->
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <!-- /ko -->
        <!-- ko if: sort.in('149.1')-->
        <td class="text-center align-middle"></td>
        <!-- /ko -->
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'home').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'electricity').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'battery').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'solar').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'biogas').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'tv').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>

    </tr>
    </tbody>
</table>
<br>
<p>{{__('village.num_housing_note')}}</p>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('village.thatched_roof_house')}}</th>
        <th>{{__('village.zinc_house')}}</th>
        <th>{{__('village.cement_well_house')}}</th>
        <th>{{__('village.flat_house')}}</th>
        <th>{{__('village.villa_house')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 20))">
    <tr>
        <td data-bind="text:sort"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'zinc').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'fibro').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'tile').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'flat').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'villa').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
