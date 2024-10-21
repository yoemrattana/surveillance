<table class="table table-bordered border border-1 mt-3">
    {{__('commune.home_based_training')}}
    <tr>
        <th colspan="2">{{__('general.description')}}</th>
        <th>{{__('commune.home_based_teaching')}}</th>
    </tr>
    <!-- ko foreach: commune_education().slice(0, 3) -->
        <tr>
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td colspan="2">
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: total"  />
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td> 
        </tr>
    <!-- /ko -->
</table>
<br/>
<table class="table table-bordered border border-1 mt-3">
    {{__('commune.community_preschool_training')}}
    <tr>
        <th colspan="2">{{__('general.description')}}</th>
        <th colspan="2">{{__('commune.community_preschool')}}</th>
    </tr>
    <!-- ko foreach: commune_education().slice(3, 6) -->
        <tr>
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <!-- ko if: $index() == 0 -->
                <td colspan="2">
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: total"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td> 
            <!-- /ko -->
            <!-- ko ifnot: $index() == 0 -->
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
        </tr>
    <!-- /ko -->
</table>

<br/>
@include('admin.communeData.preschool')
<br/>
@include('admin.communeData.primary_school')
<br/>
@include('admin.communeData.water_sanitation_primary_school')
<br/>
@include('admin.communeData.secondary_school')
<br/>
@include('admin.communeData.water_sanitation_secondary_school')
<br/>
@include('admin.communeData.high_school')
<br/>
@include('admin.communeData.water_sanitation_high_school')
<br/>