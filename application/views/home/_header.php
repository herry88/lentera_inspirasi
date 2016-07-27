<!DOCTYPE html>
<html>
<head>
<title><?php echo $title ?> | Lentera Inspirasi</title>
<link href="<?php echo base_url() ?>assets/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url() ?>assets/home/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--web-fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<!--js-->
<script src="<?php echo base_url() ?>assets/home/js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/home/js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
</head>
<body>
<!--header start here-->
<div class="mothergrid">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>assets/home/images/logo.png" alt=""/> </a>
			</div>
			<span class="menu"> <img src="images/icon.png" alt=""/></span>
			<div class="clear"> </div>
			<div class="navg">
				<ul class="res">
					<li><a class="active" href="<?php echo base_url() ?>">Beranda</a></li>
					<li><a href="<?php echo base_url() ?>home/tentang">Tentang Kami</a></li>
					<li><a href="<?php echo base_url() ?>home/proyek">Proyek Sosial</a></li>
					<li><a href="blog.html">BLOG</a></li>
					<li><a href="events.html">EVENTS</a></li>
					<li><a href="gallery.html">GALLERY</a></li>
					<li><a href="contact.html">CONTACT US</a></li>
				</ul>
				 <script>
			                                                      $( "span.menu").click(function() {
			                                                                                        $(  "ul.res" ).slideToggle("slow", function() {
			                                                                                         // Animation complete.
			                                                                                         });
			                                                                                         });
		                                                     </script>
			</div>
		<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--heder end here-->