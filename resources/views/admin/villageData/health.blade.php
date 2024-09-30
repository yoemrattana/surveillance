<h5 class="text-center">ស្ថានភាពផ្នែកសុខភាពនិងអនាម័យ</h5>
<h6>នៅក្នុងភូមិយើងខ្ញុំមាន ៖</h6>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter( r => r.section() == 21)">
    <tr>
        <td data-bind="text: sort" class="col-num"></td>
        <td data-bind="text: name_attribute"></td>

        <td>
            <!-- ko if: sort() == 151 -->
            <input data-bind="value: value" type="number" class="form-control" placeholder="......">
            <!-- /ko-->
            <!-- ko if: sort() == 152 -->
           <div class="input-group">
               <span class="input-group-text">{{__('general.has')}}</span>
               <input data-bind="value: value" type="number" class="form-control" placeholder="......">
               <span class="input-group-text">{{__('general.km')}}</span>
           </div>
            <!-- /ko -->
            <!-- ko if: sort() == 153 -->
            <div class="input-group">
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
            <!-- /ko -->
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>សំគាល់ ៖ ប្រសិនបើ មណ្ឌលសុខភាពមានទីតាំងនៅក្នុងភូមិ ចំងាយគឺ សូន្យ គ.ម</p>
<br>

<h6>នៅក្នុងឆ្នាំនេះ ក្នុងភូមិយើងខ្ញុំមានស្ត្រីសំរាលកូនដូចខាងក្រោម ៖ ៖</h6>
<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>បរិយាយ</th>
        <th class="col-2">ចំនួនស្ត្រីបាន សំរាលកូន</th>
        <th class="col-2">ចំនួនទារក បានកើត</th>
        <th class="col-2">ចំនួនស្រ្តីបាន ស្លាប់ ក្រោយសំ រាលកូន ក្នុងចន្លោះ0- ១ខែ</th>
        <th class="col-2">ចំនួនទារកបាន ស្លាប់ក្នងចន្លោះ0- ១ខែ</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 22))">
    <tr>
        <td class="text-center align-middle">
            <!-- ko if: sort!=155.1 -->
            <span data-bind="text: sort"></span>
            <!-- /ko -->
        </td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'woman').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'baby').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'deadwoman').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'deadbaby').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<h4>នៅក្នុងឆ្នាំនេះ ក្នុងភូមិយើងខ្ញុំមានស្ត្រីសំរាលកូនដូចខាងក្រោម ៖</h4>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter(r=>r.section() == 23)">
    <tr>
        <td class="col-num">
            <!-- ko if: sort() != '157.1' -->
            <span data-bind="text: sort"></span>
            <!-- /ko -->
        </td>
        <td data-bind="text: name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<h3>ស្ថានភាពនៃការប្រើប្រាស់ទឹកក្នុងភូមិ</h3>
<h4> តាមការរាប់ជាក់ស្ដែងក្នុងឆ្នាំនេះ ប្រភពទឹកប្រើប្រាស់ នៅក្នុងភូមិយើងខ្ញុំមាន ៖</h4>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 24))">
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:label"></td>
        <td class="col-2">
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td class="col-2" data-bind="css : {cellx: !$root.getField2($index() ,fields, 'well')}">
            <!-- ko if: $root.getField2($index() ,fields, 'well')-->
            <div class="input-group">
                <!-- ko if: sort != 162 -->
                <span class="input-group-text">{{__('ចំនួនអណ្តូង')}}</span>
                <!-- /ko -->
                <!-- ko if: sort == 162 -->
                <span class="input-group-text">{{__('ចំនួនស្រះទឹក')}}</span>
                <!-- /ko -->
                <input data-bind="value: $root.getField2($index() ,fields, 'well').value" type="number" class="form-control" placeholder="......">
            </div>
            <!-- /ko -->
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>សំគាល់ ៖ ផលបូកចំនួនគ្រួសារដែលប្រើប្រាស់ប្រភពទឹកខាងលើនេះ ត្រូវស្មើចំនួនគ្រួសារសរុបក្នុងភូមិ ។</p>
<br>
<h4>អានាម័យនៃការទទួលទានទឹក</h4>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter(r=>r.section() == 25)">
    <tr>
        <td class="col-num" >
            <!-- ko if: sort() != '167.1' -->
            <span data-bind="text: sort"></span>
            <!-- /ko -->
        </td>
        <td data-bind="text: name_attribute"></td>
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
<p><b>សំគាល់៖</b> ផលបូកចំនួនគ្រួសារដែលប្រើប្រាស់ទឹកសំរាប់ទទួលទានខាងលើនេះ ត្រូវតូចជាង ឬស្មើចំនួនគ្រួសារសរុបក្នុងភូមិ។ ចំពោះករណីគ្រួសារណាដែលអនុវត្តលើសពី១ រាប់យកតែវិធីណាដែលប្រើញឹកញាប់ ឬសំខាន់ជាងគេ ។</p>
<h4>ចំងាយប្រភពទឹកប្រើប្រាស់ទាំងរដូវប្រាំងនិងវស្សា</h4>
<br>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter(r=>r.section() == 26)">
    <tr>
        <td class="col-num">
            <span data-bind="text: sort"></span>
        </td>
        <td data-bind="text: name_attribute"></td>
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
<h4>តាមការរាប់ជាក់ស្ដែងរបស់យើងខ្ញុំ ក្នុងឆ្នាំនេះក្នុងភូមិទាំងមូលមាន ៖</h4>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter(r=>r.section() == 27)">
    <tr>
        <td class="col-num">
            <!-- ko if: sort() == 170 -->
            <span data-bind="text: sort"></span>
            <!-- /ko -->
        </td>
        <td data-bind="text: name_attribute"></td>
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
