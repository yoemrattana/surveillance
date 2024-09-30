<h5 class="text-center">{{__('village.occupation')}}</h5>
<p>ការកត់ត្រាស្ថិតិការងារជាមុខរបរនេះ សំដៅយកចំនួនមនុស្សមានអាយុពី១៨ឆ្នាំឡើង ដែលមានមុខរបរចំបង ( មុខរបរ
    ស្នលទី១) និងមុខរបរបន្ទាប់បន្សំ(ទី២) ដែលជាប្រភពចំណូលសំខាន់ក្នុងការទ្រទ្រង់ជីវភាពគ្រួសារ ។
</p>
<table class="tbl-data table table-bordered">
    <thead>
    <tr>
        <th rowspan="2" class="col-num"></th>
        <th class="align-middle text-center" rowspan="2">{{__('village.description')}}</th>
        <th class="text-center" colspan="3">{{__('village.pop_from_18age')}}</th>
    </tr>
    <tr>
        <th class="text-center">{{__('village.sex')}}</th>
        <th class="text-center col-2">{{__('village.main_work')}}</th>
        <th class="text-center col-2">{{__('village.secondary_work')}}</th>
    </tr>
    </thead>

    <tbody data-bind="foreach: $root.groupLevel3($data.filter( r => r.section() == 5))">
    <tr data-bind="visible: $index()==0">
        <td colspan="5">{{__('មុខរបរធ្វើស្រែ(បើគ្មានបំពេញសូន្យ)')}}</td>
    </tr>
    <tr data-bind="visible: $index()==4">
        <td colspan="5">{{__('មុខរបរនេសាទ ចិញ្ចឹមសត្វ អនុផលព្រៃឈើ(បើគ្មានបំពេញសូន្យ)')}}</td>
    </tr>
    <tr data-bind="visible: $index()==7">
        <td colspan="5">{{__('មុខរបរធ្វើសិប្បកម្ម(បើគ្មានបំពេញលេខសូន្យ)')}}</td>
    </tr>
    <tr data-bind="visible: $index()==15">
        <td colspan="5">{{__('មុខរបរសេវាកម្ម(បើគ្មានបំពេញលេខសូន្យ)')}}</td>
    </tr>
    <tr>
        <td rowspan="2" data-bind="text: sort"></td>
        <td rowspan="2" data-bind="text: label"></td>
        <td>ប្រុស</td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'M1').value" type="text"
                       class="form-control">
                <span class="input-group-text">នាក់</span>
            </div>
        </td>
        <td data-bind="css: {cellx: !$root.getField2($index() ,fields, 'M2')}">
            <!-- ko if: $root.getField2($index() ,fields, 'M2')-->
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'M2').value" type="text"
                       class="form-control">
                <span class="input-group-text">នាក់</span>
            </div>
            <!-- /ko -->
        </td>
    </tr>
    <tr>
        <td>ស្រី</td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'F1').value" type="text"
                       class="form-control">
                <span class="input-group-text">នាក់</span>
            </div>
        </td>
        <td data-bind="css: {cellx: !$root.getField2($index() ,fields, 'F2')}">
            <!-- ko if: $root.getField2($index() ,fields, 'F2')-->
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'F2').value" type="text"
                       class="form-control">
                <span class="input-group-text">នាក់</span>
            </div>
            <!-- /ko -->
        </td>
    </tr>
    </tbody>
</table>

<br>

<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.description')}}</th>
        <th>{{__('general.gender')}}</th>
        <th class="col-2">{{__('general.total')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel2($data.filter( r => r.section() == 6))">
    <tr>
        <td rowspan="7" data-bind="text: label"></td>
    </tr>
    <!-- ko foreach: group-->
    <tr>
        <td rowspan="3" data-bind="html: label"></td>
    </tr>
    <tr>
        <td>{{__('general.male')}}</td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'M').value" type="number"
                       class="form-control">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    <tr>
        <td>{{__('general.female')}}</td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'F').value" type="number"
                       class="form-control">
                <span class="input-group-text">{{__('general.person')}}</span>
            </div>
        </td>
    </tr>
    <!-- /ko -->
    </tbody>
</table>
