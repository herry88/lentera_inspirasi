<?php $this->load->view('home/_header'); ?>
<!--single page start here-->
<!--blog start here-->
<div class="blog">
	<div class="container">
		<div class="blog-main">
			<div class="blog-top">
			<h3> BLOG</h3>
			</div>
			<div class="col-md-8 blog-left">
				     <img src="<?php echo base_url().'uploads/proyek/'.$proyek->pic ?>" alt=""/>
			   <div class="blog-grid">
				   <div class="grid-right">
				   	 <a href="single.html"> <h3><?php echo $proyek->title ?></h3></a>
				   	   <ul class="blog-list">
				   	   	  <li><span class="mike"> </span><?php echo $proyek->user ?></li>
				   	   	   <li><span>Diterbitkan pada </span><?php echo $proyek->date ?></li>
				   	   </ul>
				   </div>
				 <div class="clearfix"> </div>
				 </div>
				 <div class="blog-para">
					<?php echo $proyek->content ?>
	            </div>
	            
	             <div class="clearfix"> </div>
			</div>
	</div>
</div>
</div>
<!--single page end here-->
<?php $this->load->view('home/_footer'); ?>