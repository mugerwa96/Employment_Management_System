 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('AdminPanel/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">LARAVEL SYSTEM </span>
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
                 <a href="#" class="d-block">Alexander Pierce</a>
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
                             Users <span class="badge badge-success mx-2">12</span>
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/mailbox/mailbox.html" class="nav-link">
                                 <i class="fas fa-hand-point-right nav-icon"></i>
                                 <p>Inbox</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/mailbox/compose.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Compose</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/mailbox/read-mail.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Read</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="pages/gallery.html" class="nav-link">
                         <i class="nav-icon far fa-image"></i>
                         <p>
                             Gallery
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="pages/kanban.html" class="nav-link">
                         <i class="nav-icon fas fa-columns"></i>
                         <p>
                             Kanban Board
                         </p>
                     </a>
                 </li>
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
                         <li class="nav-item">
                           
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
