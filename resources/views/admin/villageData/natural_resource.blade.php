<h4 class="text-primary fw-bold">{{__('village.natural_resource')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
        <tr class="text-center align-middle">
            <th class="col-num"></th>
            <th class="col-6">{{__('general.description')}}</th>
            <th class="col-3">{{__('general.num_family')}}</th>
            <th class="col-3">{{__('general.num_person')}}</th>
        </tr>
    </thead>
    <tbody>
        <!-- ko foreach: new Array("191", "192", "193", "194", "195") -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.natural_resource(), $data) -->
                    <td data-bind="text: no()" class="col-num"></td>
                    <td class="col-6" data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.natural_resource(), $data+".a") -->
                    <td>
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
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: new Array("196", "197") -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.natural_resource(), $data) -->
                    <td data-bind="text: no()" class="col-num"></td>
                    <td class="col-6" data-bind="text: question()"></td>
                    <td class="col-6">
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
<span class="fs-6">{{__('village.natural_resource_note')}}</span>
<br/>