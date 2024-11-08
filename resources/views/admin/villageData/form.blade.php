<div class="position-fixed top-0 end-0" style="z-index: 11">
  <div class="toast align-items-center text-white bg-info bg-gradient border-0 hide" role="alert" aria-live="assertive" aria-atomic="true" >
    <div class="toast-body">
      <p data-bind="text: successMessage"></p>
    </div>
  </div>
</div>

<div class="card">
    <div class="card-header text-white bg-primary">
        <h4 class="m-0 text-white">{{__('general.village_form')}}</h4>
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
                    <label class="input-group-text fs-5" for="communeFilter">{{__('general.comm')}}</label>
                    <select class="form-select" id="communeFilter"
                            data-bind="value: cm, 
                                    options: cmList,
                                    optionsValue: 'code',
                                    optionsText: $root.lang() == 'en' ? 'name' : 'namek',
                                    optionsCaption: ''"
                            required>                    
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <label class="input-group-text fs-5" for="villageFilter">{{__('general.vill')}}</label>
                    <select class="form-select" id="villageFilter"
                            data-bind="value: vl, 
                                    options: vlList,
                                    optionsValue: 'code',
                                    optionsText: $root.lang() == 'en' ? 'name' : 'namek',
                                    optionsCaption: ''"
                            required>                    
                    </select>
                </div>
            </div>

        </div>
        <div class="row mt-3 justify-content-center">
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

<br>

<div class="card">
    <div class="card-header">
        <button class="btn btn-primary gap-2 float-end" form="villageForm" data-bind="click: save">
            <span class="fa fa-save"></span>
            {{__('general.save')}}
        </button>
    </div>

    <div class="card-body">
        <form id="villageForm">
            <div class="row">
                <div class="col-auto">
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.recorded_by')}}</span>
                        <input type="text" class="form-control" data-bind="value: recorded_by"  />
                    </div>
                </div>
                <div class="col-auto">
                    <div class="input-group">
                        <span class="input-group-text">{{__('general.phone')}}</span>
                        <input type="number" class="form-control" data-bind="value: phone"  />
                    </div>
                </div>
            </div>            
            <br />
            @include('admin.villageData.base_profile')  
            <br />
            @include('admin.villageData.male_education')
            <br />
            @include('admin.villageData.female_education')
            <br />
            @include('admin.villageData.school_location')
            <br />
            @include('admin.villageData.occupation')
            <br />
            @include('admin.villageData.production')
            <br />
            @include('admin.villageData.store')
            <br />
            @include('admin.villageData.agriculture')
            <br/>
            @include('admin.villageData.agriculture_machinery')
            <br/>
            @include('admin.villageData.truck_transportation')
            <br/>
            @include('admin.villageData.moto_bycicle')
            <br/>
            @include('admin.villageData.boat')  
            <br/>
            @include('admin.villageData.motor_boat')                 
            <br/>
            @include('admin.villageData.distance_village_province')   
            <br/>
            @include('admin.villageData.livestock') 
            <br/>
            @include('admin.villageData.home')
            <br/>
            @include('admin.villageData.health') 
            <br/>
            @include('admin.villageData.water_status')  
            <br/>
            @include('admin.villageData.toilet')   
            <br/>
            @include('admin.villageData.vunerability') 
            <br/> 
            @include('admin.villageData.vunerability_hiv') 
            <br/> 
            @include('admin.villageData.disability') 
            <br/> 
            @include('admin.villageData.natural_resource')   
            <br/> 
            @include('admin.villageData.security')  
            <br/> 
            @include('admin.villageData.violence')  
            <br/> 
            @include('admin.villageData.dead') 
            <br/> 
            @include('admin.villageData.minority')          
        </form>
    </div>
</div>
