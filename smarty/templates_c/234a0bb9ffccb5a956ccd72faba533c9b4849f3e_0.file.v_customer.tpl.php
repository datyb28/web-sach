<?php /* Smarty version 3.1.24, created on 2022-06-18 18:58:45
         compiled from "E:/xampp/htdocs/DoAnBanSach/views/admin/khach_hang/v_customer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30062260362ae0445764921_47779834%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '234a0bb9ffccb5a956ccd72faba533c9b4849f3e' => 
    array (
      0 => 'E:/xampp/htdocs/DoAnBanSach/views/admin/khach_hang/v_customer.tpl',
      1 => 1458189709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30062260362ae0445764921_47779834',
  'variables' => 
  array (
    'dl_customer' => 0,
    'row' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62ae044586aef2_37427508',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62ae044586aef2_37427508')) {
function content_62ae044586aef2_37427508 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:/xampp/htdocs/DoAnBanSach/smarty/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '30062260362ae0445764921_47779834';
?>
<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý khách hàng</li>
	<li class="active">Danh sách khách hàng</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>Mã</th>
					<th>Tên khách hàng</th>
					<th>Địa chỉ</th>
					<th>Số điện thoại</th>
					<th>Email</th>
					<th>Ghi chú</th> 
					<th>Ngày đăng ký</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			<?php if (isset($_smarty_tpl->tpl_vars['dl_customer']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['dl_customer']->value;
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->cus_id;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->cus_name;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->cus_address;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->cus_phone;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->cus_email;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->cus_note;?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value->cus_adddate);?>
</td>
					<td><a href="?did=<?php echo $_smarty_tpl->tpl_vars['row']->value->cus_id;?>
" title="Xóa khách hàng" onclick="return confirm('Bạn có chắc muốn xóa khách hàng có mã <?php echo $_smarty_tpl->tpl_vars['row']->value->cus_id;?>
 không?')"> [Xóa]</a></td>
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