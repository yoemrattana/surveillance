<h4 class="fw-bold text-primary">{{__('district.3_support_work')}}</h4>
<table class="table table-bordered border border-1">
    <tbody>
        <!-- ko foreach: new Array(22,23) -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_support_work(), $data) -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.card')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- /ko -->
    </tbody>
</table>