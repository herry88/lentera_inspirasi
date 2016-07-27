<?php $this->load->view('backend/header') ?>
<!-- Main content starts -->
<div class="content">

<?php $this->load->view('backend/sidebar') ?>

        <!-- Main bar -->
    <div class="mainbar">
<?php $this->load->view('backend/page_heading'); ?>
      <!-- Matter -->

      <div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
                <?php echo validation_errors() ?>
              <?php echo form_open('backend/pengguna/tambah', array ('class' => 'form-horizontal')); ?>
                <!-- Registration form starts -->
                <!-- Name -->
                <div class="form-group">
                  <label class="control-label col-lg-3" for="nama">Nama</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>   
                <!-- username -->
                <div class="form-group">
                  <label class="control-label col-lg-3" for="username">Username</label>
                    <div class="col-lg-9">
                      <input type="text" class="form-control" name="username">
                    </div>
                </div>
                <!-- email -->
                <div class="form-group">
                  <label class="control-label col-lg-3" for="email">Email</label>
                    <div class="col-lg-9">
                      <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <!-- Password -->
                <div class="form-group">
                  <label class="control-label col-lg-3" for="password">Password</label>
                  <div class="col-lg-9">
                    <input type="password" class="form-control" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-sm btn-info">Register</button>
                    <button type="reset" class="btn btn-sm btn-default">Reset</button>
                  </div>
                </div>
              <?php echo form_close(); ?>
            </div>
          </div>  
        </div>
      </div>

    <!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->
   <div class="clearfix"></div>

</div>
<!-- Content ends -->
<?php $this->load->view('backend/footer') ?>