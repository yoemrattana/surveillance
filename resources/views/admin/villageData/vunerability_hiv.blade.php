<h4 class="text-primary fw-bold">{{__('village.hiv')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: new Array(178, 179)-->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.vunerability(), $data) -->
                    <td class="text-center align-middle col-num" data-bind="text: no()"></td>
                    <td class="col-6" data-bind="text: question()"></td>
                    <td class="col-6">
                        <div class="input-group">
                            <span class="input-group-text">{{__('general.has')}}</span>
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
        <!-- /ko -->
    </tbody>
</table>
<br/>
</br/>
<h4 class="text-primary fw-bold">{{__('village.orphan')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: new Array(180, 181, 182, 183)-->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.vunerability(), $data) -->
                    <td class="text-center align-middle col-num" data-bind="text: no()"></td>
                    <td class="col-6" data-bind="text: question()"></td>
                    <td class="col-6">
                        <div class="input-group">
                            <span class="input-group-text">{{__('general.has')}}</span>
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
        <!-- /ko -->
    </tbody>
</table>
<br/>
</br/>
<h4 class="text-primary fw-bold">{{__('village.trafficking')}}</h4>
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
    <tbody>
        <!-- ko foreach: new Array(184, 185)-->
            <!-- female -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.vunerability(), $data) -->
                    <td rowspan="2" class="text-center align-middle col-num" data-bind="text: no()"></td>
                    <td rowspan="2" data-bind="text: question()"></td>
                    <td>{{__('general.female')}}</td>
                    <td>
                        <div class="input-group">
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
                <td></td>
            </tr>
            <!-- male -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.vunerability(), $data+".1") -->
                    <td>{{__('general.male')}}</td>
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.vunerability(), $data+".1.a") -->
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <td></td>
            </tr>
        <!-- /ko -->
    </tbody>
</table>
<br/>