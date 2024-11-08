<h4 class="text-primary fw-bold">{{__('village.vunerability_group')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th rowspan="2" class="col-num"></th>
        <th rowspan="2">{{__('general.description')}}</th>
        <th class="col-3" rowspan="2">{{__('general.num_family')}}</th>
        <th colspan="2">{{__('village.children_under_18')}}</th>
    </tr>
    <tr class="text-center align-middle">
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
    </tr>
    </thead>
    <tbody>
        <!-- ko foreach: new Array(171, 172, 173)-->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.vunerability(), $data) -->
                    <td class="text-center align-middle" data-bind="text: no()"></td>
                    <td data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-text">{{__('general.has')}}</span>
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.vunerability(), $data+".a") -->
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.vunerability(), $data+".b") -->
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

<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: new Array(174, 175, 176, 177)-->
            <tr>
                <!-- ko if: $data == 175 -->
                    <!-- ko with: $parent.getQuestionByNo($parent.vunerability(), $data) -->
                        <td class="col-num text-center align-middle " data-bind="text: no()"></td>
                        <td class="col-6" data-bind="text: question()"></td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">{{__('general.total')}}</span>
                                <input data-bind="value: value" type="number" class="form-control">
                                <span class="input-group-text" data-bind="text: unit()"></span>
                            </div>
                        </td>
                    <!-- /ko -->
                    <!-- ko with: $parent.getQuestionByNo($parent.vunerability(), $data+".a") -->
                        <td>
                            <div class="input-group">
                                <span class="input-group-text">{{__('general.female')}}</span>
                                <input data-bind="value: value" type="number" class="form-control">
                                <span class="input-group-text" data-bind="text: unit()"></span>
                            </div>
                        </td>
                    <!-- /ko -->            
                <!-- /ko -->
                <!-- ko ifnot: $data == 175 -->
                    <!-- ko with: $parent.getQuestionByNo($parent.vunerability(), $data) -->
                        <td class="col-num text-center align-middle" data-bind="text: no()"></td>
                        <td class="col-6" data-bind="text: question()"></td>
                        <td colspan="2" class="col-6">
                            <div class="input-group">
                                <span class="input-group-text">{{__('general.has')}}</span>
                                <input data-bind="value: value" type="number" class="form-control">
                                <span class="input-group-text" data-bind="text: unit()"></span>
                            </div>
                        </td>
                    <!-- /ko -->
                <!-- /ko -->
            </tr>
        <!-- /ko -->
    </tbody>
</table>
<br/>