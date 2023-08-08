 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{ route('home') }}" class="brand-link">
         <img src="{{ asset('frontend/assets/img/QT.png') }}" alt="Quicktick Logo" class="brand-image" style="opacity: .8">
         <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel d-flex mb-3 mt-3 pb-3">
             <div class="image">
                 <img src="{{ asset('admin/dist/img/man.png') }}" class="img-circle elevation-2 bg-white"
                     alt="User Image">
             </div>
             <div class="info">
                 <span class="d-block">Welcome, {{ auth()->user()->name }}!</span>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                     aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item">
                     <a href="{{ url('/dashboard') }}"
                         class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-scroll text-teal"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-ticket-alt text-primary"></i>
                         <p>
                             Ticket
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ url('/ticket/belum') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Belum Verifikasi
                                     <span class="badge badge-info right">6</span>
                                 </p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ url('/ticket/sudah') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Sudah Verifikasi</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 @role('Admin')
                     <li class="nav-header">TRANSPORTASI</li>
                     <li class="nav-item">
                         <a href="{{ route('company.index') }}"
                             class="nav-link {{ request()->routeIs('company.*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-building text-info"></i>
                             <p>
                                 Perusahaan
                             </p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="{{ route('bus.index') }}"
                             class="nav-link {{ request()->routeIs('bus.*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-bus-alt text-orange"></i>
                             <p>
                                 Bis
                             </p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="{{ url('/rute') }}" class="nav-link {{ request()->routeIs('rute') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-road text-secondary"></i>
                             <p>
                                 Rute
                             </p>
                         </a>
                     </li>
                     <li class="nav-header">ADMIN</li>
                     <li class="nav-item">
                         <a href="{{ url('/petugas') }}"
                             class="nav-link {{ request()->routeIs('petugas.*') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-id-card-alt text-danger"></i>
                             <p>
                                 Petugas
                             </p>
                         </a>
                     </li>
                 @endrole
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
