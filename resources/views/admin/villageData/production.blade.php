<h4 class="text-primary fw-bold">{{__('village.category_production')}}</h4>
<h6>{{__('village.num_of_production_craft')}}</h6>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <thead class="table-primary">
        <tr class="text-center align-middle">
            <th rowspan="2"></th>
            <th rowspan="2">{{__('village.description')}}</th>
            <th class="col-2" rowspan="2">{{__('village.num_of_location')}}</th>
            <th colspan="2">{!!__('village.num_of_craft_owner_worker') !!}</th>
        </tr>
        <tr class="text-center align-middle">
            <th class="col-2">{{__('general.total')}}</th>
            <th class="col-2">{{__('general.female')}}</th>
        </tr>
    </thead>
    <tbody>
        <!-- ko foreach: new Array(55,"55.1","55.2",56,57,58,59,60,61,62,63,64,65,66,67,68) -->

        <!-- If $data is "55", render the row with rowspan -->
        <!-- ko if: $data == "55" -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_production(), $data) -->
            <td rowspan="3" class="text-center align-middle" data-bind="text: no()"></td>
            
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" placeholder="......">
                    <span class="input-group-text">{{__('general.location')}}</span>
                </div>
            </td>
            <!-- /ko -->

            <!-- ko with: $parent.getQuestionByNo($parent.village_production(), $data+".a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->

            <!-- ko with: $parent.getQuestionByNo($parent.village_production(), $data+".b") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->

        </tr>
        <!-- /ko -->

        <!-- Additional rows for 55.1 and 55.2 without rowspan -->
        <!-- ko if: $data == "55.1" || $data == "55.2" -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_production(), $data) -->
            <td data-bind="text: question()"></td>
        
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" placeholder="......">
                    <span class="input-group-text">{{__('general.location')}}</span>
                </div>
            </td>
            <!-- /ko -->

            <!-- ko with: $parent.getQuestionByNo($parent.village_production(), $data+".a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->

            <!-- ko with: $parent.getQuestionByNo($parent.village_production(), $data+".b") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->

        </tr>
        <!-- /ko -->

        <!-- Additional rows for other values like 56, 57, etc. -->
        <!-- ko if: $data != "55" && $data != "55.1" && $data != "55.2" -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.village_production(), $data) -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" placeholder="......">
                    <span class="input-group-text">{{__('general.location')}}</span>
                </div>
            </td>
            <!-- /ko -->

            <!-- ko with: $parent.getQuestionByNo($parent.village_production(), $data+".a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->

            <!-- ko with: $parent.getQuestionByNo($parent.village_production(), $data+".b") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" placeholder="......">
                    <span class="input-group-text">{{__('general.person')}}</span>
                </div>
            </td>
            <!-- /ko -->

        </tr>
        <!-- /ko -->

        <!-- /ko -->
    </tbody>
</table>

<br />

<h4 class="text-primary fw-bold">{{__('village.service_business_located')}}</h4>
<table class="tbl-data table table-bordered border border-1 mt-3">
    <tbody >
    <!-- ko foreach: new Array(69,70,71,72) -->
    <tr>
        <!-- ko with: $parent.getQuestionByNo($parent.village_production(), $data) -->
        <td data-bind="text: no()"></td>
        <td data-bind="text: question()"></td>
        
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input type="number" class="form-control"  data-bind="value: value" placeholder="......">
                <span class="input-group-text">{{__('general.location')}}</span>
            </div>
        </td>
        <!-- /ko -->
    </tr>
    <!-- /ko -->
    </tbody>
</table>

