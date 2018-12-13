<?php $this->load->view('Homepage/Javascript_footer'); ?>
<?php $this->load->view('Homepage/Top_bar'); ?>
<?php $this->load->view('Homepage/Navbar_mainmenu'); ?>
<?php $this->load->view('Login/Header_text'); ?>
<h4><span>Detail Produk</span></h4>
</section>
<section class="main-content">				
	<div class="row">						
		<div class="span9">
			<form method="post" action="<?php echo base_url('Produk/addtocart')?>">
			<div class="row">

				<div class="span4">
					<a href="<?php echo base_url().$produk->IMG?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="<?php echo base_url().$produk->IMG?>"></a><br>
				</div>
				<div class="span5">
					<input type="hidden" name="id_barang"  value="<?php echo $produk->ID_BARANG?>">
					<address>
						<strong>Nama Produk:</strong> <span><?php echo $produk->NAMA_BARANG?></span><br>
						<strong>Berat:</strong> <span><?php echo $produk->BERAT?> kg</span><br>
						<strong>Deskripsi:</strong> <span><?php echo $produk->DESKRIPSI?></span><br>								
					</address>									
					<h4><strong>Rp. <?php echo $produk->HARGA_BARANG?></strong></h4>
				</div>
				<div class="span5">
					<form class="form-inline">
						
						<p>&nbsp;</p>
						<label>Jumlah:</label>
						<input type="text" class="span1" placeholder="1" name="jumlah">
						<button class="btn btn-inverse" type="submit">Add to cart</button>
					</form>
				</div>					
			</div>
			</form>
		</div>
	</div>

		<?php $this->load->view('Homepage/Footer'); ?>
		<?php $this->load->view('Homepage/Copyright'); ?>