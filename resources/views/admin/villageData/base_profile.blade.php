
<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: new Array(1,2) -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_base_profile(), $data) -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('village.has')}}</span>
                    <input  type="number" min="0" class="form-control" data-bind="value: value">
                    <span class="input-group-text">{{__('village.family')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- /ko -->
    </tbody>
</table>
        
