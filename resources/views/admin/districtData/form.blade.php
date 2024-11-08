<style>
    #myform input {
        text-align: center;
    }
</style>
<div class="position-fixed top-0 end-0" style="z-index: 11">
  <div class="toast align-items-center text-white bg-info bg-gradient border-0 hide" role="alert" aria-live="assertive" aria-atomic="true" >
    <div class="toast-body">
      <p data-bind="text: successMessage"></p>
    </div>
  </div>
</div>

<div class="card">
    <div class="card-header text-white bg-primary">
        <h4 class="m-0 text-white">{{__('general.district_form')}}</h4>
    </div>
    <div class="card-body ">
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="input-group">
                    <label class="input-group-text fs-5" for="provinceFilter">{{__('general.prov')}}</label>
                    <select class="form-select" id="provinceFilter"
                            data-bind="value: pv, 
                                    options: pvList,
                                    optionsValue: 'code',
                                    optionsText: $root.lang() == 'en' ? 'name' : 'namek',
                                    optionsCaption: ''"
                            required>                    
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <label class="input-group-text fs-5" for="districtFilter">{{__('general.dist')}}</label>
                    <select class="form-select" id="districtFilter"
                            data-bind="value: ds, 
                                    options: dsList,
                                    optionsValue: 'code',
                                    optionsText: $root.lang() == 'en' ? 'name' : 'namek',
                                    optionsCaption: ''"
                            required>                    
                    </select>
                </div>
            </div>

            <div class="col-md-3">
                <div class="input-group">
                    <label class="input-group-text fs-5" for="yearFilter">{{__('general.year')}}</label>
                    <select id="yearFilter" class="form-select" data-allow-clear="true" data-bind="value: year">
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                    </select>
                </div>
            </div>
        </div>
       
    </div>
</div>
<br/>
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary gap-2 float-end" form="districtForm" data-bind="click: save">
            <span class="fa fa-save"></span>
            {{__('general.save')}}
        </button>
    </div>
    <div class="card-body">
        <form id="districtForm">
            <div class="row">
                <div class="col-auto">
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.recorded_by')}}</span>
                        <input type="text" class="form-control" data-bind="value: recorded_by"  />
                    </div>
                </div>
                <div class="col-auto">
                    <div class="input-group">
                        <span class="input-group-text">{{__('district.phone_number')}}</span>
                        <input type="number" class="form-control" data-bind="value: phone"  />
                    </div>
                </div>
            </div>


            <div class="mt-3 fs-5" data-bind="visible: lang() == 'kh'">
                ដោយទិន្នន័យមួយចំនួនមានការពាក់ព័ន្ធជាមួយឃុំជាច្រើន ក្នុងស្រុក នោះបើសិនជាអោយឃុំនីមួយៗស្រង់ទិន្នន័យទាំងនោះ
                គឺនឹងមានភាពស្ទួន ហេតុនេះតម្រូវឱ្យមានការកត់ត្រាស្ថិតិទាំងនោះនៅ ថ្នាក់ស្រុកវិញ។ ទិន្នន័យទាំងនោះមាន៖
            </div>
            <div class="mt-3 fs-5" data-bind="visible: lang() == 'en'">
                
                Since some of the data is relevant to many communes in the district, if each commune has to extract that
                data
                There will be duplication, so it is necessary to record those statistics at the district level. Those
                data include:
            </div>
            
            <br />
            @include('admin.districtData.admin_composition')
            <br />
            @include('admin.districtData.framework_officers')
            <br />
            @include('admin.districtData.support_work')
            <br />
            @include('admin.districtData.vocational_training')
            <br />
            @include('admin.districtData.tax_office')
            <br />
            @include('admin.districtData.national_and_international_NGOs')
            <br />
            @include('admin.districtData.health_work')
            <br />
            @include('admin.districtData.education')
        </form>
    </div>
</div>