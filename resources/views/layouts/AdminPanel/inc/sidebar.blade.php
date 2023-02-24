 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('AdminPanel/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">EMP SYSTEM </span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('AdminPanel/dist/img/avatar.png') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ Str::upper(Auth::user()->username) }}</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">


                 </li>
                 <li class="nav-header fw-bold text-center mx-auto text-white">DASH BOARD</li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-envelope"></i>
                         <p>
                             Employee Mangt <span class="badge badge-success mx-2">12</span>
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                   
                 </li>

                
                 {{-- system management --}}
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-cog"></i>
                         <p>
                             System Management
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('country.index') }}" class="nav-link">
                                 <i class="fas fa-user nav-icon mx-2"></i>
                                 <p>Country</p>
                             </a>
                         </li>
                         <li class="nav-item fw-bold">
                             <a href="" class="nav-link">
                                 <i class="fas fa-user nav-icon mx-2"></i>
                                 <p>State</p>
                             </a>
                         </li>
                         <li class="nav-item fw-bold">
                             <a href="" class="nav-link">
                                 <i class="fas fa-user nav-icon mx-2"></i>
                                 <p>Department</p>
                             </a>
                         </li>
                         <li class="nav-item fw-bold">
                             <a href="" class="nav-link">
                                 <i class="fas fa-user nav-icon mx-2"></i>
                                 <p>City</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 {{-- !system management --}}

                 {{-- User management --}}
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-user"></i>
                         <p>
                             User managment
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('users.index') }}" class="nav-link">
                                 <i class="fas fa-users nav-icon mx-2"></i>
                                 <p>Users</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="fas fa-users nav-icon mx-2"></i>
                                 <p>Role</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                <i class="fa-regular fa-triangle nav-icon"></i>
                                 <p>Permission</p>
                             </a>
                         </li>
                       


                     </ul>
                 </li>
                 {{-- settings --}}
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-cogs"></i>
                         <p>
                             Settings
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('profile') }}" class="nav-link">
                                 <i class="fas fa-user nav-icon mx-2"></i>
                                 <p>My profile</p>
                             </a>
                         </li>
                         <li class="nav-item fw-bold">

                             <a class="nav-link text-danger fw-bold " href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                 <i class="fas fa-power-off nav-icon text-danger fw-bold mx-2"></i>{{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                         </li>



                     </ul>
                 </li>


         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
