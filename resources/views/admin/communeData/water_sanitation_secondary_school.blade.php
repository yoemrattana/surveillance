<span class="fs-6">{{__('commune.water_sanitation_secondary_school')}}</span>
<table class="table table-bordered border border-1 mt-3">
    <tbody>
    <!-- ko foreach: new Array(78, 79) -->
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
        </tr>
        <!-- ko if: $data == 78 -->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), '78.1') -->
                <tr>
                    <td rowspan="3" data-bind="text: group()"></td>
                    <td data-bind="text: no()+' '+question()"></td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td> 
                </tr>        
            <!-- /ko-->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), '78.2') -->
                <tr>
                    <td data-bind="text: no()+' '+question()"></td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td> 
                </tr>        
            <!-- /ko-->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), '78.3') -->
                <tr>
                    <td data-bind="text: no()+' '+question()"></td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td> 
                </tr>        
            <!-- /ko-->
        <!-- /ko-->

        <!-- ko if: $data == 79 -->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), '79.1') -->
                <tr>
                    <td rowspan="4" data-bind="text: group()"></td>
                    <td rowspan="2" data-bind="text: no()+' '+sub_group()"></td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-text" data-bind="text: question()"></span>
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td> 
                </tr>        
            <!-- /ko-->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), '79.1.f') -->
                <tr>
                    <td>
                        <div class="input-group">
                            <span class="input-group-text" data-bind="text: question()"></span>
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td> 
                </tr>        
            <!-- /ko-->

            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), '79.2') -->
                <tr>
                    <td rowspan="2" data-bind="text: no()+' '+sub_group()"></td>
                    <td>
                        <div class="input-group">
                            <span class="input-group-text" data-bind="text: question()"></span>
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td> 
                </tr>        
            <!-- /ko-->
            <!-- ko with: $parent.getQuestionByNo($parent.commune_education(), '79.2.f') -->
                <tr>
                    <td>
                        
                        <div class="input-group">
                            <span class="input-group-text" data-bind="text: question()"></span>
                            <input type="number" class="form-control" data-bind="value: value"  />
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        </div>
                    </td> 
                </tr>        
            <!-- /ko-->
        <!-- /ko-->
    <!-- /ko -->        
    </tbody>
</table>

