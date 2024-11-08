<h4 class="text-primary fw-bold">{{__('village.health')}}</h4>
<span class="fs-6">{{__('village.health_note_1')}}</span>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: health().slice(0,3)">
    <tr>
        <td data-bind="text: no()"></td>
        <td data-bind="text: question()"></td>
        <td>
            <div class="input-group">
                <!-- Nam_Health-Frequ question with string value -->
                <!-- ko if: $index() == 0 -->
                    <input data-bind="value: value_txt" type="text" class="form-control" >
                <!-- /ko -->
                <!-- ko if: $index() > 0 -->
                    <input data-bind="value: value" type="number" class="form-control" >
                    <span class="input-group-text" data-bind="text: unit()"></span>
                <!-- /ko -->
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>{{__('village.health_note_2')}}</p>
<br>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead>
        <tr>
        <th class="col-num"></th>
                <th>{{__('general.description')}}</th>
                <th class="col-2">{{__('village.num_deliveried_mother')}}</th>
                <th class="col-2">{{__('village.num_new_born')}}</th>
                <th class="col-2">{{__('village.num_mother_die_after_deliveried')}}</th>
                <th class="col-2">{{__('village.infant_die')}}</th>
        </tr>
    </thead>
    <tbody>
        <!-- ko foreach: new Array(154, 155) -->
            <tr class="text-center">
                <!-- ko with: $parent.getQuestionByNo($parent.health(), $data) -->
                    <td data-bind="text: no()" class="col-num"></td>
                    <td data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            
                        </div>
                        <span class="fs-6" data-bind="text: unit()"></span>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.health(), $data+".b") -->
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control">
                        </div>
                        <span class="fs-6" data-bind="text: unit()"></span>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.health(), $data+".c") -->
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control">
                        </div>
                        <span class="fs-6" data-bind="text: unit()"></span>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.health(), $data+".a") -->
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control">
                        </div>
                        <span class="fs-6" data-bind="text: unit()"></span>
                    </td>
                <!-- /ko -->
            </tr>
         <!-- /ko -->
    </tbody>
</table>
<br>
<span class="fs-6">{{__('village.health_note_4')}}</span>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: new Array(156, 157) -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.health(), $data) -->
                    <td data-bind="text: no()" class="col-num"></td>
                    <td data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <input data-bind="value: value" type="number" class="form-control" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
         <!-- /ko -->
         <tr>
            <!-- ko with: getQuestionByNo(health(), '157.1') -->
                <td></td>
                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <input data-bind="value: value" type="number" class="form-control" > 
                        <span class="input-group-text" data-bind="text: unit()"></span>                       
                    </div>
                    
                </td>
            <!-- /ko -->
         </tr>
    </tbody>
</table>