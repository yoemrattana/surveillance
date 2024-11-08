<h4 class="text-primary fw-bold">{{__('village.security')}}</h4>
<span class="fs-6">{{__('village.security_note_1')}}</span>
<br/>
<br/>
<h4 class="fw-bold">{{__('village.security_note_2')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: security().slice(0,3)">
    <tr>
        <td data-bind="text: no()"></td>
        <td data-bind="text: question()"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: value" type="number" class="form-control" >
                <span class="input-group-text" data-bind="text: unit()"></span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<h4 class="fw-bold">{{__('village.security_note_3')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: security().slice(3,7)">
    <tr>
        <!-- ko if: $index() == 0 -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
        <!-- /ko -->
        <!-- ko if: $index() == 1 -->
            <td rowspan="2">{{__('village.in_that')}}</td>
        <!-- /ko -->
        <!-- ko ifnot: $index() == 0 -->
            <td data-bind="text: no()+' '+question()"></td>
        <!-- /ko -->
        <td>
            <div class="input-group">
                <input data-bind="value: value" type="number" class="form-control" >
                <span class="input-group-text" data-bind="text: unit()"></span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
