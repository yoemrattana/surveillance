<h4 class="fw-bold text-primary">{{__('commune.education')}}</h4>
<span class="fs-5">{{__('commune.home_based_training')}}</span>
<table class="table table-bordered border border-1 mt-3">
    <tr class="table-primary">
        <th colspan="2">{{__('general.description')}}</th>
        <th>{{__('commune.home_based_teaching')}}</th>
    </tr>
    <!-- ko foreach: commune_education().slice(0, 3) -->
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
</table>
<br/>
<span class="fs-5">{{__('commune.community_preschool_training')}}</span>
<table class="table table-bordered border border-1 mt-3">
    <tr class="table-primary">
        <th colspan="2">{{__('general.description')}}</th>
        <th colspan="2">{{__('commune.community_preschool')}}</th>
    </tr>
    <tr>
        <!-- ko with: getQuestionByNo(commune_education(), 55) -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td colspan="2">
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value"  />
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td>
        <!-- /ko -->
    </tr>
    <!-- ko foreach: new Array(56, 57) -->
        <tr>
           <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data) -->
                <td data-bind="text: no()"></td>
                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.total')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), $data+".f") -->      
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.female')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            <!-- /ko --> 
        </tr>
    <!-- /ko -->
</table>

<br/>
@include('admin.communeData.preschool')
<br/>
<br/>
@include('admin.communeData.primary_school')
<br/>
<br/>
@include('admin.communeData.water_sanitation_primary_school')
<br/>
<br/>
@include('admin.communeData.secondary_school')
<br/>
<br/>
@include('admin.communeData.water_sanitation_secondary_school')
<br/>
<br/>
@include('admin.communeData.high_school')
<br/>
<br/>
@include('admin.communeData.water_sanitation_high_school')
<br/>
@include('admin.communeData.literacy')
<br/>
