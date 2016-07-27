<?php $this->load->view('home/_header'); ?>
<!--banner start here-->
<div class="banner">
	<div class="container">
		<div class="banner-main">
			<h1>Lentera Inspirasi</h1>
		 <div class="bwn">
			<a href="<?php base_url() ?>donasi"> Donasi! </a>
		</div>
		</div>
	</div>
</div>
<!--banner end here-->
<!--news end here-->
<div class="news">
      <div class="container">
		    <div class="news-main">
				<div class="news-top">
					<h3>Proyek Sosial</h3>
				</div>
				<div class="news-bottom">
					<?php foreach ($proyek as $row): ?>
					<div class="col-md-4 new-left">
						<h3><?php echo $row->title ?></h3>
						<p><?php echo word_limiter($row->content,'5') ?></p>
					 	<div class="button-b">
							<a href="#">MORE</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<?php endforeach ?>
				</div>
				<div class="clearfix"> </div>
		    </div>
	  </div>
</div>
<!--/news end here-->
<?php $this->load->view('home/_footer'); ?>