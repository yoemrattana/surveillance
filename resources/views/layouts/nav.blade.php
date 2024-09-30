<nav class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
       <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
       <i class="bx bx-menu bx-sm"></i>
       </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
       <ul class="navbar-nav flex-row align-items-center ms-auto">
          <!-- Language -->
          {{-- <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
             <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
             <i class='bx bx-globe bx-sm'></i>
             </a>
             <ul class="dropdown-menu dropdown-menu-end">
                <li>
                   <a class="dropdown-item">
                   <span class="align-middle">Khmer</span>
                   </a>
                </li>
                <li>
                   <a class="dropdown-item">
                   <span class="align-middle">English</span>
                   </a>
                </li>
             </ul>
          </li> --}}
          <!-- /Language -->
          <div class="col-md-6">
            <select class="form-control changeLang">
                <option value="kh" {{ session()->get('locale') == 'kh' ? 'selected' : '' }}>Khmer</option>
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
            </select>
        </div>
          <!-- Quick links  -->
          <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
             <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
             <i class='bx bx-grid-alt bx-sm'></i>
             </a>
             <div class="dropdown-menu dropdown-menu-end py-0">
                <div class="dropdown-menu-header border-bottom">
                   <div class="dropdown-header d-flex align-items-center py-3">
                      <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                      </a>
                   </div>
                </div>
                <div class="dropdown-shortcuts-list scrollable-container">
                   
                   <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                         <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                         <i class="bx bx-user fs-4"></i>
                         </span>
                         <a href="#" class="stretched-link">User App</a>
                         <small class="text-muted mb-0">Manage Users</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                         <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                         <i class="bx bx-check-shield fs-4"></i>
                         </span>
                         <a href="#" class="stretched-link">Role Management</a>
                         <small class="text-muted mb-0">Permission</small>
                      </div>
                   </div>
                   <div class="row row-bordered overflow-visible g-0">
                      <div class="dropdown-shortcuts-item col">
                         <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                         <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                         </span>
                         <a href="#" class="stretched-link">Dashboard</a>
                         <small class="text-muted mb-0">User Profile</small>
                      </div>
                      <div class="dropdown-shortcuts-item col">
                         <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                         <i class="bx bx-cog fs-4"></i>
                         </span>
                         <a href="#" class="stretched-link">Setting</a>
                         <small class="text-muted mb-0">Account Settings</small>
                      </div>
                   </div>
                </div>
             </div>
          </li>
          <!-- Quick links -->    
          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
             <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                   <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                </div>
             </a>
             <ul class="dropdown-menu dropdown-menu-end">
                <li>
                   <a class="dropdown-item" href="pages-account-settings-account.html">
                      <div class="d-flex">
                         <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                               <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                            </div>
                         </div>
                         <div class="flex-grow-1">
                            <span class="fw-medium d-block">{{Auth::user()->name}}</span>
                            <small class="text-muted">{{Auth::user()->username}}</small>
                         </div>
                      </div>
                   </a>
                </li>
                <li>
                   <div class="dropdown-divider"></div>
                </li>
                {{-- <li>
                   <a class="dropdown-item" href="pages-profile-user.html">
                   <i class="bx bx-user me-2"></i>
                   <span class="align-middle">My Profile</span>
                   </a>
                </li> --}}
                <li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                 </form>
                   <a class="dropdown-item" href="{{ route('logout') }}" title="Logout" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   <i class="bx bx-power-off me-2"></i>
                   <span class="align-middle">{{ __('auth.logout')}}</span>
                   </a>
                </li>
             </ul>
          </li>
          <!--/ User -->
       </ul>
    </div>
 </nav>

 <script type="text/javascript">
  
   var url = "{{ route('changeLang') }}";
 
   $(".changeLang").change(function(){
       window.location.href = url + "?lang="+ $(this).val();
   });
 
</script>