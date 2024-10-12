<h4 class="text-primary fw-bold">{{__('village.status_agricultural_resource')}}</h4>
<h6>{{__('village.status_agricultural_note')}}</h6>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody data-bind="foreach: $data.filter(x => x.section()=='10')">
    <!-- ko if: sort() >=90 && sort() <=95-->
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <!-- ko if: sort().in(90,91,92,93,94) -->
                <span class="input-group-text">{{__('general.Family')}}</span>
                <!-- /ko -->
                <!-- ko if: sort() == 95 -->
                <span class="input-group-text">{{__('general.well')}}</span>
                <!-- /ko -->
            </div>
        </td>
    </tr>
    <!-- /ko -->
    <!-- ko if: sort().in(96,97)-->
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.ton')}}</span>
            </div>
        </td>
    </tr>
    <!-- /ko -->

    <!-- ko if: sort() == 98 && code_attribute() == 'max' -->
    <tr>
        <td rowspan="2" class="text-center col-num" data-bind="text: sort"></td>
        <td rowspan="2">{{__('village.farm_rice_price')}}</td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('village.max_rice_price')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.riel')}}</span>
            </div>
        </td>
    </tr>
    <!-- /ko -->
    <!-- ko if: sort() == 98 && code_attribute() == 'min'-->
    <tr>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('village.min_rice_price')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.rield')}}</span>
            </div>
        </td>
    </tr>
    <tr>
        <td class="no-border" colspan="3"></td>
    </tr>
    <!-- /ko -->

    <!-- ko if: sort().in(99,100) -->
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
    </tr>

    <!-- /ko -->

    <!-- ko if: sort().in(101) -->
    <tr class="no-border">
        <td class="no-border" colspan="3">{{__('village.chemical_use')}}</td>
    </tr>
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
    </tr>
    <!-- /ko -->
    <!-- ko if: sort().in(102,103,104) -->
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
    </tr>
    <!-- /ko -->
    </tbody>
</table>
<br>
<p>{{__('village.agriculture_note')}}
</p>
