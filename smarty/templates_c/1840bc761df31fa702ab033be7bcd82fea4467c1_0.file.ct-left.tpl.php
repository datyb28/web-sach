<?php /* Smarty version 3.1.24, created on 2016-04-28 15:36:28
         compiled from "../smarty/templates/admin/ct-left.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14071572203cc81e1c5_28221988%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1840bc761df31fa702ab033be7bcd82fea4467c1' => 
    array (
      0 => '../smarty/templates/admin/ct-left.tpl',
      1 => 1458235221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14071572203cc81e1c5_28221988',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572203cc87bf43_63304295',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572203cc87bf43_63304295')) {
function content_572203cc87bf43_63304295 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14071572203cc81e1c5_28221988';
?>
<section class="content-left">
	<aside class="col-md-2">
		<div class="header">
			<h4><img src="../public/layout/images/logoadmin.png" alt="" class="img-responsive" width="40" style="float:left">TRANG QUẢN TRỊ</h4>
		</div>
		<div class="clearfix"></div>
		<div id='cssmenu'>
			<ul>
				<li class='active'><a href='index.php'><span>Trang tổng quan</span></a></li>
				<li class='has-sub'><a href='listbook.php'><span><i class="glyphicon glyphicon-book"></i> Sách</span></a>
					<ul>
						<li><a href='insertbook.php'><span>Thêm sách mới</span></a></li>
						<li><a href='listbook.php'><span>Danh sách sách</span></a></li>
						<li><a href='#'><span>Quản lý tác giả</span></a></li>
						<li><a href='#'><span>Quản lý nhà xuất bản</span></a></li>
					</ul>
				</li>
				<li class='has-sub'><a href='listcate.php'><span><i class="glyphicon glyphicon-list-alt"></i> Danh mục sách</span></a>
					<ul>
						<li><a href='insertcate.php'><span>Thêm danh mục</span></a></li>
						<li class='last'><a href='listcate.php'><span>Danh sách danh mục</span></a></li>
					</ul>
				</li>
				<li><a href='bill.php'><span><i class="glyphicon glyphicon-shopping-cart"></i> Đơn hàng</span></a></li>
				<li><a href='customers.php'><span><i class="glyphicon glyphicon-star"></i> Khách hàng</span></a></li>
				<li><a href='listcontact.php'><span><i class="glyphicon glyphicon-comment"></i> Liên hệ</span></a></li>
				<li class='has-sub'><a href='listnew.php'><span><i class="glyphicon glyphicon-th-list"></i> Tin tức</span></a>
					<ul>
						<li><a href='insertnew.php'><span>Thêm tin tức</span></a></li>
						<li class='last'><a href='listnew.php'><span>Danh sách tin tức</span></a></li>
					</ul>
				</li>
				<li class='has-sub'><a href='listuser.php'><span><i class="glyphicon glyphicon-user"></i> Thành viên</span></a>
					<ul>
						<li><a href='insertuser.php'><span>Thêm thành viên</span></a></li>
						<li class='last'><a href='listuser.php'><span>Danh sách thành viên</span></a></li>
					</ul>
				</li>
				<li><a href='slider.php'><span><i class="glyphicon glyphicon-th-large"></i> Slider</span></a></li>
				<li><a href='config.php'><span><i class="glyphicon glyphicon-cog"></i> Thiết lập website</span></a></li>
			</ul>
		</div>
	</aside>
</section><?php }
}
?>