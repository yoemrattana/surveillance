<span class="fs-6">{{__('commune.literacy_note')}}</span>
<table class="table table-bordered border border-1 mt-3">
    <tr class="table-primary">
        <th></th>
        <th>{{__('general.description')}}</th>
        <th>{{__('commune.num_class')}}</th>
        <th colspan="2">{{__('commune.literacy_teacher')}}</th>
        <th colspan="2">{{__('commune.literacy_student')}}</th>
    </tr>
    <!-- ko foreach: new Array(88, 89) -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data) -->
                <td data-bind="text: no()"></td>
                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data+".a") -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.total')}}</span>
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data+".a.f") -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.female')}}</span>
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko --> 
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data+".b") -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.total')}}</span>
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko --> 
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data+".b.f") -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.female')}}</span>
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
        </tr>
    <!-- /ko -->
</table>