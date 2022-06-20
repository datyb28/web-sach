<?php /* Smarty version 3.1.24, created on 2022-06-18 18:18:53
         compiled from "E:/xampp/htdocs/DoAnBanSach/views/admin/khach_hang/v_bill.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16814906762adfaedd92b74_49667076%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b6e4553473c6a28b7561d28a9c98f814abcd48d' => 
    array (
      0 => 'E:/xampp/htdocs/DoAnBanSach/views/admin/khach_hang/v_bill.tpl',
      1 => 1458264597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16814906762adfaedd92b74_49667076',
  'variables' => 
  array (
    'dl_bill' => 0,
    'row' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62adfaeddc60d3_35114054',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62adfaeddc60d3_35114054')) {
function content_62adfaeddc60d3_35114054 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16814906762adfaedd92b74_49667076';
?>
<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý đơn hàng</li>
	<li class="active">Danh sách đơn hàng</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>Tên khách hàng</th>
					<th>Mã hóa đơn</th>
					<th>Tổng tiền</th>
					<th>Trạng thái</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			<?php if (isset($_smarty_tpl->tpl_vars['dl_bill']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['dl_bill']->value;
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->cus_name;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->tran_id;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->tran_totalprice;?>
</td>
					<td><?php if (($_smarty_tpl->tpl_vars['row']->value->cus_status == 0)) {?>Chưa xem<?php } elseif (($_smarty_tpl->tpl_vars['row']->value->cus_status == 1)) {?>Đang xử lý<?php } else { ?>Đã thanh toán<?php }?></td>
					<td><a href="detailbill.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->tran_id;?>
&cus_id=<?php echo $_smarty_tpl->tpl_vars['row']->value->cus_id;?>
" title="Xem đơn hàng"> [Xem & cập nhật]</a>
					<?php if (($_smarty_tpl->tpl_vars['row']->value->cus_status == 0)) {?><a href="?did=<?php echo $_smarty_tpl->tpl_vars['row']->value->cus_id;?>
" title="Xóa đơn hàng" onclick="return confirm('Bạn có chắc muốn xóa đơn hàng có mã <?php echo $_smarty_tpl->tpl_vars['row']->value->cus_id;?>
 không?')"> [Xóa đơn hàng]</a><?php }?></td>
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