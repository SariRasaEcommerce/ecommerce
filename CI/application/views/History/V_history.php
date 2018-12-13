<?php $this->load->view('Homepage/Javascript_footer'); ?>
<?php $this->load->view('Homepage/Top_bar'); ?>
<?php $this->load->view('Homepage/Navbar_mainmenu'); ?>
<?php $this->load->view('Login/Header_text'); ?>
<h4><span>History Pemesanan</span></h4>
</section>	
<div class="row">
	<div class="span12">
		<div class="accordion" id="accordion2">
			<div class="accordion-group">
				<div id="collapseOne" class="accordion-body in collapse">
					<div class="page-container">
						<div class="accordion-inner">



							<div class="row-fluid">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title"><strong>History Pemesanan</strong></h3>
										</div>
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table table-condensed">
													<thead>
														<tr>
															<td><strong>Tanggal Transaksi</strong></td>
															<td class="text-center"><strong>Barang</strong></td>
															<td class="text-center"><strong>Jumlah</strong></td>
															<td class="text-center"><strong>Harga</strong></td>
															<td class="text-right"><strong>Total Harga</strong></td>
														</tr>
													</thead>
													<?php 
													foreach ($transaksi->result() as $trans) 
														{?>
															<tbody>
																<!-- foreach ($order->lineItems as $line) or some such thing here -->
																<tr>
																	<td><?php echo $trans->TGL_TRANSAKSI?></td>
																	<td class="text-center"><?php echo $trans->NAMA_BARANG?></td>
																	<td class="text-center"><?php echo $trans->QTY?></td>
																	<td class="text-center"><?php echo $trans->HARGA_BARANG?></td>
																	<td class="text-right">$10.99</td>
																</tr>
															</tbody>
														<?php } ?>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('Homepage/Footer'); ?>
							<?php $this->load->view('Homepage/Copyright'); ?>