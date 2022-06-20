<?php /* Smarty version 3.1.24, created on 2016-04-26 18:23:45
         compiled from "smarty/templates/subcribe.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26002571f8801bcbf94_08979461%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd51f703fa7dec6b3547cc1111ab10c01e81f5bfe' => 
    array (
      0 => 'smarty/templates/subcribe.tpl',
      1 => 1456497469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26002571f8801bcbf94_08979461',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571f8801c09fa3_81468758',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f8801c09fa3_81468758')) {
function content_571f8801c09fa3_81468758 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26002571f8801bcbf94_08979461';
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