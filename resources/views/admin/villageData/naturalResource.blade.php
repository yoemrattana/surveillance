<h5>ធនធានធម្មជាតិនិងបរិសា្ថន</h5>
<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>បរិយាយ</th>
        <th class="col-2">ចំនួនគ្រួសារ</th>
        <th>ចំនួនមនុស្ស</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 36))">
    <tr>
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td class="col-2">
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'poeple').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter( r => r.section() == 37)">
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>សំគាល់ ចំនួនគ្រួសារដែលទទួលនូវការបំពុលបរិស្ថាន គឺសំដៅទៅលើគ្រួសារមួយចំនួន ដែលរស់នៅជាប់ ឬក្បែរកន្លែង ឧស្សាហកម្ម សិប្បកម្ម ឬទីកន្លែងចាក់សំរាម.. ។ល។</p>
