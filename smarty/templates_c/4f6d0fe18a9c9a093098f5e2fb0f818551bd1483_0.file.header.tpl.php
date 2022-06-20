<?php /* Smarty version 3.1.24, created on 2022-06-18 18:14:59
         compiled from "smarty/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:63248196762adfa03c67bc7_87848181%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f6d0fe18a9c9a093098f5e2fb0f818551bd1483' => 
    array (
      0 => 'smarty/templates/header.tpl',
      1 => 1458269277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63248196762adfa03c67bc7_87848181',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62adfa03c88a28_10693815',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62adfa03c88a28_10693815')) {
function content_62adfa03c88a28_10693815 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '63248196762adfa03c67bc7_87848181';
?>
<!-- TOPBAR -->
			<div id="topbar" class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 topbar-left">
							<div class="topbar-same">
								<div class="topbar-info">
									<div class="topbar-adr">
										<span class="glyphicon glyphicon-map-marker text-primary"></span>
										<span class="local"><?php echo $_smarty_tpl->tpl_vars['info']->value->i_address;?>
</span> 
									</div>
									<div class="topbar-tel">
										<span class="glyphicon glyphicon-phone text-primary"></span> 
										<span class="tel"><?php echo $_smarty_tpl->tpl_vars['info']->value->i_phone;?>
</span>
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
									<img class="logo-img" src="public/images/website/<?php echo $_smarty_tpl->tpl_vars['info']->value->i_logo;?>
" alt="bookstore" />
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
			</header><?php }
}
?>