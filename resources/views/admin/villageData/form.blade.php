<div class="card">
    <div class="card-header text-white bg-primary">
        <h4>{{__('general.vill')}}</h4>
        <!-- <button class="btn btn-primary gap-2 float-end mb-2" data-bind="click: () => view('list')"><span
                class="fa fa-arrow-left"></span>{{__('general.back')}}</button> -->
    </div>
    <div class="card-body ">
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="input-group">
                    <label class="input-group-text fs-5" for="provinceFilter">{{__('general.prov')}}</label>
                    <select class="form-select" id="provinceFilter">
                        <option selected></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <label class="input-group-text fs-5" for="districtFilter">{{__('general.dist')}}</label>
                    <select id="districtFilter" class="form-select">
                        <option value="AK">Dist 1</option>
                        <option value="HI">Dist 2</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <label class="input-group-text fs-5" for="communeFilter">{{__('general.comm')}}</label>
                    <select id="communeFilter" class="form-select">
                        <option value="AK">Comm 1</option>
                        <option value="HI">Comm 2</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <label class="input-group-text fs-5" for="villageFilter">{{__('general.vill')}}</label>
                    <select id="villageFilter" class="form-select" data-allow-clear="true">
                        <option value="AK">Vill 1</option>
                        <option value="HI">Vill 2</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-md-3">
                <div class="input-group">
                    <label class="input-group-text fs-5" for="yearFilter">{{__('general.year')}}</label>
                    <select id="yearFilter" class="form-select" data-allow-clear="true">
                        <option value="AK">2024</option>
                        <option value="HI">2023</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="card">
    <div class="card-body table-responsive" data-bind="with:detailModel">
        <table class="table table-bordered border border-1">
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

    </div>
</div>
