<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            
            
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="nav-link">
            <div class="d-sm-none d-lg-inline-block">Halo Admin <?php echo $this->session->userdata('nama') ?>!</div>
            <!--<div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>-->
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Game Console's Rent</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">GCR</a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="nav-link" href="<?php echo base_url('admin/dashboard')?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('admin/data_game_console')?>"><i class="fas fa-gamepad"></i> <span>Data Game Console</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('admin/data_type')?>"><i class="fas fa-grip-horizontal"></i> <span>Data Type</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('admin/data_customer')?>"><i class="fas fa-users"></i> <span>Data User</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('admin/data_transaksi')?>"><i class="fas fa-random"></i> <span>Transaksi</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('admin/laporan')?>"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('auth/ganti_password')?>"><i class="fas fa-lock"></i> <span>Change Password</span></a></li>
              <li><a class="nav-link" href="<?php echo base_url('auth/logout')?>"><i class="fas fa-sign-out-alt text-danger"></i> <span class="text-danger">Logout</span></a></li>
            </ul>

        </aside>
      </div>