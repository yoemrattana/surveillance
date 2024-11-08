<h4 class="fw-bold text-primary">{{__('village.category_school_location')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody>
    <!-- ko foreach: new Array(29, 30, 31) -->
    <tr>
        <!-- ko with: $parent.getQuestionByNo($parent.village_school_location(), $data) -->
        <td data-bind="text: no()"></td>
        <td data-bind="text: question()"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('village.distance')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('village.km')}}</span>
            </div>
        </td>
        <!-- /ko -->
    </tr>
    <!-- /ko -->
    </tbody>
</table>
<br>
<p>{{__('village.school_note')}}</p>
