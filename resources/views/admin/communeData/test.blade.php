<h5 class="text-center">ស្ថានភាពផ្នែកកសិកម្មនិងធនធាន</h5>
<h6>នៅក្នុងភូមិយើងខ្ញុំឆ្នាំនេះមាន៖</h6>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter(x => x.section()=='10')">
    <!-- ko if: sort() >=90 && sort() <=95-->
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <!-- ko if: sort().in(90,91,92,93,94) -->
                <span class="input-group-text">{{__('general.Family')}}</span>
                <!-- /ko -->
                <!-- ko if: sort() == 95 -->
                <span class="input-group-text">{{__('general.well')}}</span>
                <!-- /ko -->
            </div>
        </td>
    </tr>
    <!-- /ko -->
    <!-- ko if: sort().in(96,97)-->
    <tr>
        <td class="text-center col-num" data-bind="text: sort"></td>
        <td data-bind="text:name_attribute"></td>
        <td>
            <div class="input-group">
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">តោន/ហិកតា</span>
            </div>
        </td>
    </tr>
    <!-- /ko -->

    <!-- ko if: sort() == 98 && code_attribute() == 'max' -->
    <tr>
        <td rowspan="2" class="text-center col-num" data-bind="text: sort"></td>
        <td>ក្នុងឆ្នាំនេះតំលៃស្រូវលក់ចេញក្នុង១គីឡូក្រាម</td>
        <td>
            <div class="input-group">
                <span class="input-group-text">មានតម្លៃខ្ពាស់បំផុត</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">រៀល</span>
            </div>
        </td>
    </tr>
    <!-- /ko -->
    <!-- ko if: sort() == 98 && code_attribute() == 'min'-->
    <tr>
        <td>ក្នុងឆ្នាំនេះតំលៃស្រូវលក់ចេញក្នុង១គីឡូក្រាម</td>
        <td>
            <div class="input-group">
                <span class="input-group-text">មានតម្លៃទាបបំផុត</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......">
                <span class="input-group-text">រៀល</span>
            </div>
        </td>
    </tr>
    <tr>
        <td class="no-border" colspan="3"></td>
    </tr>
    <!-- /ko -->

    <!-- ko if: sort().in(99,100) -->
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

    <!-- /ko -->

    <!-- ko if: sort().in(101) -->
    <tr class="no-border">
        <td class="no-border" colspan="3">ក្នុងភូមិយើងខ្ញុំចំនួនគ្រួសារក្នុងស្ថិតិខាងលើដែលនិយមប្រើប្រាស់ជីគីមីនិងថ្នាំគីមីសំលាប់សត្វល្អិត សំរាប់ការដំាដុះក្នុងឆ្នាំនេះមាន ៖</td>
    </tr>
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
    <!-- /ko -->
    <!-- ko if: sort().in(102,103,104) -->
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
    <!-- /ko -->
    </tbody>
</table>
<br>
<p>សំគាល់ ៖ ចំពោះគ្រួសារណាដែលប្រើជីលើសពី១ មានន័យថាជីគីមីក៏ប្រើ ជីសរីរាង្គក៏ប្រើ ក្នុងករណីនេះ សូមកត់ត្រាការប្រើប្រាស់ជីប្រភេទណាមួយដែលប្រើញឹកញាប់ជាងគេ ម្យ៉ាងទៀតផលបូកបន្ទាត់លេខ (103+104) ត្រូវតូចជាងឬស្មើចំនួនគ្រួសារសរុបក្នុងភូមិ។ ការកត់ត្រាដូចគ្នានេះដែរ ចំពោះគ្រួសារ ដែលបើ ប្រាស់ថ្នាំសំលាប់សត្វល្អិតឬស្ម ។
</p>
