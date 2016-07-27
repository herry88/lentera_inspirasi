<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title><?php echo $title ?> - Lentera Inspirasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Stylesheets -->
  <link href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/font-awesome.min.css">
  <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
  
  <script src="<?php echo base_url() ?>assets/admin/js/respond.min.js"></script>
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<!-- Form area -->
<div class="admin-form">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <!-- Widget starts -->
            <div class="widget worange">
              <!-- Widget head -->
              <div class="widget-head">
                <i class="fa fa-lock"></i> Login 
              </div>

              <div class="widget-content">
                <div class="padd">
                  <!-- Login form -->
                  <?php echo validation_errors(); ?>
                  <?php echo form_open('login/proses', array('class' => 'form-horizontal')) ?>
                    <!-- Username -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputUsername">Username</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                      </div>
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                      <label class="control-label col-lg-3" for="inputPassword">Password</label>
                      <div class="col-lg-9">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                      </div>
                    </div>
                    <div class="col-lg-9 col-lg-offset-3">
                      <button type="submit" class="btn btn-info btn-sm">Sign in</button>
                      <button type="reset" class="btn btn-default btn-sm">Reset</button>
						        </div>
                    <br />
                  <?php echo form_close() ?>
				  
				</div>
                </div>
            </div>  
      </div>
    </div>
  </div> 
</div>
	
		

<!-- JS -->
<script src="<?php echo base_url() ?>assets/admin/js/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>