<?php $this->load->view('home/_header.php'); ?>
<!---about charity start here-->
<div class="about">
     <div class="container">
	     <div class="about-main">
	  	    <div class="about-grid">
			  <div class="col-md-12 about-left">
				   <?php echo $tentang->content ?>
				<div class="clearfix"> </div>
				</div>
			<div class="clearfix"> </div>
				</div>
			<div class="clearfix"> </div>
		</div>
		<div class="about-main">
	  	    <div class="about-grid">
			  <div class="col-md-12 about-left">
				   <?php echo $tujuan->content ?>
				<div class="clearfix"> </div>
				</div>
			<div class="clearfix"> </div>
				</div>
			<div class="clearfix"> </div>
		</div>
		<div class="aboutus-top">
				<?php foreach ($anggota as $row): ?>
				<div class="col-md-4  aboutus-left">
					<img src="<?php echo base_url().'uploads/anggota/'.$row->pic ?>" alt="<?php echo $row->name ?>" height="150px"/>
					<h4><?php echo $row->name ?></h4>
					<h5><?php echo $row->position ?></h5>
				</div>
				<?php endforeach ?>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--about us end here-->
<?php $this->load->view('home/_footer'); ?>