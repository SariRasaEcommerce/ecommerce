<?php $this->load->view('Homepage/Javascript_footer'); ?>
<?php $this->load->view('Homepage/Top_bar'); ?>
<?php $this->load->view('Homepage/Navbar_mainmenu'); ?>
<?php $this->load->view('Login/Header_text'); ?>
<h4><span>Konfirmasi Pemesanan</span></h4>
</section>	
<section class="main-content">
	<div class="row">
		<div class="span12">
			<div class="accordion" id="accordion2">
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Detail Pesanan</a>
					</div>
					<div id="collapseOne" class="accordion-body in collapse">
						<div class="page-container">
							<div class="accordion-inner">

								<div class="row-fluid">
									<div class="col-md-12">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h3 class="panel-title"><strong>Rincian Pesanan</strong></h3>
											</div>
											<div class="panel-body">
												<div class="table-responsive">
													<table class="table table-condensed">
														<thead>
															<tr>
																<td><strong>Barang</strong></td>
																<td class="text-center"><strong>Harga</strong></td>
																<td class="text-center"><strong>Jumlah</strong></td>
																<td class="text-right"><strong>Total</strong></td>
															</tr>
														</thead>
														<?php 
														foreach ($transaksi->result() as $trans) 
															{?>
																<tbody>
																	<!-- foreach ($order->lineItems as $line) or some such thing here -->
																	<tr>
																		<td><?php echo $trans->NAMA_BARANG?></td>
																		<td class="text-center"><?php echo $trans->HARGA_BARANG?></td>
																		<td class="text-center"><?php echo $trans->QTY?></td>
																		<td class="text-right"><?php echo $total = $trans->QTY * $trans->HARGA_BARANG?></td>
																	</tr>

																</tbody>
															<?php } ?>
														</table>
														<hr>
														<p class="cart-total right">
															<strong>Sub-Total</strong>:	<br>
															<strong>Ongkos kirim </strong>: <br>
															<strong>Total</strong>: <br>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Data Pemesan</a>
						</div>
						<?php 
						foreach ($pemesan->result() as $data) 
							{?>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<form action="<?php echo base_url('Transaksi/pemesan')?>" method="post" class="form-stacked">
													<fieldset>
														<div class="control-group">
															<label class="control-label">Nama : <?php echo $data->NAMA_PEL?></label>
														</div>
														<div class="control-group">
															<label class="control-label">Alamat : <?php echo $data->ALAMAT_PEL?></label>
														</div>
														<div class="control-group">
															<label class="control-label">Nomor Telpon : <?php echo $data->NO_TELP?></label>

														</div>
														<div class="control-group">
															<label class="control-label">Jenis Kelamin : <?php echo $data->JK?></label>
														</div>

														<div class="control-group">
															<label class="control-label">Email address : <?php echo $data->EMAIL?></label>
														</div>
													</fieldset>
												</form>
											</div>

										</div>
									</div>
									
								</div>
							<?php } ?>
						</div>

					</div>
				</div>


			</div>

			<?php $this->load->view('Homepage/Footer'); ?>
			<?php $this->load->view('Homepage/Copyright'); ?>