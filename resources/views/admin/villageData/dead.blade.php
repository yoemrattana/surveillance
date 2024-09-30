<h4>ករណីមរណភាពែដលេកើតេឡើងក្នុងឆ្នាំ (បើគ្មានបំពេញលខសូន្យ)</h4>
<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th rowspan="2" class="col-num"></th>
        <th rowspan="2">ចំនួនមរណភាពដែលមាន នៅក្នុងភូមិ</th>
        <th class="col-2" colspan="3">អាយុក្រោម១៨ឆ្នាំ</th>
        <th colspan="2">អាយុ១៨ឆ្នាំឡើង</th>
    </tr>
    <tr class="text-center align-middle">
        <th class="col-2">សរុប</th>
        <th class="col-2">ស្រី</th>
        <th class="col-2">ក្នុងនោះអាយុ ក្រោម៥ឆ្នាំ</th>
        <th class="col-2">សរុប</th>
        <th class="col-2">ស្រី</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 41))">
    <tr>
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'female').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, '5').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total18').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, '18Female').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>

    </tr>
    </tbody>
</table>
