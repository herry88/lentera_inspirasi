<?php $this->load->view('home/_header'); ?>
<!--blog start here-->
<div class="blog">
	<div class="container">
		<div class="blog-main">
			<div class="blog-top">
			<h3> Proyek Sosial</h3>
			</div>
			<?php foreach ($proyek as $row): ?>
			<div class="col-md-12 blog-left">
				<a href="<?php echo base_url().'home/proyek/'.$row->id ?>"> <img src="<?php echo base_url().'uploads/proyek/'.$row->pic ?>" alt="" style="max-width:730px" /> </a>
		   		<div class="blog-grid">
			   		<div class="grid-right">
			   	 		<a href="<?php echo base_url().'home/proyek/'.$row->id ?>"><h3><?php echo $row->title ?></h3></a>
			   	   		<ul class="blog-list">
			   	   	  		<li><span class="mike"> </span><?php echo $row->user ?></li>
			   	   	  		<li><span> Diterbitkan pada </span><?php echo $row->date ?></li>
			   	   		</ul>
			   	   		<p><?php echo word_limiter($row->content) ?></p>
			   	   		<a class="bwn" href="<?php echo base_url().'home/proyek/'.$row->id ?>">READ MORE</a>
			   		</div>
			 		<div class="clearfix"> </div>
			 	</div>
			</div>
			<?php endforeach ?>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>
<!--blog end here-->
<?php $this->load->view('home/_footer'); ?>