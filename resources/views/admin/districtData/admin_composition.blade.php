<h4 class="fw-bold text-primary">{{__('district.1_local_administrative_composition')}}</h4>
<table class="table table-bordered border border-1">
    <tbody>
        <!-- ko foreach: new Array(1, 2, 3) -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), $data) -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text" >{{__('district.total')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.people')}}</span>
                </div>
            </td>
            <!-- /ko -->
             
            <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), $data + '.f') --> 
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('district.female')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.people')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- ko if: $data == 2 -->
          
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), '2.1') -->
                <td rowspan="5" data-bind="text: group()"></td>
                <td data-bind="text: no() + ' ' + question()"></td>
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.total')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text">{{__('district.people')}}</span>
                    </div>
                </td> 
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), '2.1.f') -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.female')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text">{{__('district.people')}}</span>
                    </div>
                </td>
                <!-- /ko -->
            </tr>        
            
            
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), '2.2') -->
                <td data-bind="text: no() + ' ' + question()"></td>
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.total')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text">{{__('district.people')}}</span>
                    </div>
                </td>
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), '2.2.f') -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.female')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required /> 
                        <span class="input-group-text">{{__('district.people')}}</span>
                    </div>
                </td>
                 <!-- /ko -->
            </tr>        
           
            
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), '2.3') -->
                <td data-bind="text: no() + ' ' + question()"></td>
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.total')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text">{{__('district.people')}}</span>
                    </div>
                </td> 
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), '2.3.f') -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.female')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required /> <!-- 2.3.f -->
                        <span class="input-group-text">{{__('district.people')}}</span>
                    </div>
                </td>
                <!-- /ko -->
            </tr>        
            
            
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), '2.4') -->
                <td data-bind="text: no() + ' ' + question()"></td>
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.total')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text">{{__('district.people')}}</span>
                    </div>
                </td> 
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), '2.4.f') -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.female')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required /> <!-- 2.4.f -->
                        <span class="input-group-text">{{__('district.people')}}</span>
                    </div>
                </td>
                <!-- /ko -->
            </tr>        
          
            
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), '2.5') -->
                <td data-bind="text: no() + ' ' + question()"></td>
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.total')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text">{{__('district.people')}}</span>
                    </div>
                </td> 
                <!-- /ko -->
                <!-- ko with: $parent.getQuestionByNo($parent.district_admin_composition(), '2.5.f') -->
                <td>
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.female')}}</span>
                        <input type="number" class="form-control" data-bind="value: value" required /> 
                        <span class="input-group-text" >{{__('district.people')}}</span>
                    </div>
                </td>
                <!-- /ko -->
            </tr>        
           
        <!-- /ko -->
        <!-- /ko -->
    </tbody>
</table>


