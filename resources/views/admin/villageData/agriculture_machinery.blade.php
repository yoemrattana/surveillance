<h4 class="fw-bold text-primary">{{__('village.machinery')}}</h4>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-3">{{__('general.num_family')}}</th>
        <th class="col-3">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: new Array(105, 106, 107, 108, 109, 110, 111, 112, 113, 114)">
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.agriculture_machinery(), $data) -->
                <td class="text-center align-middle" data-bind="text: no()"></td>
                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.has')}}</span>
                        <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.agriculture_machinery(), $data+".a") -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.has')}}</span>
                        <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
        </tr>

    </tbody>

</table>
<br>
<span class="fs-6">{{__('village.machinery_note')}}</span>
