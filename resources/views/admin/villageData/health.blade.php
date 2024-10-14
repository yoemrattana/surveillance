<h4 class="text-primary fw-bold">{{__('village.health')}}</h4>
<h6>{{__('village.health_note_1')}}</h6>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $data.filter( r => r.section() == 21)">
    <tr>
        <td data-bind="text: sort" class="col-num"></td>
        <td data-bind="text: name_attribute"></td>

        <td>
            <!-- ko if: sort() == 151 -->
            <input data-bind="value: value" type="number" class="form-control" placeholder="......">
            <!-- /ko-->
            <!-- ko if: sort() == 152 -->
           <div class="input-group">
               <span class="input-group-text">{{__('general.has')}}</span>
               <input data-bind="value: value" type="number" class="form-control" placeholder="......">
               <span class="input-group-text">{{__('general.km')}}</span>
           </div>
            <!-- /ko -->
            <!-- ko if: sort() == 153 -->
            <div class="input-group">
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
            <!-- /ko -->
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>{{__('village.health_note_2')}}</p>
<br>

<h4 class="text-primary fw-bold">{{__('village.health_note_3')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.description')}}</th>
        <th class="col-2">{{__('village.num_deliveried_mother')}}</th>
        <th class="col-2">{{__('village.num_new_born')}}</th>
        <th class="col-2">{{__('village.num_mother_die_after_deliveried')}}</th>
        <th class="col-2">{{__('village.infant_die')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 22))">
    <tr>
        <td class="text-center align-middle">
            <!-- ko if: sort!=155.1 -->
            <span data-bind="text: sort"></span>
            <!-- /ko -->
        </td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'woman').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'baby').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'deadwoman').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'deadbaby').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<h4 class="text-primary fw-bold">{{__('village.health_note_4')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $data.filter(r=>r.section() == 23)">
    <tr>
        <td class="col-num">
            <!-- ko if: sort() != '157.1' -->
            <span data-bind="text: sort"></span>
            <!-- /ko -->
        </td>
        <td data-bind="text: name_attribute"></td>
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
<h4 class="text-primary fw-bold">{{__('village.water_status')}}</h4>
<h5> {{__('village.water_sanitation_note')}}</h5>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 24))">
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:label"></td>
        <td class="col-2">
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td class="col-2" data-bind="css : {cellx: !$root.getField2($index() ,fields, 'well')}">
            <!-- ko if: $root.getField2($index() ,fields, 'well')-->
            <div class="input-group">
                <!-- ko if: sort != 162 -->
                <span class="input-group-text">{{__('village.well')}}</span>
                <!-- /ko -->
                <!-- ko if: sort == 162 -->
                <span class="input-group-text">{{__('village.pond')}}</span>
                <!-- /ko -->
                <input data-bind="value: $root.getField2($index() ,fields, 'well').value" type="number" class="form-control" placeholder="......">
            </div>
            <!-- /ko -->
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>{{__('village.health_note_5')}}</p>
<br>
<h4 class="text-primary fw-bold">{{__('village.drinking_water')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $data.filter(r=>r.section() == 25)">
    <tr>
        <td class="col-num" >
            <!-- ko if: sort() != '167.1' -->
            <span data-bind="text: sort"></span>
            <!-- /ko -->
        </td>
        <td data-bind="text: name_attribute"></td>
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
<p><b>{!!__('village.health_note_6') !!}</b></p>
<h4 class="text-primary fw-bold">{{__('village.distance_to_water_source')}}</h4>
<br>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $data.filter(r=>r.section() == 26)">
    <tr>
        <td class="col-num">
            <span data-bind="text: sort"></span>
        </td>
        <td data-bind="text: name_attribute"></td>
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
<h4 class="text-primary fw-bold">{{__('village.water_source_note')}}</h4>
<table class="tbl-data table table-borderedb order border-1 mt-3">
    <tbody data-bind="foreach: $data.filter(r=>r.section() == 27)">
    <tr>
        <td class="col-num">
            <!-- ko if: sort() == 170 -->
            <span data-bind="text: sort"></span>
            <!-- /ko -->
        </td>
        <td data-bind="text: name_attribute"></td>
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
