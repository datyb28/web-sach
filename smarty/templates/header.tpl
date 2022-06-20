<!-- TOPBAR -->
			<div id="topbar" class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 topbar-left">
							<div class="topbar-same">
								<div class="topbar-info">
									<div class="topbar-adr">
										<span class="glyphicon glyphicon-map-marker text-primary"></span>
										<span class="local">{$info->i_address}</span> 
									</div>
									<div class="topbar-tel">
										<span class="glyphicon glyphicon-phone text-primary"></span> 
										<span class="tel">{$info->i_phone}</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 topbar-right">
							<div class="topbar-same">
								<ul class="nav nav-pills nav-stacked">
									<li class="item"><span class="topbar-no-border"><a href="admin/login.php">Đăng nhập quản trị</a></span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER -->
			<header id="header" class="header">
				<div class="container">
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-6 col-xs-12 col-sm-6 col-lg-10 logo">
							<div class="logo-image">
								<a href="index.php" title="Nhà sách sư phạm">
									<img class="logo-img" src="public/images/website/{$info->i_logo}" alt="bookstore" />
									<span>Cửa hàng sách</span>
								</a>
								<small class="site-slogan">Cửa hàng sách</small>
							</div>
						</div>
						<div class="col-md-6 col-xs-12 col-sm-6 col-lg-1 col-lg-offset-1">
							<div class="shop-cart" title="Giỏ hàng của bạn"><a href="gio_hang.php"><span class="glyphicon glyphicon-shopping-cart"></span></a></div>
						</div>
					</div>
				</div>
			</header>