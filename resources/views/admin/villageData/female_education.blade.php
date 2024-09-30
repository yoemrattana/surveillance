<h5>ស្ថិតិមនុស្សស្រីនិងការអប់រំ </h5>
<table class="tbl-data table table-bordered">
    <thead class="text-center align-middle">
    <tr>
        <th rowspan="2">{{__('general.num')}}</th>
        <th rowspan="2">{{__('general.agegroup')}}</th>
        <th rowspan="2" class="col-2">{{__('general.number')}}</th>
        <th colspan="4">{{__('general.general_school')}}</th>
        <th rowspan="2">{{__('general.private_university')}}</th>
        <th rowspan="2">{{__('general.specialize_school')}}</th>
        <th rowspan="2">{{__('general.illiterate')}}</th>
    </tr>
    <tr>
        <th>{{ __('general.kinderkathen')}}</th>
        <th>{{ __('general.primary_school')}}</th>
        <th>{{ __('general.secondary_school')}}</th>
        <th>{{ __('general.high_school')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 3))">
    <tr>
        <td data-bind="text: sort" class="col-num"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: fields[0].value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>

        <td data-bind="css: {cellx : !$root.getField3($index() ,fields, 'kindergarden')}">
            <!-- ko if:  $root.getField3($index() ,fields, 'kindergarden')-->
            <div class="input-group">
                <input data-bind="value: $root.getField3($index() ,fields, 'kindergarden').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
            <!-- /ko -->
        </td>

        <td data-bind="css: {cellx : !$root.getField3($index() ,fields, 'primary')}">
            <!-- ko if:  $root.getField3($index() ,fields, 'primary')-->
            <div class="input-group">
                <input data-bind="value: $root.getField3($index() ,fields, 'primary').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
            <!-- /ko -->
        </td>

        <td data-bind="css: {cellx : !$root.getField3($index() ,fields, 'secondary')}">
            <!-- ko if:  $root.getField3($index() ,fields, 'secondary')-->
            <div class="input-group">
                <input data-bind="value: $root.getField3($index() ,fields, 'secondary').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
            <!-- /ko -->
        </td>

        <td data-bind="css: {cellx : !$root.getField3($index() ,fields, 'highschool')}">
            <!-- ko if:  $root.getField3($index() ,fields, 'highschool')-->
            <div class="input-group">
                <input data-bind="value: $root.getField3($index() ,fields, 'highschool').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
            <!-- /ko -->
        </td>
        <td data-bind="css: {cellx : !$root.getField3($index() ,fields, 'university')}">
            <!-- ko if:  $root.getField3($index() ,fields, 'university')-->
            <div class="input-group">
                <input data-bind="value: $root.getField3($index() ,fields, 'university').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
            <!-- /ko -->
        </td>
        <td data-bind="css: {cellx : !$root.getField3($index() ,fields, 'speciality')}">
            <!-- ko if:  $root.getField3($index() ,fields, 'speciality')-->
            <div class="input-group">
                <input data-bind="value: $root.getField3($index() ,fields, 'speciality').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
            <!-- /ko -->
        </td>
        <td data-bind="css: {cellx : !$root.getField3($index() ,fields, 'illiterature')}">
            <!-- ko if:  $root.getField3($index() ,fields, 'illiterature')-->
            <div class="input-group">
                <input data-bind="value: $root.getField3($index() ,fields, 'illiterature').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
            <!-- /ko -->
        </td>
    </tr>
    </tbody>
</table>
