</head>

<?php $this->load->model('M_login'); ?>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><?php echo $this->session-> userdata('nama'); ?></li>
							<li><a href="<?php echo base_url('Checkout')?>">Keranjang</a></li>
							<li><a href="<?php echo base_url('Transaksi')?>">Transaksi</a></li>					
							<li><a href="<?php echo base_url('History')?>">History</a></li>	
							<li><a href="<?php echo base_url('Login/logout')?>">Logout</a></li>		
						</ul>
					</div>
				</div>
			</div>