<!DOCTYPE html> 
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title><?php echo $title ?> | Lentera Inspirasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Stylesheets -->
  <link href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/font-awesome.min.css"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/jquery-ui.css"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/fullcalendar.css"> 
  <!-- Date picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/bootstrap-datetimepicker.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/jquery.cleditor.css"> 
  <!-- Data tables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/jquery.dataTables.css"> 
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/jquery.onoff.css">
  <!-- Main stylesheet -->
  <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="<?php echo base_url() ?>assets/admin/css/widgets.css" rel="stylesheet">   
  
  <script src="<?php echo base_url() ?>assets/admin/js/respond.min.js"></script>
  <!--[if lt IE 9]>
  <script src="<?php echo base_url() ?>assets/admin/js/html5shiv.js"></script>
  <![endif]-->

  
</head>

<body>

<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
  
    <div class="conjtainer">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
		  <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			<span>Menu</span>
		  </button>
		  <!-- Site name for smallar screens -->
		  <?php echo anchor(base_url(), 'Lentera Inspirasi', 'class=navbar-brand'); ?>
		</div>
      
      

      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">         
  
          <!-- Links -->
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown pull-right">            
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-user"></i> <?php echo $nama ?> <b class="caret"></b>              
              </a>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url().'admin_f/pengguna/ubah_profil/'.$username ?>"><i class="fa fa-user"></i> Ubah Profile</a></li>
                <li><a href="<?php echo base_url(); ?>admin/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </li>
          </ul>

      </nav>

    </div>
  </div>
  <header></header>