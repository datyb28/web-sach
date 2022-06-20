<?php /* Smarty version 3.1.24, created on 2016-04-01 17:56:05
         compiled from "C:/OpenServer/domains/doan.com/views/admin/loai_sach/v_list_cate.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2375156fe8c05e023b2_44079066%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8880a5cf8cf9b86d217eff121ee4f147028b25ab' => 
    array (
      0 => 'C:/OpenServer/domains/doan.com/views/admin/loai_sach/v_list_cate.tpl',
      1 => 1458268191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2375156fe8c05e023b2_44079066',
  'variables' => 
  array (
    'cates_parent' => 0,
    'v' => 0,
    'cates_parent_id' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe8c060aa5b5_58363098',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe8c060aa5b5_58363098')) {
function content_56fe8c060aa5b5_58363098 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2375156fe8c05e023b2_44079066';
?>
<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý danh mục sách</li>
	<li class="active">Danh sách loại sách</li>
</ol>
<div class="row">
<div class="col-md-12">
	<h2 class="text-center text-primary" style="margin-top:0px">DANH MỤC LOẠI SÁCH</h2>
	<h5 class="text-center text-info" style="margin-bottom:20px; font-style:italic">Nhấp vào chuyên mục bạn cần để xem danh mục con</h5>
	<?php
$_from = $_smarty_tpl->tpl_vars['cates_parent']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo<?php echo $_smarty_tpl->tpl_vars['v']->value->c_id;?>
" title="Nhấn vào đây để thu gọn danh mục"><?php echo $_smarty_tpl->tpl_vars['v']->value->c_name;?>
</button> 
	<div id="demo<?php echo $_smarty_tpl->tpl_vars['v']->value->c_id;?>
" class="collapse">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th></th>
						<th>STT</th>
						<th>Tên danh mục</th>
						<th>Mô tả</th>
						<th>Trạng thái</th>
						<th>Chức năng</th>
					</tr>
				</thead>
				<tbody>
					<?php
$_from = $_smarty_tpl->tpl_vars['cates_parent_id']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['k']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
$foreach_k_Sav = $_smarty_tpl->tpl_vars['k'];
?>
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value->c_id;
$_tmp1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['k']->value->parent_id;
$_tmp2=ob_get_clean();
if ($_tmp1 == $_tmp2) {?>
					<tr>
						<td></td>
						<td><!-- <?php echo $_smarty_tpl->tpl_vars['k']->value->c_id;?>
 --></td>
						<td><?php echo $_smarty_tpl->tpl_vars['k']->value->c_name;?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['k']->value->c_summary;?>
</td>
						<td><?php if (($_smarty_tpl->tpl_vars['k']->value->c_status == 1)) {?>Hiển thị<?php } else { ?>Không hiển thị<?php }?></td>
						<td> <a href="" title="Xóa danh mục"> [Xóa]</a></td>
					</tr>
					<?php }?>
					<?php
$_smarty_tpl->tpl_vars['k'] = $foreach_k_Sav;
}
?>
				</tbody>
			</table>
		</div>
	</div>
	<?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
</div><?php }
}
?>