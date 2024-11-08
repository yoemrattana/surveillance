<h4 class="fw-bold text-primary">{{__('district.7_health_work')}}</h4>
<table class="table table-bordered border border-1">
    <tbody>
        <!-- ko foreach: new Array(38, 39, 40, 41, 42) -->
        <tr>
            <!-- ko if: ($data === 38 || $data === 40 || $data === 42) -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_health_work(), $data) -->
                <td data-bind="text: no()"></td>
                <td data-bind="text: question()"></td>
                
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text">{{__('district.place')}}</span>
                    </div>
                </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_health_work(), $data+".a") -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.amount')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text">{{__('district.bed')}}</span>
                    </div>
                </td>
                <!-- /ko -->
            <!-- /ko -->

            <!-- ko if: ($data === 39 || $data === 41) -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_health_work(), $data) -->
                <td data-bind="text: no()"></td>
                <td data-bind="text: question()"></td> 
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.total')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text">{{__('district.people')}}</span>
                    </div>
                </td>
                <!-- /ko -->

                <!-- ko with: $parent.getQuestionByNo($parent.district_health_work(), $data+".a") -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.female')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text">{{__('district.people')}}</span>
                    </div>
                </td>
                <!-- /ko -->
            <!-- /ko -->
        </tr>
        <!-- /ko -->
    </tbody>
</table>
