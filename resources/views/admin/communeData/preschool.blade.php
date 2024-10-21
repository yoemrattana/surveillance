<!-- preschool -->
<table class="table table-bordered border border-1 mt-3">
    {{__('commune.preschool')}}
    <tr>
        <th></th>
        <th></th>
        <th colspan="2">{{__('commune.public_preschool')}}</th>
        <th colspan="3">{{__('commune.private_preschool')}}</th>
    </tr>
    <!-- ko foreach: new Array(58, 59, 60) -->
        <tr>
            <td data-bind="text: $data"></td>
            
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data) -->
                <td data-bind="text: question()"></td>
                <td colspan="2">
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: total"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data+".a") -->
                <td colspan="3">
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: total"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
        </tr>
    <!-- /ko -->

    <!-- ko foreach: new Array(61, 62, 63) -->
        <tr>
            <td data-bind="text: $data"></td>
            
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data) -->
                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: total"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: female"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data+".a") -->
                <td colspan="2">
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: total"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: female"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
        </tr>
    <!-- /ko -->
</table>
<small>{{__('commune.preschool_note')}}</small>
