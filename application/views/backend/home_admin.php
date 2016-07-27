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
                  <div class="pull-left">Data Donasi</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                  <div class="widget-content">
                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Telepon</th>
                          <th>Jumlah</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        foreach ($baris as $row) :
                        $no++;
                          ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $row->name ?></td>
                          <td><?php echo $row->email ?></td>
                          <td><?php echo $row->phone ?></td>                          
                          <td><?php echo $row->amount ?></td>
                          <td><?php echo ($row->approved == '0') ? 'Pending' : 'Yes' ?></td>
                        </tr>

                          <?php
                        
                        endforeach;
                       ?>
                      </tbody>
                    </table>
                    <div class="widget-foot">
                      <?php echo $links ?>
                      <div class="clearfix"></div> 
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