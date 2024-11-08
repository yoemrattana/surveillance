<h4 class="text-primary fw-bold">{{__('village.dead')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th rowspan="2" class="col-num"></th>
        <th rowspan="2" class="col-2">{{__('village.dead_num')}}</th>
        <th class="col-5" colspan="3">{{__('village.under_18')}}</th>
        <th class="col-5" colspan="2">{{__('village.over_18')}}</th>
    </tr>
    <tr class="text-center align-middle">
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
        <th class="col-2">{{__('village.under_5')}}</th>
        <th class="col-2">{{__('general.total')}}</th>
        <th class="col-2">{{__('general.female')}}</th>
    </tr>
    </thead>
    <tbody>        
        <tr>
            <!-- ko with: getQuestionByNo(dead(), "206") -->
                <td data-bind="text: no()"></td>
                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <input data-bind="value: value" type="number" class="form-control" >
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
            <!-- ko foreach: new Array("a", "b", "c", "d") -->
                <!-- ko with: $parent.getQuestionByNo($parent.dead(), "206."+$data) -->
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            <!-- /ko -->
        </tr>        
        <tr>
            <td colspan="7">{{__('village.in_that')}}</td>
        </tr>
        <!-- ko foreach: new Array("206.1", "206.2", "206.3", "206.4", "206.5", "206.6", "206.7", "206.8", "206.9", "206.10", "206.11") -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.dead(), $data) -->
                    <td data-bind="text: no()"></td>
                    <td data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.dead(), $data+".a") -->
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.dead(), $data+".b") -->
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.dead(), $data+".c") -->
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.dead(), $data+".d") -->
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
