<?php $this->load->view('home/_header'); ?>
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<h3>Donasi</h3>
		</div>
	</div>
</div>
<!--contact end here-->
<!--get touch start here-->
<div class="get">
	<div class="container">
		<div class="get-main">
			  <div class="col-md-6 get-left">
			  	<form action="<?php echo base_url() ?>home/donasi" method="post">
			  	 <p>Nama</p>
			  	 <input type="text" name="name" required="true" />
			  	 <p>Email</p>
			  	 <input type="email" name="email" required="true"/>
			  	 <p>HP</p>
			  	 <input type="text" name="phone" required="true"/>
			  	 <p>Total</p>
			  	 <input type="text" value="" name="amount" required="true" />
			  	 <p>Keterangan</p>
			  	 <textarea name="remarks" cols="30" rows="10" required="true"></textarea>
			  	 <br>
			  	 <input type="submit" value="Send">
			  	 </form>
			  </div>
			  <div class="col-md-6 get-right">
					<ol>
						<li>Isi form data di samping</li>
						<li>
							Kirimkan donasimu ke <br>
							BCA    42100 4229 1
							a/n Firman Tri Wahyudi
						</li>
						<li>
							Konfirmasi ke OA Line kami, atau bisa menghubungi +62813 3826 0035 (Rara)
						</li>
					</ol>
		 	  </div>
		 	<div class="clearfix"> </div>	
		</div>
	</div>
</div>

<!--get touch end here-->
<?php $this->load->view('home/_footer'); ?>