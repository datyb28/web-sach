<?php /* Smarty version 3.1.24, created on 2016-03-31 09:34:15
         compiled from "C:/xampp/htdocs/doan18_3/views/admin/khach_hang/v_customer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1692656fcd2f7771728_80938404%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca4845fe5c6694ad897506f1b676602c0f1485a2' => 
    array (
      0 => 'C:/xampp/htdocs/doan18_3/views/admin/khach_hang/v_customer.tpl',
      1 => 1458189709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1692656fcd2f7771728_80938404',
  'variables' => 
  array (
    'dl_customer' => 0,
    'row' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fcd2f7af75d4_32639864',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fcd2f7af75d4_32639864')) {
function content_56fcd2f7af75d4_32639864 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:/xampp/htdocs/doan18_3/smarty/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1692656fcd2f7771728_80938404';
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