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
									<li {if isset($menu_home)}{$menu_home}{/if}><a href="index.php" title="Trang chủ"><span class="glyphicon glyphicon-home"></span></a></li>
									<li {if isset($menu_sgk)}{$menu_sgk}{/if}><a href="sach_giao_khoa.php">Sách giáo khoa</a>
										<ul>
											{if isset($cates)}
											{foreach $cates as $row}
												<a href="sach_giao_khoa.php?id={$row->c_id}" title=""><li>{$row->c_name}</li></a>
											{/foreach}
											{/if}
										</ul>
									</li>
									<li {if isset($menu_stk)}{$menu_stk}{/if}><a href="sach_tham_khao.php">Sách tham khảo</a>
										<ul>
											{if isset($cates2)}
											{foreach $cates2 as $row}
												<a href="sach_tham_khao.php?id={$row->c_id}" title=""><li>{$row->c_name}</li></a>
											{/foreach}
											{/if}
										</ul>
									</li>
									<li {if isset($menu_scn)}{$menu_scn}{/if}><a href="sach_chuyen_nganh.php">Sách chuyên ngành</a>
										<ul>
											{if isset($cates3)}
											{foreach $cates3 as $row}
												<a href="sach_chuyen_nganh.php?id={$row->c_id}" title=""><li>{$row->c_name}</li></a>
											{/foreach}
											{/if}
										</ul>
									</li>
									<li {if isset($menu_tt)}{$menu_tt}{/if}><a href="tin_tuc.php">Tin tức</a></li>
									<li {if isset($menu_lh)}{$menu_lh}{/if}><a href="lien_he.php">Liên hệ</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<form class="form-inline" style="margin-top:10px" action="xl_tim_kiem.php" method="post">
										<div class="form-group">
											<div class="input-group" style="margin:0px">
												<input type="text" class="form-control" id="search" placeholder="Tìm kiếm sản phẩm" style="border-radius:0px;" name="search">
												<div class="input-group-addon" style="border-radius:0px"><button type="submit" name="tim"><span class="glyphicon glyphicon-search"></span></button></div>
											</div>
										</div>
									</form>
								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>