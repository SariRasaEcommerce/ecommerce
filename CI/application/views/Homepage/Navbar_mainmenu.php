	</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="<?php echo base_url('index.php/Home')?>" class="logo pull-left"><img src="<?php echo base_url('assets/themes/images/tulisan.png')?>" class="site_logo" alt="" width="125px" height="100px"></a>
					<nav id="menu" class="pull-right" >
						<ul>
							<li class="<?php if($this->uri->segment('1')=="Home"){echo "active";}?>"><a href="<?php echo base_url('Home')?>">Home</a></li>					
							<li class="<?php if($this->uri->segment('1')=="Produk"){echo "active";}?>"><a href="<?php echo base_url('Produk')?>">Produk</a></li>
							<li class="<?php if($this->uri->segment('1')=="About_us"){echo "active";}?>"><a href="<?php echo base_url('About_us')?>">About Us</a></li>
							<li class="<?php if($this->uri->segment('1')=="Contact"){echo "active";}?>"><a href="<?php echo base_url('Contact_Us')?>">Contact Us</a></li>
						</ul>
					</nav>
				</div>