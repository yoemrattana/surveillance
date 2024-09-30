<h5>ទិន្នន័យបន្ថែមចំពោះភូមិដែលមានជនជាតិដើមភាគតិចរស់នៅ</h5>
<h6>អត្ថន័យពាក្យ ជនជាតិដើមភាគតិច គឺសំដៅក្រុមអ្នកស្រុកដែលមានប្រវត្តិតាំងនិវេសនដ្ឋានមុនគេ (ចាស់បុរាណ) ក្នុង ប្រទេស ហើយប្រកាន់យកទំនៀមទំលាប់ ប្រពៃណី វប្បធម៌ ភាសា និងបែបបទរស់នៅប្រចាំថ្ងៃដោយឡែកៗ របស់ពួកគេ។</h6>

<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th rowspan="2" colspan="2">ជនជាតិដើមភាគតិច</th>
        <th rowspan="2">ចំនួនគ្រួសារ</th>
        <th class="col-2" colspan="2">ចំនួនប្រជាជន</th>
        <th colspan="2">អាយុពី៦ ទៅ១១ឆ្នាំ</th>
    </tr>
    <tr class="text-center align-middle">
        <th class="col-2">សរុប</th>
        <th class="col-2">ស្រី</th>
        <th class="col-2">សរុប</th>
        <th class="col-2">ស្រី</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 42))">
    <tr>
        <!-- ko ifnot: sort == 228-->
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <!-- /ko -->
        <!-- ko if: sort == 228-->
        <td class="text-center align-middle"></td>
        <!-- /ko -->
        <td data-bind="text: label"></td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
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
                <input data-bind="value: $root.getField2($index() ,fields, 'total6-11').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'total6-11Female').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>

    </tr>
    </tbody>
</table>
