<h4 class="text-primary fw-bold">{{__('village.disable_people')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
        <tr class="text-center align-middle">
            <th class="col-num"></th>
            <th class="col-6">{{__('general.description')}}</th>
            <th class="col-3">{{__('general.total')}}</th>
            <th class="col-3">{{__('general.female')}}</th>
        </tr>
    </thead>
    <tbody>
        <!-- ko foreach: new Array("186", "186.1", "186.2", "186.3", "186.4") -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.disability(), $data) -->
                    <!-- ko if: no() == '186' -->
                        <td data-bind="text: no()" class="col-num"></td>
                        <td data-bind="text: question()"></td>
                    <!-- /ko -->
                    <!-- ko if: no() == '186.1' -->
                        <td rowspan="4" class="col-num">{{__('village.in_that')}}</td>
                        <td data-bind="text: no()+' '+question()"></td>
                    <!-- /ko -->
                    <!-- ko ifnot: no() == '186' || no() == '186.1' -->
                        <td data-bind="text: no()+' '+question()"></td>
                    <!-- /ko -->
                    <td>
                        <div class="input-group">
                            <span class="input-group-text">{{__('general.total')}}</span>
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.disability(), $data+".f") -->
                    <td>
                        <div class="input-group">
                            <span class="input-group-text">{{__('general.female')}}</span>
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
        <tr>
            <!-- ko with: getQuestionByNo(disability(), '187') -->
                <td data-bind="text: no()" class="col-num"></td>
                <td class="col-6" data-bind="text: question()"></td>
                <td class="col-3">
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.total')}}</span>
                        <input data-bind="value: value" type="number" class="form-control" >
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
            <!-- ko with: getQuestionByNo(disability(), "187.f") -->
                <td class="col-3">
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.female')}}</span>
                        <input data-bind="value: value" type="number" class="form-control" >
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
        </tr>
    </tbody>
</table>
<br/>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
        <tr class="text-center align-middle">
            <th class="col-num"></th>
            <th class="col-6">{{__('general.description')}}</th>
            <th class="col-3">{{__('general.total')}}</th>
            <th class="col-3">{{__('general.female')}}</th>
        </tr>
    </thead>
    <tbody>
        <!-- ko foreach: new Array("188", "189", "190") -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.disability(), $data) -->
                    <td data-bind="text: no()" class="col-num"></td>
                    <td class="col-6" data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.disability(), $data+".f") -->
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