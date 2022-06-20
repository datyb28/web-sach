<?php /* Smarty version 3.1.24, created on 2016-03-17 17:01:50
         compiled from "C:/xampp/htdocs/doan/views/users/v_dang_ki.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:758256ead4eec956f5_45197612%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb660c3ee81a38dfbc423c3d5ab69556dad228ea' => 
    array (
      0 => 'C:/xampp/htdocs/doan/views/users/v_dang_ki.tpl',
      1 => 1458205499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '758256ead4eec956f5_45197612',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56ead4eec9fdb6_74809005',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ead4eec9fdb6_74809005')) {
function content_56ead4eec9fdb6_74809005 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '758256ead4eec956f5_45197612';
?>
<section class="breadcb">
	<h2>Trang đăng ký</h2>
	<p>Trang chủ / Đăng ký</p>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h3 class="title-module-right">
				<span>Đăng ký</span>
			</h3>
			<form action="" method="POST" role="form">
			
				<div class="form-group col-md-12 form-inline">
					<label for="" class="col-md-5">Tên tài khoản:</label>
					<input type="text" class="form-control" id="" placeholder="Nhập họ tên">
				</div>
				<div class="form-group col-md-12 form-inline">
					<label for="" class="col-md-5">Mật khẩu:</label>
					<input type="text" class="form-control" id="" placeholder="Nhập họ tên">
				</div>
				<div class="form-group col-md-12 form-inline">
					<label for="" class="col-md-5">Xác nhận mật khẩu:</label>
					<input type="text" class="form-control" id="" placeholder="Nhập họ tên">
				</div>
				<div class="form-group col-md-12 form-inline">
					<label for="" class="col-md-5">Họ tên:</label>
					<input type="text" class="form-control" id="" placeholder="Nhập họ tên">
				</div>
				<div class="form-group col-md-12 form-inline">
					<label for="" class="col-md-5">Giới tính:</label>
					<div class="col-md-2"><input type="radio" name="sex" id="Nam"> Nam</div>
					<input type="radio" name="sex" id="Nữ"> Nữ
				</div>
				<div class="form-group col-md-12 form-inline">
					<label for="" class="col-md-5">Ngày sinh:</label>
					<input type="text" class="form-control" id="" placeholder="Nhập họ tên">
				</div>
				<div class="form-group col-md-12 form-inline">
					<label for="" class="col-md-5">Địa chỉ:</label>
					<textarea name="u_address" class="form-control"></textarea>
				</div>
				<div class="form-group col-md-12 form-inline">
					<label for="" class="col-md-5">Email:</label>
					<input type="text" class="form-control" id="" placeholder="Nhập họ tên">
				</div>
				<div class="form-group col-md-12 form-inline">
					<label for="" class="col-md-5">Số điện thoại:</label>
					<input type="text" class="form-control" id="" placeholder="Nhập họ tên">
				</div>
			
				<p class="text-center" style="margin-bottom: 40px"><button type="submit" class="btn btn-primary">ĐĂNG KÝ</button>
				<button type="submit" class="btn btn-primary">HỦY BỎ</button></p>
			</form>
		</div>
		<div class="col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.9684048402015!2d105.77390494346214!3d21.037742224903198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b6240401b9%3A0xb41bb48d633e1b80!2zxJDhuqFpIGjhu41jIFRoxrDGoW5nIG3huqFp!5e0!3m2!1svi!2sus!4v1457870665043" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div><?php }
}
?>