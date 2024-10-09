<div class="position-fixed top-0 end-0" style="z-index: 11">
  <div class="toast align-items-center text-white bg-info bg-gradient border-0 hide" 
                role="alert" aria-live="assertive" aria-atomic="true" >
    <div class="toast-body">
      <p data-bind="text: successMessage"></p>
    </div>
  </div>
</div>

<div class="card">
    <div class="card-header text-white bg-primary">
        <span class="fs-3">{{__('general.vill')}}</span>

        <!-- <button class="btn btn-primary gap-2 float-end mb-2" data-bind="click: () => view('list')"><span
                class="fa fa-arrow-left"></span>{{__('general.back')}}</button> -->
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
    <div class="card-body table-responsive" data-bind="with:detailModel">
        <form id="villageForm">
            <table class="table table-bordered border border-1 mt-3">
                <tbody data-bind="foreach: $data.filter(x => x.section() == 1 )">
                <tr>
                    <td data-bind="text: $index() + 1" class="col-num"></td>
                    <td data-bind="text: name_attribute"></td>
                    <td>
                        <div class="row">
                            <label class="col-sm-2 col-form-label" for="">{{__('village.has')}}</label>
                            <div class="col-sm-6"><input data-bind="value: value" type="number" min="0" class="form-control"></div>
                            <label class="col-sm-3 col-form-label" for="">{{__('village.family')}}</label>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>

            <br>

            @include('admin.villageData.male_education')
            <br>
            @include('admin.villageData.female_education')
            <br>
            @include('admin.villageData.school')
            <br>
            @include('admin.villageData.occupation')
            <br>
            @include('admin.villageData.production')
            <br>
            @include('admin.villageData.store')
            <br>
            @include('admin.villageData.agriculture')
            <br>
            @include('admin.villageData.agricultureMachinery')
            <br>
            @include('admin.villageData.home')
            <br>
            @include('admin.villageData.health')
            <br>
            @include('admin.villageData.vunerability')
            <br>
            @include('admin.villageData.naturalResource')
            <br>
            @include('admin.villageData.security')
            <br>
            @include('admin.villageData.dead')
            <br>
            @include('admin.villageData.minority')
        </form>
    </div>
</div>
