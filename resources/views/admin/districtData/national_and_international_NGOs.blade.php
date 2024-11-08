<h4 class="fw-bold text-primary">{{__('district.6_number_of_national_and_international_ngos')}}</h4>
<table class="table table-bordered border border-1">
    <tbody>
        <!-- ko foreach: new Array(30, 31, 32, 33, 34, 35) -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_national_and_international_NGOs(), $data) -->
            <td rowspan="4" data-bind="text: no()"></td>
            <td rowspan="4" data-bind="text: group()"></td>
            
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('district.have')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.organization')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>

        
        <!-- ko with: $parent.getQuestionByNo($parent.district_national_and_international_NGOs(), $data + ".1") -->
        <tr>
            <td data-bind="text: question()"></td> 
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('district.have')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.organization')}}រ</span>
                </div>
            </td>
        </tr>
        <!-- /ko -->

        <!-- ko with: $parent.getQuestionByNo($parent.district_national_and_international_NGOs(), $data + ".2") -->
        <tr>
            <td data-bind="text: question()"></td> 
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('district.have')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.people')}}</span>
                </div>
            </td>
        </tr>
        <!-- /ko -->

        <!-- ko with: $parent.getQuestionByNo($parent.district_national_and_international_NGOs(), $data + ".3") -->
        <tr>
            <td data-bind="text: question()"></td> 
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('district.have')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.commune')}}</span>
                </div>
            </td>
        </tr>
        <!-- /ko -->
        <!-- /ko -->
    </tbody>
</table>
<br>

<table class="table table-bordered border border-1">
    <tbody>
    <!-- ko foreach: new Array(36, 37) -->
        <!-- ko if: $data == 36 -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_national_and_international_NGOs(),"36") -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>

            <td colspan="2">
                <div class="input-group">
                    <span class="input-group-text">{{__('district.amount')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.place')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- /ko -->


        <!-- ko if: $data == 37 -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_national_and_international_NGOs(), "37") -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('district.total')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.people')}}</span>
                </div>
            </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_national_and_international_NGOs(), '37.f') -->
            <td>
                <div class="input-group">
                    <span class="input-group-text">{{__('district.female')}}</span>
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.people')}}</span>
                </div>
            </td>
            <!-- /ko -->
        </tr>
        <!-- /ko --> 
    <!-- /ko -->
    </tbody>
</table>
                
