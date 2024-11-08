<h4 class="fw-bold text-primary">{{__('village.average_distance_from_village_commune')}}</h4>

<table class="tbl-data table table-bordered border border-1 mt-3" data-bind="foreach: distance_village_province()">
    <tr>
        <td data-bind="text: no()" class="col-num"></td>
        <td data-bind="text: question()"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text" data-bind="text: unit()"></span>
            </div>
        </td>
    </tr>
</table>