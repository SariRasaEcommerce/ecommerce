 <?php $this->load->view('Homepage/Javascript_footer'); ?>
<?php $this->load->view('Homepage/Top_bar'); ?>
<?php $this->load->view('Homepage/Navbar_mainmenu'); ?>
<?php $this->load->view('Login/Header_text'); ?>
<h4><span>Keranjang</span></h4>

</section>
<section class="main-content">				
	<div class="row">
		<div class="span9">					
			<h4 class="title"><span class="text"><strong>Keranjang</strong>ku</span></h4>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Tandai</th>
						<th>Gambar</th>
						<th>Nama Produk</th>
						<th>Jumlah</th>
						<th>Harga Satuan</th>
						<th>Total</th>
					</tr>
				</thead>
				<?php 
				foreach ($checkout->result() as $keranjang) 
					{?>
						<tbody>
							<tr>
								<td><input type="checkbox" value="option1"></td>
								<td><a href="product_detail.html"><img alt="" src="<?php echo $keranjang->IMG?>"></a></td>
								<td><?php echo $keranjang->NAMA_BARANG?></td>
								<td><?php echo $keranjang->QTY?></td>
								<td><?php echo $keranjang->HARGA_BARANG?></td>
								<td><?php echo $total = $keranjang->QTY * $keranjang->HARGA_BARANG?></td>
							</tr>	
						</tbody>
					<?php } ?>
				</table>

				<hr>
				<p class="cart-total right">
					<strong>Sub-Total</strong>:	<br>
				</p>
				<hr/>
				<p class="buttons center">
					<a href="<?php echo base_url('Checkout/detail')?>"><button class="btn btn-inverse" type="submit" id="checkout">Checkout</button></a>
				</p>					
			</div>

		</div>

		<?php $this->load->view('Homepage/Footer'); ?>
		<?php $this->load->view('Homepage/Copyright'); ?>