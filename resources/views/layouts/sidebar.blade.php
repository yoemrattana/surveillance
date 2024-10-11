<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo ">
       <a href="index.html" class="app-brand-link">
          <span class="app-brand-logo demo">
             <img width="100" src="../../assets/img/logo/logo2.jpg" alt="">
          </span>
{{--          <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span>--}}
       </a>
       <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
       <i class="bx bx-chevron-left bx-sm align-middle"></i>
       </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
       <!-- Apps & Pages -->
       <li class="menu-header small text-uppercase">
          <span class="menu-header-text" data-i18n="Apps & Pages">Wellcome</span>
       </li>
       <li class="menu-item {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
          <a href="{{ route('admin.dashboard') }}" class="menu-link">
             <i class="menu-icon tf-icons bx bx-home-circle"></i>
             <div class="text-truncate" data-i18n="Email">Dashboard</div>
          </a>
       </li>
       <li class="menu-item {{ request()->is('admin/commune-data') ? 'active' : '' }}">
          <a href="{{ route('admin.commune-data') }}" class="menu-link">
             <i class="menu-icon tf-icons bx bx-chat"></i>
             <div class="text-truncate" data-i18n="Chat">Commune</div>
          </a>
       </li>
       <li class="menu-item {{ request()->is('admin/district-data') ? 'active' : '' }}">
          <a href="{{ route('admin.district-data') }}" class="menu-link">
             <i class="menu-icon tf-icons bx bx-chat"></i>
             <div class="text-truncate" data-i18n="Chat">District</div>
          </a>
       </li>
       <li class="menu-item {{ request()->is('admin/village-data') ? 'active' : '' }}">
          <a href="{{ route('admin.village-data') }}" class="menu-link">
             <i class="menu-icon tf-icons bx bx-chat"></i>
             <div class="text-truncate" data-i18n="Chat">Village</div>
          </a>
       </li>
      
       {{-- <li class="menu-item">
          <a href="app-calendar.html" class="menu-link">
             <i class="menu-icon tf-icons bx bx-calendar"></i>
             <div class="text-truncate" data-i18n="Calendar">Commune</div>
          </a>
       </li>
       <li class="menu-item">
          <a href="app-kanban.html" class="menu-link">
             <i class="menu-icon tf-icons bx bx-grid"></i>
             <div class="text-truncate" data-i18n="Kanban">District</div>
          </a>
       </li> --}}

      @ability('administrator', 'users-read')
       <li class="menu-item {{ request()->is('admin/setting*') ? 'active open' : '' }}">
         <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bx-check-shield'></i>
            <div class="text-truncate" data-i18n="Roles & Permissions">Setting</div>
         </a>
         <ul class="menu-sub">
            <li class="menu-item {{ request()->is('admin/setting/user') ? 'active' : '' }}">
               <a href="{{ route('admin.setting.user') }}" class="menu-link">
                  <div class="text-truncate" data-i18n="Roles">Users</div>
               </a>
            </li>
            <li class="menu-item {{ request()->is('admin/setting/role') ? 'active' : '' }}">
               <a href="{{ route('admin.role') }}" class="menu-link">
                  <div class="text-truncate" data-i18n="Roles">Roles</div>
               </a>
            </li>

         </ul>
      </li>
      @endability
    </ul>
 </aside>
