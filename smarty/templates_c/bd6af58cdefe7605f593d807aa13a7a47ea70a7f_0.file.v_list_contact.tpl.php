<?php /* Smarty version 3.1.24, created on 2016-03-31 09:34:50
         compiled from "C:/xampp/htdocs/doan18_3/views/admin/lien_he/v_list_contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1658856fcd31a202319_44120993%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd6af58cdefe7605f593d807aa13a7a47ea70a7f' => 
    array (
      0 => 'C:/xampp/htdocs/doan18_3/views/admin/lien_he/v_list_contact.tpl',
      1 => 1458206194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1658856fcd31a202319_44120993',
  'variables' => 
  array (
    'display_contact' => 0,
    'row' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fcd31a2c4e55_92262180',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fcd31a2c4e55_92262180')) {
function content_56fcd31a2c4e55_92262180 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1658856fcd31a202319_44120993';
?>
<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý liên hệ</li>
	<li class="active">Danh sách liên hệ</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên khách hàng</th>
					<th>Email</th>
					<th>Số điện thoại</th>
					<th>Ngày gửi</th>
					<th>Trạng thái</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			<?php if (isset($_smarty_tpl->tpl_vars['display_contact']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['display_contact']->value;
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->l_id;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->l_name;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->l_email;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->l_phone;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->l_adddate;?>
</td>
					<td><?php if (($_smarty_tpl->tpl_vars['row']->value->l_status == 0)) {?>Chưa xem<?php } else { ?>Đã xem<?php }?></td>
					<td><a href="displaycontact.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->u_id;?>
" title="Xem liên hệ"> [Xem]</a> <a href="?did=<?php echo $_smarty_tpl->tpl_vars['row']->value->u_id;?>
" onclick="return confirm('Bạn có chắc muốn xóa khách hàng có mã <?php echo $_smarty_tpl->tpl_vars['row']->value->u_id;?>
 không?')" title="Xóa liên hệ"> [Xóa]</a></td>
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