<h5>{{__('commune.water_sanitation_secondary_school')}}</h5>
<table class="table table-bordered border border-1 mt-3">
	<tbody>
    <!-- ko foreach: commune_education().slice(49, 54) -->
        <tr>
        	<!-- ko if: no() == 78 || no() == 79 -->
	            <td data-bind="text: no()"></td>
	            <td data-bind="text: question()"></td>
            <!-- /ko -->
            <!-- ko ifnot: no() == 78 || no() == 79 -->
	            <td></td>
	            <td data-bind="text: no()+' '+question()"></td>
            <!-- /ko -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: total"  />
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
            </td> 
        </tr>
	
    <!-- /ko -->
    <!-- ko foreach: commune_education().slice(54, 56) -->
    	<tr>
    		<td rowspan="2"></td>
    		<td rowspan="2" data-bind="text: no()+' '+sub_group()"></td>
    		<td>
    			<div class="input-group">
    				<span data-bind="text: question()"></span> {{__('general.total')}}&nbsp;
                    <input type="number" class="form-control" data-bind="value: total"  />
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
    		</td>
    	</tr>
    	<tr>
    		<td>

    			<div class="input-group">
    				<span data-bind="text: question()"></span> {{__('general.female')}}&nbsp;
                    <input type="number" class="form-control" data-bind="value: female"  />
                    <span class="input-group-text" data-bind="text: unit()"></span>
                </div>
    		</td>
    	</tr>
    <!-- /ko -->		
    </tbody>
</table>

