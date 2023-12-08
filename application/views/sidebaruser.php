 <!-- Sidebar -->
 <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon">
             <i class="fa fa-hammer"></i>
         </div>
         <div class="sidebar-brand-text mx-3">TB Barokah</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="<?php echo base_url('welcome') ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Kategori
     </div>

     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url('kategori/peralatan') ?>">
             <i class="fas fa-fw fa-wrench"></i>
             <span>Peralatan</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?php echo base_url('kategori/bahan') ?>">
             <i class="fas fa-fw fa-list"></i>
             <span>Bahan - Bahan </span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->