<?php /* Smarty version 3.1.24, created on 2016-04-01 17:37:53
         compiled from "smarty/templates/subcribe.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:88356fe87c1e19e47_97028708%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fccac361e9c6c379b2bda7c59e4fef2810f0018' => 
    array (
      0 => 'smarty/templates/subcribe.tpl',
      1 => 1456497469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88356fe87c1e19e47_97028708',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe87c1e5fd36_84129794',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe87c1e5fd36_84129794')) {
function content_56fe87c1e5fd36_84129794 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '88356fe87c1e19e47_97028708';
?>
<!-- SUBSCRIBE LETTER -->
			<section class="sub-lt">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h3>ĐĂNG KÝ NHẬN THÔNG TIN CỬA HÀNG</h3>
							<p>Nhập vào địa chỉ email của bạn để nhận những cập nhật mới của
								cửa hàng, như là các sự kiện và các khuyến mại, coupon.</p>
							</div>
							<div class="col-md-5 col-md-offset-1">
								<form action="" method="POST" role="form">
									<div class="input-group">
										<input type="text" class="form-control" id="" placeholder="Địa chỉ email">
										<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section><?php }
}
?>