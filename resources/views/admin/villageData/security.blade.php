<h5>ស្ថានភាពផ្នែករដ្ឋបាលនិងសន្តិសុខសង្គម</h5>
<p>នៅក្នុងឆ្នាំនេះ ភូមិយើងខ្ញុំមានបញ្ហាអសន្តិសុខសង្គមនិងទំនាស់នានាដែលកើតមានឡើងគួរអោយកត់សំគាល់ ដូចខាងក្រោម ៖</p>
<h6>ករណីឃាតកម្ម ប្លន់ ចាប់ជំរិត លួច ទំនាស់ដីធ្លី (បើគ្មានបំពញេលខសូន្យ)</h6>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter( r => r.section() == 38)">
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
<h4>ករណីទំនាស់ផ្សេងៗ (បើគ្មានបំពញេលខសូន្យ)</h4>

<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter( r => r.section() == 39)">
    <tr>
        <!-- ko if: sort() == 201 -->
        <td class="text-center col-num" data-bind="text: sort"></td>
        <!-- /ko -->
        <!-- ko if: sort() == '201.1' -->
        <td rowspan="2" class="text-center">ក្នុងនោះ</td>
        <!-- /ko -->
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
<p>ករណីអំពើហឹង្សា ការប្រើប្រាស់គ្រឿងញៀន (បើគ្មានបំពញេលខសូន្យ)</p>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter( r => r.section() == 40)">
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
