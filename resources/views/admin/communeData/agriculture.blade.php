<h4 class="fw-bold text-primary">{{__('commune.agriculture')}}</h4>
<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: commune_agriculture().slice(0, 5) -->
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
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            </tr>
        <!-- /ko -->

        <!-- ko foreach: commune_agriculture().slice(5, 10) -->
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
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            </tr>
        <!-- /ko -->

    </tbody>
</table>

<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <tr class="table-primary">
            <th colspan="2">{{__('commune.intensive_rice_crop')}}</th>
            <th>{{__('commune.first')}}</th>
            <th>{{__('commune.second')}}</th>
        </tr>
        <!-- ko foreach: new Array(24,25,26) -->
            <tr>
                <td data-bind="text: $data"></td>
                <!-- ko with: $parent.getQuestionByNo($parent.commune_agriculture(), $data) -->
                    <td data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-text">{{__('general.total')}}</span>
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->                
                <!-- ko with: $parent.getQuestionByNo($parent.commune_agriculture(), $data+'.a') -->
                    <td>
                        <div class="input-group">
                            <span class="input-group-text">{{__('general.total')}}</span>
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
        <!-- /ko -->
    </tbody>
</table>
<br>
<span class="fs-6">{{__('commune.intensive_rice_crop_note')}}</span>
<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: commune_agriculture().slice(16, 19) -->
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
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            </tr>
        <!-- /ko -->

    </tbody>
</table>