<h4 class="fw-bold text-primary">{{__('district.4_vocational_training')}}</h4>
<table class="table table-bordered border border-1">
    <thead class="text-center align-middle table-primary">
        <tr>
            <th rowspan="2"></th>
            <th rowspan="2">{{__('district.sector')}}</th>
            <th colspan="2">{{__('district.training_by_specialists')}}</th>
            <th colspan="2">{{__('district.training_by_ngo_or_private')}}</th>
        </tr>
        <tr>
            <th>{{__('district.total')}}</th>
            <th>{{__('district.female')}}</th>
            <th>{{__('district.total')}}</th>
            <th>{{__('district.female')}}</th>
        </tr>
    </thead>
    <tbody>
        <!-- ko foreach: new Array(24,25,26,27,28) -->
        <tr>
            <!-- ko with: $parent.getQuestionByNo($parent.district_vocational_training(), $data) -->
            <td data-bind="text: no()"></td>
            <td data-bind="text: question()"></td>

            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.people')}}</span>
                </div>
            </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_vocational_training(), $data + ".f") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.people')}}</span>
                </div>
            </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_vocational_training(), $data + ".a") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.people')}}</span>
                </div>
            </td>
            <!-- /ko -->
            <!-- ko with: $parent.getQuestionByNo($parent.district_vocational_training(), $data + ".a.f") -->
            <td>
                <div class="input-group">
                    <input type="number" class="form-control" data-bind="value: value" required />
                    <span class="input-group-text">{{__('district.people')}}</span>
                </div>
            </td>
            
            <!-- /ko -->
        </tr>
        <!-- /ko -->
    </tbody>
</table>
<div class="mt-2" data-bind="visible: lang() == 'kh'">
    សំគាល់៖ ការបណ្តុះបណ្តាលវិជ្ជាជីវៈសំដៅទៅលើការបណ្តុះបណ្តាលទាំងឡាយណា ដែលនៅពេលបញ្ចប់វគ្គ
    សិក្ខាកាមដែលបានចូលរួមអាចយកមុខវិជ្ជានោះទៅប្រកបជាមុខរបរទទួលទានបាន ដូចជា៖ បណ្តុះបណ្តាលកាត់ដេរ ត្បាញហូល
    ផាមួង ធ្វើម្ហូប ការបណ្តុះផ្សិត ជាងជួសជុលម៉ាស៊ីន ម៉ូតូ អគ្គីសនី មគ្គុទេសទេសចរណ៍ ….។ល។
</div>
<div class="mt-2" data-bind="visible: lang() == 'en'">
    Note: Vocational training refers to any training that at the end of the course
    Participants can take the subject to eat, such as: Training, tailoring, weaving.
    Palm, cooking, mushroom growing, repairing electric motors, tour guides, etc.
</div>