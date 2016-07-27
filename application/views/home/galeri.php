<?php $this->load->view('home/_header'); ?>
<!--gallery start here-->
<div class="gallery">
	<div class="wrap">
		<div class="gallery-main">
			<h3>Galeri</h3>
			<div class='container services_top'>
	 	  		<div class="portfolio_top">
	 	  			<?php foreach ($galeri as $row): ?>
	 	   			<div class="col_1_of_portfolio span_1_of_portfolio">
	 		     	<div class="view view-first">
                    	<img src="<?php echo base_url().'uploads/galeri/'.$row->pic ?>" class="img-responsive" alt=""/>
                      	<div class="mask">
                         	<a class="popup-with-zoom-anim" href="#small-dialog<?php echo $row->id ?>"> <div class="info"><img src="<?php echo base_url() ?>assets/home/images/magnifier.png" alt=""/></div></a>
		                    <div id="small-dialog<?php echo $row->id ?>" class="mfp-hide">
							   	<div class="pop_up2">
							   	  	<img src="<?php echo base_url().'uploads/galeri/'.$row->pic ?>" class="img-responsive" alt=""/>
							   	   	<h3 class="popup"><a href="#"><?php echo $row->title ?></a></h3>
				    			   	<p class="m_5"><?php echo $row->remarks ?></p>
							   	</div>
							</div>
                        </div>
                    </div> 
	 		  		</div>
	 		  		<?php endforeach ?>
	 		  <div class="clearfix"> </div>
	 	  </div>
	    </div>

		</div>
	</div>
</div>
<!--gallery end end here-->
<?php $this->load->view('home/_footer'); ?>