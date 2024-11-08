<h4 class="w-bold">{{__('village.security_note_4')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody>
    <!-- ko foreach: violence().slice(0,2) -->
        <tr>
            <td data-bind="text: no()"></td>
            <td class="col-6" data-bind="text: question()"></td>
            <td colspan="2" class="col-6">
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" >
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td>
        </tr>
    <!-- /ko -->
    <!-- ko foreach: new Array("204", "204.1") -->
        <tr>

            <!-- ko with: $parent.getQuestionByNo($parent.violence(), $data) -->
                <!-- ko if: no() == "204" -->
                    <td rowspan="2" data-bind="text: no()"></td>
                    <td rowspan="2" data-bind="text: question()"></td>
                <!-- /ko -->
                <td class="col-3">
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.total')}}</span>
                        <input data-bind="value: value" type="number" class="form-control" >
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.violence(), $data+".f") -->
                <td class="col-3">
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.female')}}</span>
                        <input data-bind="value: value" type="number" class="form-control" >
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
        </tr>
    <!-- /ko -->
    <tr>
        <!-- ko with: getQuestionByNo(violence(), "205") -->
            <td data-bind="text: no()"></td>
            <td class="col-6" data-bind="text: question()"></td>
            <td colspan="2" class="col-6">
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" >
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td>
        <!-- /ko -->
    </tr>
    </tbody>
</table>
<br>

