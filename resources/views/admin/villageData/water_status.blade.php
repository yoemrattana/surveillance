<h4 class="text-primary fw-bold">{{__('village.water_status')}}</h4>
<span class="fs-6">{{__('village.water_sanitation_note')}}</span>

<table class="tbl-data table table-bordered border border-1 mt-3">

    <tbody>
        <!-- ko foreach: new Array(158, 159, 160, 161, 162, 163, 164) -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.water_resource(), $data) -->
                    <td data-bind="text: no()" class="col-num"></td>
                    <td class="col-4" data-bind="text: question()"></td>
                    <td class="col-3">
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.water_resource(), $data+".a") -->
                    <td class="col-3">
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
         <!-- /ko -->
    </tbody>
</table>

<br>
<span class="fs-6">{{__('village.health_note_5')}}</span>
<br/>
<br/>
<h4 class="text-primary fw-bold">{{__('village.drinking_water')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">

    <tbody>
        <!-- ko foreach: new Array(165, 166, 167) -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.water_resource(), $data) -->
                    <td data-bind="text: no()" class="col-num"></td>
                    <td data-bind="text: question()"></td>
                    <td >
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
         <!-- /ko -->
    </tbody>
</table>
<br>
<span class="fs-6">{{__('village.health_note_6')}}</span>
<br>
<br>
<h4 class="text-primary fw-bold">{{__('village.distance_to_water_source')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">

    <tbody>
        <!-- ko foreach: new Array(168, 169) -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.water_resource(), $data) -->
                    <td data-bind="text: no()" class="col-num"></td>
                    <td data-bind="text: question()"></td>
                    <td >
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
         <!-- /ko -->
    </tbody>
</table>