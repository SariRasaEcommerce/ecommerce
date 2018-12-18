<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header"  style="float: left;">
				<a href="<?php echo base_url() ?>index.php/admin/Home" class="logo">
					Sari Rasa
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg"  style="float: right;">
				<div class="container-fluid"  style="float: right;">
					
					<!-- <form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form> -->
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center"  style="float: right;">
						
						<li class="nav-item dropdown hidden-caret"  style="float: right;">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">Tidak Ada pemberitahuan</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="<?php echo base_url() ?>assets/admin/webadmin/img/profile.jpg" alt="user-img" width="36" class="img-circle"><span>Admin</span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="<?php echo base_url() ?>assets/admin/webadmin/img/profile.jpg" alt="user"></div>
										<div class="u-text">
											<!-- <h4></h4> -->
											<p class="text-muted"><?php echo $this->session->userdata('nama'); ?></p>
										</div>
									</div></li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user"></i> Profil Saya</a>
<!-- 									<a class="dropdown-item" href="#"></i> My Balance</a>
 -->									<!-- <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a> -->
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-settings"></i>Pengaturan</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo base_url() ?>index.php/admin/Proseslogin/logout"><i class="fa fa-power-off"></i>Keluar</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
