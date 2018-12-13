<?php $this->load->view('Homepage/Javascript_footer'); ?>
<?php $this->load->view('Homepage/Navbar_mainmenu'); ?>
<?php $this->load->view('Login/Header_text'); ?>
				<h4><span>Login or Regsiter</span></h4>


			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<form action="<?php echo base_url('index.php/Login/aksi_login') ?>" id="loginform" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">
										<input type="text" name="Email" placeholder="Enter your email" id="email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" name="Password" placeholder="Enter your password" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Sign into your account">
									<hr>
									<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7" >					
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<form action="<?php echo base_url('index.php/Login/aksi_register')?>" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Nama</label>
									<div class="controls">
										<input type="text" name="nama" placeholder="Masukkan Nama" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Alamat</label>
									<div class="controls">
										<textarea type="text" name="alamat" placeholder="Masukkan Alamat" class="input-xlarge"></textarea>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Nomor Telpon</label>
									<div class="controls">
										<input type="text" name="no" placeholder="Masukkan Nomor Telpon" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Jenis Kelamin</label>
									<div class="controls">
										<select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="kelamin">
                                            <option disabled="">Pilih Jenis Kelamin</option>
                                            <option>Laki - Laki</option>
                                            <option>Perempuan</option>
                                        </select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Tanggal Lahir</label>
									<div class="controls">
										<input type="date" name="tanggal" placeholder="Masukkan Tanggal Lahir" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email address:</label>
									<div class="controls">
										<input type="text" name="email" placeholder="Masukkan Email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input type="password" name="password" placeholder="Masukkan Password" class="input-xlarge">
									</div>
								</div>	
								<hr>
								<div class="actions"><input onclick="index.php/admin/Notifikasiakun/notifyMe('Notification','Ada member yang masuk')" tabindex="9" class="btn btn-inverse large" type="submit" value="Create your account"></div>
							</fieldset>
						</form>					
					</div>				
				</div>

<?php $this->load->view('Homepage/Footer'); ?>
<?php $this->load->view('Homepage/Copyright'); ?>