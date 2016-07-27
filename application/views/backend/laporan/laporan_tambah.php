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
            <div class="col-md-12">

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Tambah Laporan</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                  <?php echo validation_errors() ?>
                  <?php echo form_open_multipart(base_url().'backend/laporan/tambah', array ('class' => 'form-horizontal'))?>
                      <!-- bulan -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="bulan">Bulan</label>
                        <div class="col-lg-8"> 
                          <input type="text" class="form-control" name="bulan">
                        </div>
                      </div>   
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="deskripsi">Deskripsi</label>
                        <div class="col-lg-8"> 
                          <textarea type="text" class="form-control" name="deskripsi"></textarea>
                        </div>
                      </div>   
                      <!-- link -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="link">Excel FIle</label>
                        <div class="col-lg-8"> 
                          <input type="file" name="link" id="link" class="form-control">
                        </div>
                      </div>                    
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-6">
                          <button type="submit" class="btn btn-sm btn-success" name="button" value="1">Publish</button>
                          <button type="reset" class="btn btn-sm btn-default">Reset</button>
                        </div>
                      </div>
                    <?php echo form_close(); ?>
                  </div>
                </div>
              </div>
            </div>   
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