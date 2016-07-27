<?php $this->load->view('home/_header'); ?>
<!--blog start here-->
<div class="blog">
	<div class="container">
		<div class="blog-main">
			<div class="blog-top">
			<h3> Laporan Keuangan</h3>
			</div>
			<?php foreach ($laporan as $row): ?>
			<div class="col-md-12 blog-left">
		   		<div class="blog-grid">
			   		<div class="grid-right">
			   	 		<a href="<?php echo base_url().'uploads/laporan/'.$row->link ?>"><h3><?php echo $row->date ?></h3></a>
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