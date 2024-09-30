@extends('layouts.master')

@section('content')

<div class="card mb-4">
     <div class="card">
         <div class="card-header">
            <h5 class="float-start">{{__('auth.user')}}</h5>
            <button class="btn btn-primary gap-2 float-end mb-2" data-bind="click: $root.create"><span class="fa fa-edit"></span> {{__('general.add')}}</button>
         </div>
        <div class="card-datatable table-responsive">
           <table class="invoice-list-table table border-top">
              <thead>
                 <tr>
                    <th>#</th>
                    <th>{{ __('auth.name') }}</th>
                    <th>{{ __('auth.user') }}</th>
                    <th>{{ __('auth.role') }}</th>
                    <th class="cell-fit">{{ __('general.action') }}</th>
                 </tr>
              </thead>
              <tbody data-bind="foreach:listModel">
                <tr class="odd">
                   <td data-bind="text: $index()+1"></td>
                   <td data-bind="text: name"></td>
                   <td data-bind="text: username"></td>
                  <!-- ko foreach: role-->
                   <td> <span class="badge  bg-label-primary me-4" data-bind="text: display_name"></span> </td>
                  <!-- /ko -->
                  <td>
                     <div class="inline-spacing gap-3">
                        <button type="button" class="btn btn-outline-primary btn-sm  gap-2" data-bind="click: $root.edit">
                            <span class="fa fa-edit"></span>Edit
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-sm  gap-2" data-bind="click: $root.delete">
                            <span class="fa fa-trash"></span>Delete
                        </button>
                    </div>
                  </td>
                </tr>
             </tbody>
           </table>
        </div>
     </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalUser" tabindex="-1" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel1">{{__('general.add')}}</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body" data-bind="with: user">
            <div class="row">
               <div class="col mb-3">
                  <label class="form-label">{{__('auth.name')}}</label>
                  <input type="text"  class="form-control" data-bind="value:name">
               </div>
            </div>
            <div class="row">
               <div class="col mb-3">
                  <label class="form-label">{{__('auth.username')}}</label>
                  <input type="text"  class="form-control" data-bind="value:username">
               </div>
            </div>
            <div class="row">
               <div class="col mb-3">
                  <label class="form-label">{{__('auth.role')}}</label>
                  <select class="form-control" data-bind="options: $root.listRole, optionsText: 'name', optionsValue: 'id', value: role, optionCaption: 'Select role...'">

                  </select>
               </div>
            </div>
            <div class="row">
               <div class="col mb-3">
                  <label class="form-label">{{__('auth.password')}}</label>
                  <input type="text"  class="form-control" data-bind="value:password">
                  <p class="message-error" data-bind="validationMessage: password"></p>
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

<script src="{{ asset('/assets/ViewModel/User.js') }}"></script>
@endsection
