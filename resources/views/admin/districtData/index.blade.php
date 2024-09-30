@extends('layouts.master')

@section('content')

<div class="card" data-bind="visible: view() == 'list'">
    <div class="card-body">
        <div class="clearfix">
            <div class="float-start">ស្រុក</div>
            <div class="float-end">
                <button class="btn btn-primary gap-2 float-end mb-2" data-bind="click: showNew">
                    <span class="fa fa-edit"></span>
                    <span>បន្ថែម</span>
                </button>
            </div>
        </div>

        <table class="invoice-list-table table border-top">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ខេត្ត</th>
                    <th>ស្រុក</th>
                    <th>កត់ត្រាដោយ</th>
                    <th class="cell-fit">សកម្មភាព</th>
                </tr>
            </thead>
            <tbody data-bind="foreach: listModel">
                <tr>
                    <td data-bind="text: $index() + 1"></td>
                    <td data-bind="text: $root.getPvName(ds_code)"></td>
                    <td data-bind="text: $root.getDsName(ds_code)"></td>
                    <td data-bind="text: recorded_by"></td>
                    <td>
                        <div class="inline-spacing gap-3">
                            <button type="button" class="btn btn-outline-primary btn-sm  gap-2"
                                data-bind="click: $root.showEdit">
                                <span class="fa fa-edit"></span>
                                <span>កែប្រែ</span>
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm  gap-2"
                                data-bind="click: $root.showDelete">
                                <span class="fa fa-trash"></span>
                                <span>លុប</span>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div data-bind="visible: view() == 'detail'">
    @include('admin.districtData.form')
</div>

{!! latestJs('/assets/ViewModel/DistrictData.js') !!}

@endsection