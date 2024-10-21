<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: commune_production().slice(0, 7) -->
            <!-- ko if: $index() == 0 -->
                <tr class="table-primary">
                    <th data-bind="text: group()" colspan="2"></th>
                    <th>{{__('commune.es_land_growed')}}</th>
                    <th>{{__('commune.avg_production_in_ha')}}</th>
                    <th>{{__('commune.es_production')}}</th>
                </tr>
            <!-- /ko -->
            <tr>
                <td data-bind="text: no()"></td>

                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: es_land_growed"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>                
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: avg_production_in_ha"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: es_production"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            </tr>
        <!-- /ko -->
    </tbody>
</table>

<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: commune_production().slice(7, 25) -->
            <!-- ko if: $index() == 0 -->
                <tr class="table-primary">
                    <th data-bind="text: group()" colspan="2"></th>
                    <th>{{__('commune.es_land_growed')}}</th>
                    <th>{{__('commune.land_production')}}</th>
                    <th>{{__('commune.avg_production_in_ha')}}</th>
                    <th>{{__('commune.es_production')}}</th>
                </tr>
            <!-- /ko -->
            <tr>
                <td data-bind="text: no()"></td>

                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: es_land_growed"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>                
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: land_production"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: avg_production_in_ha"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: es_production"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            </tr>
        <!-- /ko -->
    </tbody>
</table>