@extends('layouts.master')

@section('content')

<div class="card mb-4">
     <div class="card"> 
        <div class="card-datatable table-responsive">
         <div class="card-header">
            <h5 class="float-start">{{__('auth.role')}}</h5>
            <button class="btn btn-primary gap-2 float-end mb-2" data-bind="click: $root.createRole"><span class="fa fa-edit"></span>{{__('general.add')}}</button>
         </div>
           <table class="invoice-list-table table border-top" data-bind="visible: view() == 'list'">
              <thead>
                 <tr>
                    <th>#</th>
                    <th>{{__('auth.role')}}</th>
                    <th class="cell-fit">{{__('general.action')}}</th>
                 </tr>
              </thead>
              <tbody data-bind="foreach: listModel">
                <tr class="odd">
                   <td data-bind="text: $index()+1"></td>
                   <td data-bind="text: name"></td>
                   <td>
                    <div class="inline-spacing gap-3">
                        <button type="button" class="btn btn-outline-info btn-sm  gap-2" data-bind="click: $root.showPermission">
                            <span class="fa fa-key"></span>{{__('auth.permission')}}
                        </button>
                        <button type="button" class="btn btn-outline-primary btn-sm  gap-2" data-bind="click: $root.edit">
                            <span class="fa fa-edit"></span>{{__('general.edit')}}
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-sm  gap-2" data-bind="click: $root.delete">
                            <span class="fa fa-trash"></span>{{__('general.delete')}}
                        </button>
                    </div>
                   </td>
                </tr>
             </tbody>
           </table>

           <table class="invoice-list-table table border-top" data-bind="visible: view() == 'module'">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Module Name</th>
                  <th class="text-nowrap text-center">View</th>
                  <th class="text-nowrap text-center">Add</th>
                  <th class="text-nowrap text-center">Update</th>
                  <th class="text-nowrap text-center">Delete</th>
               </tr>
            </thead>
            <tbody data-bind="foreach: listModule">
              <tr class="odd">
                  <td data-bind="text: $index()+1"></td>
                  <td data-bind="text: display_name"></td>
                  <!-- ko foreach: permissions -->
                  <td> 
                     <div class="form-check d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="defaultCheck1" data-bind="checked: $root.hasPermission($data), click:$root.changePermission"/>
                     </div>
                  </td>
                 <!-- /ko -->
                 <!-- ko if: permissions().length < 4 -->
                  <td data-bind="attr: {colspan: 4- permissions().length}"></td>
                 <!-- /ko -->
              </tr>
           </tbody>
         </table>               
        </div>     
     </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalRole" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel1">{{__('general.Add')}}</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body" data-bind="with: role">
            <div class="row">
               <div class="col mb-3">
                  <label class="form-label">{{__('auth.name')}}</label>
                  <input type="text"  class="form-control" data-bind="value:name">
               </div>
            </div>
            <div class="row">
               <div class="col mb-3">
                  <label class="form-label">{{__('auth.display_name')}}</label>
                  <input type="text"  class="form-control" data-bind="value:display_name">
               </div>
            </div>
            <div class="row">
               <div class="col mb-3">
                  <label class="form-label">{{__('auth.description')}}</label>
                  <input type="text"  class="form-control" data-bind="value:description">
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-bind="click: $root.save">Save changes</button>
         </div>
      </div>
   </div>
</div>

<script src="{{ asset('/assets/ViewModel/Role.js') }}"></script>
@endsection

