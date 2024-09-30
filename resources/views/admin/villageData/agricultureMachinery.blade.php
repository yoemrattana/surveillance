<h6>គ្រឿងយន្តកសិកម្ម (បើគ្មានបំពេញលេខសូន្យ)</h6>

<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 11))">

    <tr>
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit')}}</span>
            </div>
        </td>
    </tr>

    </tbody>

</table>
<br>
<p>រាប់តាមភាពជាក់ស្តែងនៅក្នុងភូមិយើងខ្ញុំឆ្នាំនេះ ចំនួនគ្រួសារនិងចំនួនមធ្យោបាយដឹកជញ្ជូនមានដូចខាងក្រោម៖</p>
<br>
<h5>រថយន្តដឹកទំនិញនិងដឹកអ្នកដំណើរ (បើគ្មានបំពេញលេខសូន្យ)</h5>

<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 12))">

    <tr>
        <td class="text-center align-middle" data-bind="visible: sort!=120.1 ,text: sort"></td>
        <td class="text-center align-middle" data-bind="visible: sort==120.1"></td>
        <td data-bind="text: label"></td>
        <td data-bind="css: {cellx: sort == '120.1'}">
            <!-- ko if: sort != 120.1-->
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
            <!-- /ko -->
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<h6>ម៉ូតូនិងកង់ (បើគ្មានបំពេញលេខសូន្យ)</h6>
<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 13))">

    <tr>
        <td class="text-center align-middle" data-bind="visible: sort!=120.1 ,text: sort"></td>
        <td class="text-center align-middle" data-bind="visible: sort==120.1"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<h6>ទូកែចវ-អ៊ុំ (បើគ្មានបំពញេលខសូន្យ)</h6>
<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>

    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 14))">
    <tr>
        <td class="text-center align-middle" data-bind="visible: sort!=126.1 ,text: sort"></td>
        <td class="text-center align-middle" data-bind="visible: sort==126.1"></td>
        <td data-bind="text: label"></td>
        <td data-bind="css: {cellx: sort == '126.1'}">
            <!-- ko if: sort != 126.1-->
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
            <!-- /ko -->
        </td>
        <td>

            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>

<br>
<h6>ទូកម៉ាស៊ីន-កាណូត សំរាប់នេសាទ ដឹកអ្នកដំណើរ និងដឹកទំនិញ (បើគ្មានបំពេញលេខសូន្យ)</h6>
<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 15))">
    <tr>
        <td class="text-center align-middle" data-bind="visible: sort!=130.1 ,text: sort"></td>
        <td class="text-center align-middle" data-bind="visible: sort==130.1"></td>
        <td data-bind="text: label"></td>
        <td data-bind="css: {cellx: sort == '130.1'}">
            <!-- ko if: sort != 130.1-->
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
            <!-- /ko -->
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>សំគាល់ ៖ ចំនួនមធ្យោបាយដឹកជញ្ជូនតាមប្រភេទនីមួយៗអាចច្រើនជាង ឬស្មើចំនួនគ្រួសារ</p>
<br>
<h6>ចំងាយជាមធ្យមពីចំណុចកណ្តាលភូមិទៅសាលាឃុំ/សង្កាត់ សាលាក្រុង/ស្រុក/ខណ្ឌ័ និងសាលា ខេត្ត/រាជធានី</h6>
<table class="tbl-data table table-bordered" data-bind="foreach: $data.filter( r => r.section() == 16)">
    <tr>
        <td data-bind="text: sort" class="col-num"></td>
        <td data-bind="text: name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.dist')}}</span>
            </div>
        </td>
    </tr>
</table>

<!-- 17 -->
<br>
<h6 class="text-center">ការចិញ្ចឹមសត្វនិងវាវីវប្បកម្ម (បើគ្មានសូមដាក់លខសូន្យ)</h6>
<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.vehicle')}}</th>
        <th class="col-2">{{__('general.num_family')}}</th>
        <th class="col-2">{{__('general.number')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 17))">
    <tr>
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.unit_animal')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>សំគាល់៖ ការរាប់យកចំនួនបរិមាណសត្វចិញ្ចឹម គឺរាប់យកសត្វដែលមាននៅពេលស្រង់ទិន្នន័យតែប៉ុណ្ណោះ</p>
<table>
    <tr>
        <td>១).គោឬក្របី រាប់យកពីកូនគោឬក្របីអាយុ១ខួបឡើងទៅ</td>
        <td>២).ជ្រូក រាប់យកកូនជ្រូកបានចាក់វ៉ាក់សាំងការពាររួច </td>
    </tr>
    <tr>
        <td>៣).មាន់ រាប់យកមាន់មានទម្ងន់០, ៨គីឡូ(៨ខាំ ឡើងទៅ </td>
        <td>៤).ទា រាប់យកពីទាទម្ងន់១គីឡូឡើងទៅ </td>
    </tr>
    <tr>
        <td>៥).ពពែ រាប់យកទាំងអស់ </td>
        <td>៦).ក្រពើ រាប់យកទាំងអស់ </td>
    </tr>
</table>

<br>

<!-- 18-->
<table class="tbl-data table table-bordered">
    <thead>
    <tr class="text-center align-middle">
        <th class="col-num"></th>
        <th>{{__('general.fishery')}}</th>
        <th class="col-2">{{__('ចំនួនគ្រួសារចិញ្ចឹម')}}</th>
        <th class="col-2">{{__('សរុបបរិមាណទទួលផល')}}</th>
    </tr>
    </thead>
    <tbody data-bind="foreach: $root.groupLevel1($data.filter( r => r.section() == 18))">
    <tr>
        <td class="text-center align-middle" data-bind="text: sort"></td>
        <td data-bind="text: label"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('general.has')}}</span>
                <input data-bind="value: $root.getField2($index() ,fields, 'family').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.Family')}}</span>
            </div>
        </td>
        <td>
            <div class="input-group">
                <input data-bind="value: $root.getField2($index() ,fields, 'unit').value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('general.kg')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
