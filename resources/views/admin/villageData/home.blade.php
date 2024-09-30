<h5 class="text-center">ស្ថិតិលំនៅស្ថាន</h5>
<h6>នៅក្នុងឆ្នាំនេះ ផ្ទះដែលជាលំនៅស្ថានរបស់ប្រជាជននៅក្នុងភូមិយើង មានដូចខាងក្រោម ៖</h6>

<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th rowspan="2" class="col-num"></th>
        <th rowspan="2">ប្រភេទផ្ទះ</th>
        <th rowspan="2">ចំនួនគ្រួសាររស់នៅ</th>
        <th rowspan="2">ចំនួនផ្ទះ សរុបមាន</th>
        <th colspan="4">ចំនួនផ្ទះមាន ភ្លើងបំភ្លឺពី ល</th>
        <th rowspan="2">ចំនួនផ្ទះមានទូរទស្សន៍</th>
    </tr>
    <tr>
        <th>អគ្គីសនី</th>
        <th>អាគុយ</th>
        <th>ព្រះអាទិត្យ</th>
        <th>ជីវឧស្មន័</th>
    </tr>

    </thead>

    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 19))">
    <tr>
        <!-- ko if: $index() == 1-->
        <td rowspan="2" class="text-center align-middle" data-bind="text: sort"></td>
        <!-- /ko -->
        <!-- ko if: !sort.in(145, '149.1')-->
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <!-- /ko -->
        <!-- ko if: sort.in('149.1')-->
        <td class="text-center align-middle"></td>
        <!-- /ko -->
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'home').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'electricity').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'battery').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'solar').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'biogas').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'tv').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>

    </tr>
    </tbody>
</table>
<br>
<p>សំគាល់: ចំនួនផ្ទះតាមប្រភេទផ្ទរនិមួយៗ អាចតិចជាង ឬស្មើចំនួនគ្រួសារ ។ ចំណែកផលបូកសរុបចំនួនគ្រួសារត្រូវស្មើចំនួន
    គ្រួសារសរុបដែលរស់នៅក្នុងភូមិ ។</p>
<br>
<h6>ចំនួនទីតាំងសិប្បកម្មផលិតកម្មដែលមាននៅក្នុងភូមិ (បើគ្មានសូមបំពេញលេខសូន្យ)៖</h6>
<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>ផ្ទះប្រក់សង្កសី</th>
        <th>ផ្ទះប្រក់ហ្វីប្រូ ស៊ីម៉ងត៍</th>
        <th>ផ្ទះប្រក់ក្បឿង</th>
        <th>ផ្ទះថ្មល្វែង</th>
        <th>ផ្ទះភូមិគ្រឹះ</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 20))">
    <tr>
        <td data-bind="text:sort"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'zinc').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'fibro').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'tile').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'flat').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'villa').value" type="number"
                       class="form-control" placeholder="......">
                <span class="input-group-text">{{__('general.home')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
