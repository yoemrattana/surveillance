<div class="card">
    <div class="card-header">
        <h5>{{__('general.vill')}}</h5>
        <button class="btn btn-primary gap-2 float-end mb-2" data-bind="click: () => view('list')"><span
                class="fa fa-arrow-left"></span>{{__('general.back')}}</button>
    </div>
    <div class="card-body ">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="select6Basic" class="form-label">{{__('general.year')}}</label>
                <select id="select6Basic" class="select2 form-select form-select-lg" data-allow-clear="true">
                    <option value="AK">2024</option>
                    <option value="HI">2023</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <label for="select2Basic" class="form-label">{{__('general.prov')}}</label>
                <select id="select2Basic" class="select2 form-select form-select-lg" data-allow-clear="true">
                    <option value="AK">Banteay Mean Chey</option>
                    <option value="HI">Siem Reap</option>
                </select>
            </div>
            <div class="col-md-3 mb-4">
                <label for="select3Basic" class="form-label">{{__('general.dist')}}</label>
                <select id="select3Basic" class="select2 form-select form-select-lg" data-allow-clear="true">
                    <option value="AK">Dist 1</option>
                    <option value="HI">Dist 2</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="select4Basic" class="form-label">{{__('general.comm')}}</label>
                <select id="select4Basic" class="select2 form-select form-select-lg" data-allow-clear="true">
                    <option value="AK">Comm 1</option>
                    <option value="HI">Comm 2</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label for="select5Basic" class="form-label">{{__('general.vill')}}</label>
                <select id="select5Basic" class="select2 form-select form-select-lg" data-allow-clear="true">
                    <option value="AK">Vill 1</option>
                    <option value="HI">Vill 2</option>
                </select>
            </div>

        </div>
    </div>
</div>

<br>

<div class="card">
    <div class="card-body table-responsive" data-bind="with:detailModel">
        <table class="table table-bordered">
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
        @include('admin.villageData.school')<br>
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
