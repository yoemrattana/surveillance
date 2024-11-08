<!-- secondary school -->
<span class="fs-5">{{__('commune.secondary_school')}}</span>
<table class="table table-bordered border border-1 mt-3">
    <tr class="table-primary">
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
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data+".a") -->
                <td colspan="3">
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
        </tr>
    <!-- /ko -->

    <!-- ko foreach: new Array(75, 76, 77) -->
        <tr class="text-center">
            <td data-bind="text: $data"></td>
            
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data) -->
                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.total')}}</span>
                        <input type="number" class="form-control" data-bind="value: value"  />
                    </div>
                    <span class="fs-6" data-bind="text: unit()"></span>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data+".f") -->
                <td>
                    <div class="input-group">
                         <span class="input-group-text">{{__('general.female')}}</span>
                        <input type="number" class="form-control" data-bind="value: value"  />
                    </div>
                    <span class="fs-6" data-bind="text: unit()"></span>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data+".a") -->
                <td colspan="2">
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.total')}}</span>
                        <input type="number" class="form-control" data-bind="value: value"  />
                    </div>
                    <span class="fs-6" data-bind="text: unit()"></span>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data+".a.f") -->
                <td>
                    <div class="input-group">
                         <span class="input-group-text">{{__('general.female')}}</span>
                        <input type="number" class="form-control" data-bind="value: value"  />
                    </div>
                    <span class="fs-6" data-bind="text: unit()"></span>
                </td>
            <!-- /ko -->
        </tr>
    <!-- /ko -->
</table>
<span class="fs-6">{{__('commune.preschool_note')}}</span>
