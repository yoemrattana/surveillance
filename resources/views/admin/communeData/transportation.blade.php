<h4 class="fw-bold text-primary">{{__('commune.transportation')}}</h4>
<span class="fs-5">{{__('commune.transportation_note')}}</span>
<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: commune_transportation().slice(0, 2) -->
            <tr>
                <td data-bind="text: no()"></td>
                <td data-bind="text: question()"></td>
                <td colspan="2">
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td> 
            </tr>
        <!-- /ko -->
        <!-- ko foreach: commune_transportation().slice(2, 4) -->
            <tr>
                <!-- ko if: $index() == 0 -->
                    <td rowspan="2" data-bind="text: no()"></td>
                    <td rowspan="2" data-bind="text: group()"></td>
                <!-- /ko -->
                <td colspan="2">
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td> 
            </tr>
        <!-- /ko -->
        <!-- ko foreach: commune_transportation().slice(4, 11) -->
            <tr>
                <!-- ko if: $index() == 0 -->
                    <td rowspan="7" data-bind="text: group()"></td>
                <!-- /ko -->
                <td data-bind="text: no()+' '+question()"></td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td> 
            </tr>
        <!-- /ko -->
    </tbody>
</table>