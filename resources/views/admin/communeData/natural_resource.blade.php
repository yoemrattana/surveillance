<h4 class="fw-bold text-primary">{{__('commune.natural_resource')}}</h4>
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
        <!-- ko foreach: new Array(90, 91, 92, 93, 94) -->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.commune_natural_resource(), $data) -->
                    <td data-bind="text: no()"></td>
                    <td data-bind="text: question()"></td>
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text">{{__('commune.community')}}</span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.commune_natural_resource(), $data+".a") -->
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text">{{__('commune.hecta')}}</span>
                        </div>
                    </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.commune_natural_resource(), $data+".b") -->
                    <td>
                        <div class="input-group">
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text">{{__('commune.family')}}</span>
                        </div>
                    </td>
                <!-- /ko -->
            </tr>
        <!-- /ko -->
    </tbody>
</table>