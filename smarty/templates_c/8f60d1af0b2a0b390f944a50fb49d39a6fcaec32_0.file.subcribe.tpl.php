<?php /* Smarty version 3.1.24, created on 2022-06-18 18:15:00
         compiled from "smarty/templates/subcribe.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:191463166462adfa042a88e3_59684097%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f60d1af0b2a0b390f944a50fb49d39a6fcaec32' => 
    array (
      0 => 'smarty/templates/subcribe.tpl',
      1 => 1456497469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191463166462adfa042a88e3_59684097',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62adfa042c8857_99565920',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62adfa042c8857_99565920')) {
function content_62adfa042c8857_99565920 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '191463166462adfa042a88e3_59684097';
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