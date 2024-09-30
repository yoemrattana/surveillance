<h5>ទីតាំងសាលារៀននានាធៀបនឹងចំនុចកណ្តាលភូមិ</h5>
<table class="tbl-data table table-bordered">
    <tbody data-bind="foreach: $data.filter(x =>x.section() == 4)">
    <tr>
        <td data-bind="text: sort" class="col-num"></td>
        <td data-bind="text: name_attribute"></td>
        <td>
            <div class="input-group">
                <span class="input-group-text">{{__('village.distance')}}</span>
                <input data-bind="value: value" type="number" class="form-control" placeholder="......" >
                <span class="input-group-text">{{__('village.km')}}</span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<br>
<p>ប្រសិនបើទីតាំងសាលារៀន(បឋមសិក្សា អនុវិទ្យាល័យ វិទ្យាល័យ)មាននៅក្នុងភូមិគឺកត់យកចំងាយសូន្យគ.ម ។ ចំពោះសាលា បឋមសិក្សានិងអនុវិទ្យាល័យ ឬអនុវិទ្យាល័យនិងវិទ្យាល័យនៅជាមួយគ្នា គឺមានចំងាយដូចគ្នា ។
</p>
