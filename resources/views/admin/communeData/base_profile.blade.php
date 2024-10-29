<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: new Array(1, 2) -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.commune_base_profile(), $data) -->
                    <td data-bind="text: no()"></td>
                    <td data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-text">{{__('general.total')}}</span>
                            <input type="number" class="form-control" data-bind="value: value" required />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.commune_base_profile(), $data+".f") --> 
                    <td>
                        <div class="input-group">
                            <span class="input-group-text">{{__('general.female')}}</span>
                            <input type="number" class="form-control" data-bind="value: value" required />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
        <!-- /ko -->
    </tbody>
</table>
<br/>
<table class="table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: commune_base_profile().slice(4, 16)">
        <tr>
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.total')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" />
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<br/>
<!-- Salt Production -->
<table class="table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: commune_base_profile().slice(16, 19)">
        <!-- ko if: $index() == 0 -->
            <tr class="table-primary">
                <th data-bind="text: group()" colspan="3"></th>
            </tr>
        <!-- /ko -->
        <tr>
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.total')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" />
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td>
        </tr>
    </tbody>
</table>