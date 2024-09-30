<h4>ចំនួនទីតាំងលក់ទំនិញដែលស្ថិតនៅជុំវិញផ្សារឬនៅឆ្ងាយពីផ្សារខាងលើនៅក្នុងភូមិមាន៖</h4>
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
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 9))">
    <tr>
        <td data-bind="text: sort" class="text-center align-middle"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'location').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">កន្លែង</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">នាក់</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'female').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">នាក់</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
