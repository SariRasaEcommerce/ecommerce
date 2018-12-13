<?php $this->load->view('Homepage/Javascript_footer'); ?>
<?php $this->load->view('Homepage/Top_bar'); ?>
<?php $this->load->view('Homepage/Navbar_mainmenu'); ?>
<?php $this->load->view('Homepage/Homepage_slider'); ?>
</section>
<section class="main-content">
	<div class="row">
		<div class="span12">													
			<br/>
			<div class="row">
				<div class="span12">
					<h4 class="title">
						<span class="pull-left"><span class="text"><span class="line">Produk <strong>Terbaru</strong></span></span></span>
						
					</h4>
					<div id="myCarousel-2" class="myCarousel carousel slide">
						<div class="carousel-inner">
							<div class="active item">
								<ul class="thumbnails">	
								<?php foreach ($home->result() as $barang) {?>											
									<li class="span3">
										<div class="product-box">
											<span class="sale_tag"></span>
											<p><a href="<?php echo base_url()?>Produk/detailproduk/<?php echo $barang->ID_BARANG ?>"><img src="<?php echo base_url().$barang->IMG?>" alt="" /></a></p>
											<a href="<?php echo base_url()?>Produk/detailproduk/<?php echo $barang->ID_BARANG ?>" class="title"><?php echo $barang->NAMA_BARANG?></a><br/>
											<p class="price"><?php echo $barang->HARGA_BARANG?></p>
										</div>
									</li>
									<?php } ?>
								</ul>
							</div>
							<div class="item">
								<ul class="thumbnails">
									
								</ul>
							</div>
						</div>							
					</div>
				</div>						
			</div>
<?php $this->load->view('Homepage/Footer'); ?>
<?php $this->load->view('Homepage/Copyright'); ?>