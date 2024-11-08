<h4 class="fw-bold text-primary">{{__('district.5_income_registered_at_the_district_tax_office')}}</h4>
<table class="table table-bordered border border-1">
    <thead class="text-center align-middle table-primary">
        <tr>
            <th></th>
            <th>{{__('district.revenue')}}</th>
            <th>{{__('district.agent')}}</th>
            <th>{{__('district.estimated_annual_income_(riel)')}}</th>
        </tr>
    </thead>
    <tbody>
        <!-- ko foreach: new Array(29,"29.1",29.2,29.3,29.4,29.5,29.6,29.7,29.8,29.9,"29.10") -->
      
        <!-- ko if: $data == 29 -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29") -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td><input type="number" class="form-control" data-bind="value: value" required /></td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- /ko -->
        <!-- ko if: $data == 29 -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.1") -->
            <td rowspan="10" data-bind="text: group()"></td>
            <td data-bind="text: no() + ' ' + question()"></td>
            <td><input type="number" class="form-control" data-bind="value: value" required /></td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.1.a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>

    
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.2") -->
            <td data-bind="text: no() + ' ' + question()"></td>
            <td><input type="number" class="form-control" data-bind="value: value" required /></td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.2.a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>

       
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.3") -->
            <td data-bind="text: no() + ' ' + question()"></td>
            <td><input type="number" class="form-control" data-bind="value: value" required /></td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.3.a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>

        
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.4") -->
            <td data-bind="text: no() + ' ' + question()"></td>
            <td><input type="number" class="form-control" data-bind="value: value" required /></td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.4.a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>

      
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.5") -->
            <td data-bind="text: no() + ' ' + question()"></td>
            <td><input type="number" class="form-control" data-bind="value: value" required /></td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.5.a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>

        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.6") -->
            <td data-bind="text: no() + ' ' + question()"></td>
            <td><input type="number" class="form-control" data-bind="value: value" required /></td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.6.a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>

       
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.7") -->
            <td data-bind="text: no() + ' ' + question()"></td>
            <td><input type="number" class="form-control" data-bind="value: value" required /></td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.7.a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>

        
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.8") -->
            <td data-bind="text: no() + ' ' + question()"></td>
            <td><input type="number" class="form-control" data-bind="value: value" required /></td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.8.a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>

        
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.9") -->
            <td data-bind="text: no() + ' ' + question()"></td>
            <td><input type="number" class="form-control" data-bind="value: value" required /></td>
            <!-- /ko -->
             <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.9.a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>

      
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.10") -->
            <td data-bind="text: no() + ' ' + question()"></td>
            <td><input type="number" class="form-control" data-bind="value: value" required /></td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_tax_office(), "29.10.a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.riel')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>


        <!-- /ko -->
        <!-- /ko -->
    </tbody>
</table>
