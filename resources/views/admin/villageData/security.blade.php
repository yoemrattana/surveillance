<h4 class="text-primary fw-bold">{{__('village.security')}}</h4>
<p>{{__('village.security_note_1')}}</p>
<h6>{{__('village.security_note_2')}}</h6>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $data.filter( r => r.section() == 38)">
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<h5>{{__('village.security_note_3')}}</h5>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $data.filter( r => r.section() == 39)">
    <tr>
        <!-- ko if: sort() == 201 -->
        <td class="text-center col-num" data-bind="text: sort"></td>
        <!-- /ko -->
        <!-- ko if: sort() == '201.1' -->
        <td rowspan="2" class="text-center">{{__('village.in_that')}}</td>
        <!-- /ko -->
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<p>{{__('village.security_note_4')}}</p>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $data.filter( r => r.section() == 40)">
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
