<h5>{{__('commune.disaster')}}</h5>
<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: commune_disaster().slice(0, 10) -->
            <tr>
                
                <!-- ko if: no() == '95.1' || no() == '95.2' -->
                    <td></td>
                    <td data-bind="text: no()+' '+question()"></td>
                <!-- /ko-->
                <!-- ko ifnot: no() == '95.1' || no() == '95.2' -->
                    <td data-bind="text: no()"></td>
                    <td data-bind="text: question()"></td>
                <!-- /ko-->
                
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            </tr>
        <!-- /ko -->
    </tbody>
</table>
<br/>
<table class="table table-bordered border border-1 mt-3">
    <thead>
        <tr>
            <th colspan="4">{{__('commune.birth_certificate')}}</th>
        </tr>
    </thead>
    <tbody>
        <!-- ko foreach: commune_disaster().slice(10,17) -->
            <tr>
                <!-- ko if: no() == '103.1' -->
                    <td rowspan="3">103</td>
                <!-- /ko -->
                <td data-bind="text: no()"></td>
                <!-- ko if: no() == '103.1' || no() == '103.2' || no() == '103.3' -->
                    <td data-bind="text: question()"></td>
                <!-- /ko -->                
                <!-- ko ifnot: no() == '103.1' || no() == '103.2' || no() == '103.3' -->
                    <td colspan="2" data-bind="text: question()"></td>
                <!-- /ko -->

                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            </tr>
        <!-- /ko -->
    </tbody>
</table>
<br/>
<h5>{{__('commune.mine_disaster')}}</h5>
<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: commune_disaster().slice(17,29) -->
            <tr>
                
                <!-- ko if: no() == 109 || no() == '110' || no() == '112' -->
                    <td rowspan="2" data-bind="text: no()"></td>
                    <td rowspan="2" data-bind="text: group()"></td>
                    <td data-bind="text: question()"></td>
                <!-- /ko -->

                <!-- ko if: no() == '109.1' || no() == '110.1' || no() == '112.1' -->
                    <td data-bind="text: question()"></td>                    
                <!-- /ko -->
                <!-- ko ifnot: no() == 109 || no() == '109.1' || no() == 110 || no() == '110.1' || no() == 112 || no() == '112.1' -->
                    <td data-bind="text: no()"></td>
                    <td colspan="2" data-bind="text: question()"></td>
                <!-- /ko -->
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <span class="input-group-text" data-bind="text: unit()"></span>
                    </div>
                </td>
            </tr>
        <!-- /ko -->
    </tbody>
</table>
<br/>
{{__('commune.mine_land_note_1')}}
<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: commune_disaster().slice(30,34) -->
            <tr>
                <td data-bind="text: no()"></td>
                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <!-- ko if: unit() -->
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        <!-- /ko -->
                    </div>
                </td>
            </tr>
        <!-- /ko -->
    </tbody>
</table>
<br/>
{{__('commune.mine_land_note_2')}}
<table class="table table-bordered border border-1 mt-3">
    <tbody>
        <!-- ko foreach: commune_disaster().slice(35,41) -->
            <tr>
                <td data-bind="text: no()"></td>
                <td data-bind="text: question()"></td>
                <td>
                    <div class="input-group">
                        <input type="number" class="form-control" data-bind="value: value"  />
                        <!-- ko if: unit() -->
                            <span class="input-group-text" data-bind="text: unit()"></span>
                        <!-- /ko -->
                    </div>
                </td>
            </tr>
        <!-- /ko -->
    </tbody>
</table>