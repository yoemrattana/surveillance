<!-- preschool -->
<table class="table table-bordered border border-1 mt-3">
    {{__('commune.secondary_school')}}
    <tr>
        <th></th>
        <th></th>
        <th colspan="2">{{__('commune.public_secondary_school')}}</th>
        <th colspan="3">{{__('commune.private_secondary_school')}}</th>
    </tr>
    <!-- ko foreach: new Array(72, 73, 74) -->
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

    <!-- ko foreach: new Array(75, 76, 77) -->
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
