<?php /* Smarty version 3.1.24, created on 2016-04-28 15:36:35
         compiled from "E:/OpenServer/domains/doan.com/views/admin/khach_hang/v_bill.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19347572203d393d4a6_79392250%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27cb5efb5232ab63ce5d3cc78c5f0cdaca7636ea' => 
    array (
      0 => 'E:/OpenServer/domains/doan.com/views/admin/khach_hang/v_bill.tpl',
      1 => 1458264597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19347572203d393d4a6_79392250',
  'variables' => 
  array (
    'dl_bill' => 0,
    'row' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572203d3af6854_52947492',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572203d3af6854_52947492')) {
function content_572203d3af6854_52947492 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19347572203d393d4a6_79392250';
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