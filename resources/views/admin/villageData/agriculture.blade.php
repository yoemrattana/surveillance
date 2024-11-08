<h4 class="text-primary fw-bold">{{__('village.status_agricultural_resource')}}</h4>
<h6>{{__('village.status_agricultural_note')}}</h6>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: new Array(90, 91, 92, 93, 94, 95 ,96, 97, 98, 99, 100, 101, 102, 103, 104) -->
        <!-- ko if: $data == 90 || $data == 91 || $data == 92 || $data == 93 || $data == 94 -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_agriculture(), $data) -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.has')}}</span>
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.Family')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- /ko -->

        <!-- ko if: $data == 95  -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_agriculture(), "95") -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.has')}}</span>
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.well')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- /ko -->

        <!-- ko if: $data == 96 || $data == 97  -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_agriculture(), $data) -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.ton')}}</span>
                </div>
           </td>
            <!-- /ko -->
        </tr>
        <!-- /ko -->

        <!-- ko if: $data == 98  -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_agriculture(), "98") -->
            <td rowspan="2" data-bind="text: no()"></td>
            <td rowspan="2" data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('village.max_rice_price')}}</span>
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.riel')}}</span>
                </div>
           </td>
            <!-- /ko -->
        </tr>

        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_agriculture(), "98.1") -->
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('village.min_rice_price')}}</span>
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <tr>
            <td class="no-border" colspan="3"></td>
        </tr>
        <!-- /ko -->

        <!-- ko if: $data == 99 || $data == 100  -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_agriculture(), $data) -->
            <td class="text-center col-num" data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.has')}}</span>
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.Family')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- /ko -->

        <!-- ko if: $data == 101 -->
        <tr class="no-border">
            <td class="no-border" colspan="3">{{__('village.chemical_use')}}</td>
        </tr>
        <!-- ko with: $parent.getQuestionByNo($parent.village_agriculture(), "101") -->
        <tr>
            <td class="text-center col-num" data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.has')}}</span>
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.Family')}}</span>
                </div>
            </td>
        </tr>
        <!-- /ko -->
        <!-- /ko -->

        <!-- ko if: $data >= 102 && $data <= 104 -->
        <!-- ko with: $parent.getQuestionByNo($parent.village_agriculture(), $data ) -->
        <tr>
            <td class="text-center col-num" data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.has')}}</span>
                    <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                    <span class="input-group-text">{{__('general.Family')}}</span>
                </div>
            </td>
        </tr>
        <!-- /ko -->
        <!-- /ko -->


        <!-- /ko -->
    </tbody>
</table>
<br>
<p>{{__('village.agriculture_note')}}</p>
