@extends('layouts.master')

@section('content')

<div class="card mb-4" data-bind="visible: view() == 'list'">
     <div class="card"> 
        <div class="card-datatable table-responsive">
         <div class="card-header">
            <h5 class="float-start">{{__('general.vill')}}</h5>
            <button class="btn btn-primary gap-2 float-end mb-2" data-bind="click: showNew">
               <span class="fa fa-edit"></span>
               {{__('general.add')}}
            </button>
         </div>
           <table class="invoice-list-table table border-top" >
              <thead>
                 <tr>
                    <th>#</th>
                    <th>{{__('general.prov')}}</th>
                    <th>{{__('general.dist')}}</th>
                    <th>{{__('general.comm')}}</th>
                    <th>{{__('general.vill')}}</th>

                    <th class="cell-fit">{{__('general.action')}}</th>
                 </tr>
              </thead>
              <tbody data-bind="foreach: listModel">
                <tr class="odd">
                <td data-bind="text: $index() + 1"></td>
                  <td data-bind="text: $root.getPvName(ds_code)"></td>
                  <td data-bind="text: $root.getDsName(ds_code)"></td>
                  <td data-bind="text: $root.getDsName(cm_code)"></td>
                  <td data-bind="text: $root.getVlName(vl_code)"></td>
                   <td>
                    <div class="inline-spacing gap-3">
                        <button type="button" class="btn btn-outline-primary btn-sm  gap-2" data-bind="click: $root.showEdit">
                            <span class="fa fa-edit"></span>
                            {{__('general.edit')}}
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-sm  gap-2" data-bind="click: $root.showDelete">
                            <span class="fa fa-trash"></span>
                            {{__('general.delete')}}
                        </button>
                    </div>
                   </td>
                </tr>
             </tbody>
           </table>
        </div>     
     </div> <!-- /end cart -->
</div>

<div data-bind="visible: view() == 'detail'">
   @include('admin.villageData.form')
</div>

{!! latestJs('/assets/ViewModel/VillageData.js') !!}

@endsection