<table class="table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: commune_base_profile().slice(0, 2)">
        <tr>
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">សរុប</span>
                    <input type="number" class="form-control" data-bind="value: total" required />
                    <span class="input-group-text">នាក់</span>
                </div>
            </td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">ស្រី</span>
                    <input type="number" class="form-control" data-bind="value: female" required />
                    <span class="input-group-text">នាក់</span>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<br/>
<table class="table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: commune_base_profile().slice(2, 14)">
        <tr>
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">សរុប</span>
                    <input type="number" class="form-control" data-bind="value: total" />
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<br/>
<!-- Salt Production -->
<table class="table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: commune_base_profile().slice(14, 17)">
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
                    <span class="input-group-text">សរុប</span>
                    <input type="number" class="form-control" data-bind="value: total" />
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td>
        </tr>
    </tbody>
</table>