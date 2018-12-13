<?php $this->load->view('Homepage/Javascript_footer'); ?>
<?php $this->load->view('Homepage/Top_bar'); ?>
<?php $this->load->view('Homepage/Navbar_mainmenu'); ?>
<?php $this->load->view('Login/Header_text'); ?>
<h4><span>Produk Sari Rasa</span></h4>
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							<?php foreach ($produk->result() as $barang) {?>
								
								
							<li class="span3">
								<a href="<?php echo base_url('Produk/detailproduk')?>"><div class="product-box">
									<span class="sale_tag"></span>												
									<a href="<?php echo base_url('Produk/detailproduk')?>"><img alt="" src="<?php echo base_url().$barang->IMG?>"></a><br/>
									<a href="<?php echo base_url()?>Produk/detailproduk/<?php echo $barang->ID_BARANG ?>" class="title"><?php echo $barang->NAMA_BARANG?></a><br/>
									<p class="price"><?php echo $barang->HARGA_BARANG?></p>
								</div>
								</a>
							</li>       
							<?php } ?>
							
						</ul>								
						<hr>
						
					</div>
					
				</div>

<?php $this->load->view('Homepage/Footer'); ?>
<?php $this->load->view('Homepage/Copyright'); ?>