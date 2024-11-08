<h4 class="fw-bold text-primary">{{__('district.8_education')}}</h4>
<table class="table table-bordered border border-1">
    <tbody>
        <!-- ko foreach: new Array(43,44,45,46) -->
            <!-- ko if: ( $data == 43 || $data == 45 )-->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.district_education() , $data) -->
                <td data-bind="text: no()"></td>
                <td data-bind="text: question()"></td>

                <td colspan="2">
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value" required />
                        <span class="input-group-text">{{__('district.place')}}</span>
                    </div>
                </td>
                <!-- /ko -->
            </tr>
            <!-- /ko -->
            
            <!-- ko if: ( $data == 44 || $data == 46 )-->
            <tr>
                <!-- ko with: $parent.getQuestionByNo($parent.district_education() , $data) -->
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

                <!-- ko with: $parent.getQuestionByNo($parent.district_education() , $data + ".f") -->
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
