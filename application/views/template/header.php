<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Alain</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">   -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template/'); ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/template/'); ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/template/'); ?>dist/css/adminlte.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">    
  <link href="<?php echo base_url('assets/template/plugins/jquery-ui/jquery-ui.css'); ?>"" rel=" stylesheet" />


  <?php
  // Cargamos de forma dinamica el archivo CSS para esta vista
  $ruta = ($this->router->fetch_method() == 'vista') ? $this->uri->segment(2) : $this->router->fetch_method();
  $CSSFile = 'assets/css/' . $this->router->fetch_class() . '/' . $ruta . '.css';
  if(is_file($CSSFile)){
  echo '<link rel="stylesheet" href="' . base_url() . $CSSFile . '">';
  }
  ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          <input hidden type="text" id="base_url" value="<?php echo base_url(); ?>">
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
        <div class="mt-3 pb-3 mb-3 d-flex" style="margin-left: 20px;">
          <!-- user-panel -->
          <div class="image">
              <img style="width: 30px; margin-right: 10px;" src="<?php echo base_url('assets/template/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <div class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Prueba
              </a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Editar</a>
                <a href="<?php echo base_url(); ?>auth/logout" class="dropdown-item">Cerrar Sesion</a>
              </div>
            </div>
          </div>
        </div>
        <hr style="border-color:white">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- termina link -->
            <li class="nav-header">SISTEMA</li>
            <!-- Termina link -->
            <li class="nav-item has-treeview" style="padding-left: 10px;">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Usuarios
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right"></span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview" style="padding-left: 10px;">
                    <li class="nav-item">
                      <a href="<?php echo base_url('nuevo_usuario'); ?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar usuarios</p>
                      </a>
                    </li>
                  </ul>
                </li>
            <!-- Termina link -->

            <!-- Termina link -->

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1><?= $title; ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Ruta</a></li>
                <li class="breadcrumb-item active">Sistema</li>
              </ol>
            </div>
          </div>
        </div>
      </section>