<h5>{{__('commune.natural_resource')}}</h5>
<table class="table table-bordered border border-1 mt-3">
    <thead>
        <tr class="table-primary">
            <th colspan="2">{{__('commune.community_type')}}</th>
            <th>{{__('commune.num_community')}}</th>
            <th>{{__('commune.community_land')}}</th>
            <th>{{__('commune.community_family')}}</th>
        </tr>
    </thead>
    <tbody>
        <!-- ko foreach: commune_natural_resource() -->
            <tr>
                <td data-bind="text: no()"></td>
                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: num_community"  />
                        <span class="input-group-text">{{__('commune.community')}}</span>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: community_land"  />
                        <span class="input-group-text">{{__('commune.hecta')}}</span>
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: num_family"  />
                        <span class="input-group-text">{{__('commune.family')}}</span>
                    </div>
                </td>
            </tr>
        <!-- /ko -->
    </tbody>
</table>