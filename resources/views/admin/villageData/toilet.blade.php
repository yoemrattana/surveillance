<span class="fs-6">{{__('village.water_source_note')}}</span>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: new Array("170", "170.1", "170.2") -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.toilet(), $data) -->
                    <!-- ko if: no() == '170' -->
                        <td data-bind="text: no()" class="col-num"></td>
                    <!-- /ko -->
                    <!-- ko if: no() == '170.1' -->
                        <td rowspan="2" class="col-num">{{__('village.in_that')}}</td>
                    <!-- /ko -->
                    <td data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
        <!-- /ko -->        
    </tbody>

</table>