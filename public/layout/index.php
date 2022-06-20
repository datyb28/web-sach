<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title Page</title>

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/sticky.js"></script>
	<script src="js/jssor.slider.mini.js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body>
			<!-- TOPBAR -->
			<div id="topbar" class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 topbar-left">
							<div class="topbar-same">
								<div class="topbar-info">
									<div class="topbar-adr">
										<span class="glyphicon glyphicon-map-marker text-primary"></span>
										<span class="local">Xuân Thủy, Cầu Giấy</span>, Hà Nội 
									</div>
									<div class="topbar-tel">
										<span class="glyphicon glyphicon-phone text-primary"></span> 
										<span class="tel">084 265 1822</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6  topbar-right">
							<div class="topbar-same">
								<ul class="nav nav-pills nav-stacked">
									<li class="item"><a href="/bookstore/index.php/my-account">Sách yêu thích</a></li>
									<li class="item"><span class="topbar-no-border"><a href="/bookstore/index.php/faq-s">Câu hỏi thường gặp</a></span></li>
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
						<div class="col-xs-12 col-sm-6 col-lg-8 col-md-6 logo">
							<div class="logo-image">
								<a href="/bookstore" title="Nhà sách sư phạm">
									<img class="logo-img" src="images/logo_blue.png" alt="bookstore" />
									<span>Cửa hàng sách</span>
								</a>
								<small class="site-slogan">Cửa hàng sách</small>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- NAVIGATION -->
			<div class="wrap-nav">
				<div class="container">
					<div class="row">
						<nav class="navbar navbar-default" role="navigation">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="nav-op collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav">
									<li class="active"><a href="#">Trang chủ</a></li>
									<li><a href="#">Sách văn học</a></li>
									<li><a href="#">thiếu nhi</a></li>
									<li><a href="#">kinh tế</a></li>
									<li><a href="#">chuyên ngành</a></li>
									<li><a href="#">giáo khoa</a></li>
									<li><a href="#">Sách khác</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li><a href="#">Link</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			<!-- SLIDER -->
			<section class="slider">
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-id" data-slide-to="0" class=""></li>
						<li data-target="#carousel-id" data-slide-to="1" class=""></li>
						<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item">
							<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/slider/c-slide-1.jpg" class="img-responsive">
							<div class="container">
								<div class="carousel-caption">
									<h1>.</h1>
									<p>.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="images/slider/c-slide-3.jpg" class="img-responsive">
							<div class="container">
								<div class="carousel-caption">
									<h1>.</h1>
									<p>.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
								</div>
							</div>
						</div>
						<div class="item active">
							<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="images/slider/c-slide-3.jpg" class="img-responsive">
							<div class="container">
								<div class="carousel-caption">
									<h1>.</h1>
									<p>.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</section>
			<!-- EXPAND -->
			<h3 class="title-module">
				<span>Dịch vụ hàng đầu</span>
			</h3>
			<div class="container">
				<section class="ex-pand">
					<div class="container">
						<!-- SPOTLIGHT -->
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="expand">
									<div class="expand-text">
										<div class="expand-left"><span class="glyphicon glyphicon-earphone"></span>
											<h4>Hỗ trợ khách hàng 24/7</h4>
											<p>Số điện thoai: 04 3754 7713</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="expand">
									<div class="expand-text">
										<div class="expand-left"><span class="glyphicon glyphicon-send"></span>
											<h4>Miễn phí giao hàng</h4>
											<p>với hóa đơn trên 200.000 VNĐ</p>
										</div>
									</div>
								</div>
							</div>
							<div class=" col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="expand expand-no-border">
									<div class="expand-text">
										<div class="expand-left">
											<span class="glyphicon glyphicon-piggy-bank"></span>
											<h4>Khuyến mãi hàng tháng</h4>
											<p>giảm giá từ 10 - 20%</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- SPOTLIGHT -->	
					</div>
				</section>	
			</div>
			<!-- //EXPAND -->
			<div style="margin-top:20px"></div>
			<!-- CONTENT -->
			<section class="content" id="content">
				<section class="sellmon">
					<div class="container">
						<h3 class="title-module">
							<span>Sách của tháng</span>
						</h3>
						<h4 class="text-center">Sách bán chạy trong tháng</h4>
						<div class="row">
							<div class="col-md-5ths">
								<div class="mon-item">
									<img src="images/books/1.png" alt="" class="img-responsive">
									<div class="btn-buy-wish">
										<button class="btn btn-primary btn-wish"><span class="glyphicon glyphicon-shopping-cart"></span></button>
										<button class="btn btn-primary btn-wish"><span class="glyphicon glyphicon-heart"></span></button>
										<div class="clearfix"></div>
									</div>
									<div class="mon-item-detail">
										<h4 class="text-center">Sách ngữ văn</h4>
										<p class="text-center">25.000đ</p>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="mon-item">
									<img src="images/books/1.png" alt="" class="img-responsive">
									<div class="btn-buy-wish">
										<button class="btn btn-primary btn-wish"><span class="glyphicon glyphicon-shopping-cart"></span></button>
										<button class="btn btn-primary btn-wish"><span class="glyphicon glyphicon-heart"></span></button>
										<div class="clearfix"></div>
									</div>
									<div class="mon-item-detail">
										<h4 class="text-center">Sách ngữ văn</h4>
										<p class="text-center">25.000đ</p>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="mon-item">
									<img src="images/books/1.png" alt="" class="img-responsive">
									<div class="btn-buy-wish">
										<button class="btn btn-primary btn-wish"><span class="glyphicon glyphicon-shopping-cart"></span></button>
										<button class="btn btn-primary btn-wish"><span class="glyphicon glyphicon-heart"></span></button>
										<div class="clearfix"></div>
									</div>
									<div class="mon-item-detail">
										<h4 class="text-center">Sách ngữ văn</h4>
										<p class="text-center">25.000đ</p>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="mon-item">
									<img src="images/books/1.png" alt="" class="img-responsive">
									<div class="btn-buy-wish">
										<button class="btn btn-primary btn-wish"><span class="glyphicon glyphicon-shopping-cart"></span></button>
										<button class="btn btn-primary btn-wish"><span class="glyphicon glyphicon-heart"></span></button>
										<div class="clearfix"></div>
									</div>
									<div class="mon-item-detail">
										<h4 class="text-center">Sách ngữ văn</h4>
										<p class="text-center">25.000đ</p>
									</div>
								</div>
							</div>
							<div class="col-md-5ths">
								<div class="mon-item">
									<img src="images/books/1.png" alt="" class="img-responsive">
									<div class="btn-buy-wish">
										<button class="btn btn-primary btn-wish"><span class="glyphicon glyphicon-shopping-cart"></span></button>
										<button class="btn btn-primary btn-wish"><span class="glyphicon glyphicon-heart"></span></button>
										<div class="clearfix"></div>
									</div>
									<div class="mon-item-detail">
										<h4 class="text-center">Sách ngữ văn</h4>
										<p class="text-center">25.000đ</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="nfs">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<h3 class="title-module">
									<span>Sách mới nhập</span>
								</h3>
								<div class="cate-item">
									<img src="images/books/1.png" alt="" class="img-responsive">
									<h4>Sách văn 12</h4>
									<p>25.000đ</p>
									<div class="clearfix"></div>
								</div>
								<div class="cate-item">
									<img src="images/books/2.png" alt="" class="img-responsive">
									<h4>Sách văn 9</h4>
									<p>35.000đ</p>
									<div class="clearfix"></div>
								</div>
								<div class="cate-item">
									<img src="images/books/3.png" alt="" class="img-responsive">
									<h4>Sách văn 10</h4>
									<p>1.000đ</p>
									<div class="clearfix"></div>
								</div>
								<div class="cate-item">
									<img src="images/books/4.png" alt="" class="img-responsive">
									<h4>Sách văn 11</h4>
									<p>22.000đ</p>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-4">
								<h3 class="title-module">
									<span>Sách phổ biến</span>
								</h3>
								<div class="cate-item">
									<img src="images/books/1.png" alt="" class="img-responsive">
									<h4>Sách văn 12</h4>
									<p>25.000đ</p>
									<div class="clearfix"></div>
								</div>
								<div class="cate-item">
									<img src="images/books/2.png" alt="" class="img-responsive">
									<h4>Sách văn 9</h4>
									<p>35.000đ</p>
									<div class="clearfix"></div>
								</div>
								<div class="cate-item">
									<img src="images/books/3.png" alt="" class="img-responsive">
									<h4>Sách văn 10</h4>
									<p>1.000đ</p>
									<div class="clearfix"></div>
								</div>
								<div class="cate-item">
									<img src="images/books/4.png" alt="" class="img-responsive">
									<h4>Sách văn 11</h4>
									<p>22.000đ</p>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-4">
								<h3 class="title-module">
									<span>Sách tuyển chọn</span>
								</h3>
								<div class="cate-item">
									<img src="images/books/1.png" alt="" class="img-responsive">
									<h4>Sách văn 12</h4>
									<p>25.000đ</p>
									<div class="clearfix"></div>
								</div>
								<div class="cate-item">
									<img src="images/books/2.png" alt="" class="img-responsive">
									<h4>Sách văn 9</h4>
									<p>35.000đ</p>
									<div class="clearfix"></div>
								</div>
								<div class="cate-item">
									<img src="images/books/3.png" alt="" class="img-responsive">
									<h4>Sách văn 10</h4>
									<p>1.000đ</p>
									<div class="clearfix"></div>
								</div>
								<div class="cate-item">
									<img src="images/books/4.png" alt="" class="img-responsive">
									<h4>Sách văn 11</h4>
									<p>22.000đ</p>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="blog">
					<div class="container">
						<h3 class="title-module">
							<span>Tin tức mới nhất</span>
						</h3>
						<div class="row">
							<div class="col-md-4">
								<div class="blog-item">
									<div class="img-hid"><img src="images/blog/1.jpg" alt="" class="img-responsive"></div>
									<h3>Sách bán chạy - Tháng 3</h3>
									<p>Đây là phần tóm tắt bài viết của sách bán chạy vào tháng 3</p>
									<a class="link-blog" href=""><span class="readmore">READ MORE <span class="glyphicon glyphicon-arrow-right"></span></span></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="blog-item">
									<div class="img-hid"><img src="images/blog/2.jpg" alt="" class="img-responsive"></div>
									<h3>Sách bán chạy - Tháng 3</h3>
									<p>Đây là phần tóm tắt bài viết của sách bán chạy vào tháng 3</p>
									<span>READ MORE <span class="glyphicon glyphicon-arrow-right"></span></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="blog-item">
									<div class="img-hid"><img src="images/blog/3.jpg" alt="" class="img-responsive"></div>
									<h3>Sách bán chạy - Tháng 3</h3>
									<p>Đây là phần tóm tắt bài viết của sách bán chạy vào tháng 3</p>
									<span>READ MORE <span class="glyphicon glyphicon-arrow-right"></span></span>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
			<!-- SUBSCRIBE LETTER -->
			<section class="sub-lt">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<h3>ĐĂNG KÝ NHẬN THÔNG TIN CỬA HÀNG</h3>
							<p>Nhập vào địa chỉ email của bạn để nhận những cập nhật mới của
								cửa hàng, như là các sự kiện và các khuyến mại, coupon.</p>
							</div>
							<div class="col-md-5 col-md-offset-2">
								<form action="" method="POST" role="form">
									<div class="input-group">
										<input type="text" class="form-control" id="" placeholder="Địa chỉ email">
										<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
				<!-- OPTION FOOTER -->
				<section class="op-footer">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<h4><img src="images/logo_blue.png" alt="" class="img-responsive"></h4>
								<div class="op-ct">
									<span class="glyphicon glyphicon-map-marker text-primary"></span>
									<p>50-52 Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội, Việt Nam</p>
								</div>
								<div class="op-ct">
									<span class="glyphicon glyphicon-earphone text-primary"></span>
									<p>Phone: (+80) 123 456 Fax: (+80) 123 456 789</p>
								</div>
								<div class="op-ct">
									<span class="glyphicon glyphicon-envelope text-primary"></span>
									<p>Email: Contact@bookstore.com Website: www.Bookstore.com</p>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<h4>HƯỚNG DẪN</h4>
								<div class="op-ct">
									<ul>
										<li><a href="">Cách mua hàng</a></li>
										<li><a href="">Thắc mắc thường gặp</a></li>
										<li><a href="">Hóa đơn của tôi ở đâu?</a></li>
										<li><a href="">Chính sách trả lại</a></li>
										<li><a href="">Thanh toán</a></li>
										<li><a href="">Giao hàng</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<h4>THÔNG TIN</h4>
								<div class="op-ct">
									<ul>
										<li><a href="">Về chúng tôi</a></li>
										<li><a href="">Thông tin giao hàng</a></li>
										<li><a href="">Chính sách riêng tư</a></li>
										<li><a href="">Chiết khấu</a></li>
										<li><a href="">Dịch vụ khách hàng</a></li>
										<li><a href="">Điều khoản & Điều kiện</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<h4>TÌM KIẾM ĐỊA CHỈ</h4>
								<div class="op-ct">
									<a href=""><img src="images/social/facebook.png" alt="" class="img-responsive"></a>
									<a href=""><img src="images/social/google.png" alt="" class="img-responsive"></a>
									<a href=""><img src="images/social/twitter.png" alt="" class="img-responsive"></a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- FOOTER -->
				<footer class="footer" id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<p>Ẹ &copy; 2022Sách Sư phạm. All Rights Reserved.</p>
								<img src="images/payments_logos.png" alt="" class="img-responsive pull-right">
							</div>
						</div>
					</div><!-- 
					<div class="clearfix"></div> -->
				</footer>
			</body>
			</html>