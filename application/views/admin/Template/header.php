  <?php
          if ($this->session->userdata('login')) {
            $data = $this->session->userdata('login');
            //print_r($data);
          }
          else
          {
            redirect('admin');
          }
        ?> <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin');?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin');?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin');?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin'); ?>/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin');?>/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin');?>/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin');?>/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin');?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin');?>/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Admin');?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" id="main">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>admin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>C</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Roof</b>Care</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $data['profile_picture'];?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $data['user_name'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $data['profile_picture'];?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $data['user_name'];?> - <?php echo $data['role'];?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url();?>Admin/AdminController/UserProfile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url();?>/Admin/LoginController/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $data['profile_picture'];?>" class="img-circle" alt="User Image">
        </div>
        
        <div class="pull-left info">
          <p><?php echo $data['user_name'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
      <!--   <li class="active treeview">
          <a href="#">
            <i class="fa fa-shopping-bag"></i> <span>Add Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="active"><a href="<?php //echo base_url();?>Admin/ProductsController/allProducts"><i class="fa fa-circle-o"></i> Products</a></li>
            <li><a href="<?php //echo base_url();?>Admin/ProductsController"><i class="fa fa-circle-o"></i> Add New</a></li>
            <li><a href="<?php //echo base_url();?>Admin/ProductsController/addcategories"><i class="fa fa-circle-o"></i> Categories</a></li>
          </ul>
        </li> -->

        
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php //echo base_url();?>Admin/AdminController/user_get_function"><i class="fa fa-circle-o"></i>All Users</a></li>
            <li><a href="<?php //echo base_url();?>/Admin/RegisterController/registerform"><i class="fa fa-circle-o"></i>Add New</a></li>
            
          </ul>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Page</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url();?>Admin/AddPagesController/allpages">
                <i class="fa fa-circle-o"></i>All Pages
              </a>
            </li>
            <li>
              <a href="<?php echo base_url();?>Admin/AddPagesController/addpages">
                <i class="fa fa-circle-o"></i>Add New
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url();?>Admin/LogoController">
            <i class="fa fa-cogs"></i> <span>Settings</span>
          </a>
        </li>
        <!-- <li>
          <a href="">
            <i class="fa fa-calendar"></i> <span>Menus</span>
          </a>
        </li> -->
         <li>
          <a href="<?php echo base_url();?>Admin/SliderController/sliderpage">
            <i class="fa fa-calendar"></i> <span>Slider Setting</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>Admin/AdminController/UserProfile">
            <i class="fa fa-circle-o"></i> <span>Your Profile</span>
          </a>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  