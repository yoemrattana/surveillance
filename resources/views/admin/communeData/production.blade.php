<span class="fs-6">{{__('commune.production_note')}}</span>
<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <tr class="table-primary">
            <th colspan="2">{{__('commune.type_of_crop')}}</th>
            <th>{{__('commune.es_land_growed')}}</th>
            <th>{{__('commune.avg_production_in_ha')}}</th>
            <th>{{__('commune.es_production')}}</th>
        </tr>
        <!-- ko foreach: new Array(30, 31, 32, 33, 34, 35, 36, 37) -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.commune_production(), $data) -->
                    <td data-bind="text: no()"></td>

                    <td data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.commune_production(), $data+".a") -->                
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.commune_production(), $data+".b") --> 
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
        <!-- /ko -->
    </tbody>
</table>

<br/>
<span class="fs-6">{{__('commune.long_crop_note')}}</span>

<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <tr class="table-primary">
            <th colspan="2">{{__('commune.type_of_crop')}}</th>
            <th>{{__('commune.es_land_growed')}}</th>
            <th>{{__('commune.land_production')}}</th>
            <th>{{__('commune.avg_production_in_ha')}}</th>
            <th>{{__('commune.es_production')}}</th>
        </tr>
        <!-- ko foreach: new Array(38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48) -->

            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.commune_production(), $data) -->
                    <td data-bind="text: no()"></td>

                    <td data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.commune_production(), $data+".a") -->                
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.commune_production(), $data+".b") --> 
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.commune_production(), $data+".c") --> 
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
        <!-- /ko -->
    </tbody>
</table>


