<h5 class="text-center">ផ្នែកផលិតកម្ម និងសេវាកម្ម</h5>
<h6>ចំនួនទីតាំងសិប្បកម្មផលិតកម្មដែលមាននៅក្នុងភូមិ (បើគ្មានសូមបំពេញលេខសូន្យ)៖</h6>
<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th rowspan="2" class="col-num"></th>
        <th rowspan="2">បរិយាយ</th>
        <th class="col-2" rowspan="2">ចំនួនទីតាំង</th>
        <th colspan="2">ចំនួនអ្នកធ្វើការងារ <br> (ម្ចាស់សិប្បកម្មនិងកម្មករ)</th>
    </tr>
    <tr class="text-center align-middle">
        <th class="col-2">សរុប</th>
        <th class="col-2">ស្រី</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 7))">
    <tr>
        <!-- ko if: label == 'សរុបចំនួនទីតាំងម៉ាស៊ីនកិនស្រូវមធ្យមនិងធំ' -->
        <td rowspan="3" class="text-center align-middle" data-bind="text: sort"></td>
        <!-- /ko -->
        <!-- ko ifnot: sort == 55 -->
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <!-- /ko -->
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'location').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.location')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'female').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>

<h5>ការធ្វើអាជីវកម្មផ្នែកសេវាកម្មដែលមានទីតាំងនៅក្នុងភូមិ (បើគ្មានសូមបំពេញលសេខសូន្យ)</h5>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter(x => x.section()=='7-2')">
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.location')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
