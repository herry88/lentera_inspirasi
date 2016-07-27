<?php $this->load->view('admin/header') ?>
<!-- Main content starts -->
<div class="content">

<?php $this->load->view('admin/sidebar') ?>

        <!-- Main bar -->
    <div class="mainbar">
<?php $this->load->view('admin/page_heading'); ?>
      <!-- Matter -->

      <div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <?php echo validation_errors() ?>
              <?php echo form_open('admin_f/pengguna/ubah_profil/'.$baris->username, array ('class' => 'form-horizontal')); ?>
                <!-- Registration form starts -->
                <!-- Name -->
                <div class="form-group">
                  <label class="control-label col-lg-3" for="nama">Nama</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" name="nama" value="<?php echo $baris->nama ?>">
                  </div>
                </div>   
                <!-- username -->
                <div class="form-group">
                  <label class="control-label col-lg-3" for="username">Username</label>
                    <div class="col-lg-9">
                      <input type="text" class="form-control" name="username" value="<?php echo $baris->username ?>" disabled>
                    </div>
                </div>
                <!-- Password -->
                <div class="form-group">
                  <label class="control-label col-lg-3" for="password">Password</label>
                  <div class="col-lg-9">
                    <input type="password" class="form-control" name="password"><span class="label label-warning">*Biarkan kosong jika tidak ingin ganti kata sandi.</span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-9 col-lg-offset-3">
                    <button type="submit" class="btn btn-sm btn-info">Update</button>
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
<?php $this->load->view('admin/footer') ?>