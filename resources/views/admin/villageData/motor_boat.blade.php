<h4 class="fw-bold text-primary">{{__('village.motor_boat')}}</h4>

<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-3">{{__('general.num_family')}}</th>
        <th class="col-3">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody>
        <!-- ko foreach: new Array(127, 128, 129, 130)-->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.truck_transportation(), $data) -->
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
                <!-- ko with: $parent.getQuestionByNo($parent.truck_transportation(), $data+".a") -->
                    <td>
                        <div class="input-group">
                            <span class="input-group-text">{{__('general.has')}}</span>
                            <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
        <!-- /ko -->
        <tr>
            <td colspan="2">{{__('general.total')}}</td>
            <td></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('general.has')}}</span>
                    <input data-bind="value: sum_motor_boat()" type="number" class="form-control" disabled />
                    <span class="input-group-text">{{__('general.unit')}}</span>
                </div>
            </td>
        </tr>
    </tbody>

</table>
<br>
<span class="fs-6">{{__('village.transportation_note')}}</span>
<br/>
