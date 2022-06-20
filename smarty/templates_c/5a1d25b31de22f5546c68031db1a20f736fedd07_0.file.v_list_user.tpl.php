<?php /* Smarty version 3.1.24, created on 2022-06-18 18:19:21
         compiled from "E:/xampp/htdocs/DoAnBanSach/views/admin/thanh_vien/v_list_user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:51831431862adfb09f3a175_75239620%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a1d25b31de22f5546c68031db1a20f736fedd07' => 
    array (
      0 => 'E:/xampp/htdocs/DoAnBanSach/views/admin/thanh_vien/v_list_user.tpl',
      1 => 1458206306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51831431862adfb09f3a175_75239620',
  'variables' => 
  array (
    'users' => 0,
    'row' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62adfb0a026a22_89744218',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62adfb0a026a22_89744218')) {
function content_62adfb0a026a22_89744218 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '51831431862adfb09f3a175_75239620';
?>
<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý thành viên</li>
	<li class="active">Danh sách thành viên</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tài khoản</th>
					<th>Tên thành viên</th>
					<th>Loại tài khoản</th>
					<th>Email</th>
					<th>Số điện thoại</th>
					<th>Địa chỉ</th>
					<th>Trạng thái</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			<?php if (isset($_smarty_tpl->tpl_vars['users']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->u_id;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->u_account;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->u_name;?>
</td>
					<td><?php if (($_smarty_tpl->tpl_vars['row']->value->u_permiss == 1)) {?>Thành viên<?php } else { ?>Quản trị viên<?php }?></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->u_email;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->u_phone;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->u_address;?>
</td>
					<td><?php if (($_smarty_tpl->tpl_vars['row']->value->u_status == 1)) {?>Kích hoạt<?php } else { ?>Không kích hoạt<?php }?></td>
					<td><a href="edituser.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->u_id;?>
" title="Sửa thành viên"> [Sửa]</a> <a href="?did=<?php echo $_smarty_tpl->tpl_vars['row']->value->u_id;?>
" onclick="return confirm('Bạn có chắc chắn muốn xóa thành viên mã <?php echo $_smarty_tpl->tpl_vars['row']->value->u_id;?>
 không?')" title="Xóa thành viên"> [Xóa]</a></td>
				</tr>
				<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
				<?php }?>
					</tbody>
				</table>
				<div class="col-md-offset-5"><?php echo $_smarty_tpl->tpl_vars['listpage']->value;?>
</div>
			</div>
		</div><?php }
}
?>