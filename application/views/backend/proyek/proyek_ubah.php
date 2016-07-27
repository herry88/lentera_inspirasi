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
                  <div class="pull-left">Ubah Post</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                  <?php echo validation_errors() ?>
                  <?php echo form_open_multipart(base_url().'backend/proyek/ubah/'.$baris->id, array ('class' => 'form-horizontal'))?>
                      <!-- judul -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="judul">Judul</label>
                        <div class="col-lg-8"> 
                          <input type="text" class="form-control" name="judul" value="<?php echo $baris->title ?>">
                        </div>
                      </div>   
                      <!-- gambar -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="gambar">Gambar</label>
                        <div class="col-lg-8"> 
                          <input type="file" name="gambar" id="gambar" class="form-control" accept=".png, .jpeg, .jpg, .gif">
                        </div>
                      </div>   
                      <!-- Konten -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Konten</label>
                        <div class="col-lg-8">
                          <textarea class="form-control" id="ckeditor_full" rows="5" name="isi"><?php echo $baris->content ?></textarea>
                        </div>
                      </div>                           
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-6">
                          <button type="submit" class="btn btn-sm btn-success" name="button" value="1">Publish</button>
                          <button type="submit" class="btn btn-sm btn-danger" name="button" value="0">Save Draft</button>
                          <button type="reset" class="btn btn-sm btn-default">Batal</button>
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