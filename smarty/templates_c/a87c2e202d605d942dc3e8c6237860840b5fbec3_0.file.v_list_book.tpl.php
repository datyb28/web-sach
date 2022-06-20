<?php /* Smarty version 3.1.24, created on 2016-04-01 17:51:59
         compiled from "C:/OpenServer/domains/doan.com/views/admin/sach/v_list_book.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1866856fe8b0f6af069_47078851%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a87c2e202d605d942dc3e8c6237860840b5fbec3' => 
    array (
      0 => 'C:/OpenServer/domains/doan.com/views/admin/sach/v_list_book.tpl',
      1 => 1458205817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1866856fe8b0f6af069_47078851',
  'variables' => 
  array (
    'prods' => 0,
    'row' => 0,
    'publisher_cate' => 0,
    'p' => 0,
    'author_cate' => 0,
    'a' => 0,
    'cates_parent_id_prod' => 0,
    'c' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe8b0f777a93_12735381',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe8b0f777a93_12735381')) {
function content_56fe8b0f777a93_12735381 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1866856fe8b0f6af069_47078851';
?>
<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý sách</li>
	<li class="active">Danh sách sách</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên sách</th>
					<th>Giá sách</th>
					<th>Hình ảnh</th>
					<th>Số trang</th>
					<th>Nhà xuất bản</th>
					<th>Tác giả</th>
					<th>Loại sách</th>
					<th>Trạng thái</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			<?php if (isset($_smarty_tpl->tpl_vars['prods']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['prods']->value;
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->p_name;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->p_price;?>
</td>
					<td><img src="../public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['row']->value->p_image;?>
" alt="" class="img-responsive img-img"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->p_page;?>
</td>
					<td><?php
$_from = $_smarty_tpl->tpl_vars['publisher_cate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
if (($_smarty_tpl->tpl_vars['row']->value->pl_id == $_smarty_tpl->tpl_vars['p']->value->pl_id)) {
echo $_smarty_tpl->tpl_vars['p']->value->pl_name;
}
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?></td>
					<td><?php
$_from = $_smarty_tpl->tpl_vars['author_cate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
if (($_smarty_tpl->tpl_vars['row']->value->a_id == $_smarty_tpl->tpl_vars['a']->value->a_id)) {
echo $_smarty_tpl->tpl_vars['a']->value->a_name;
}
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?></td>
					<td><?php
$_from = $_smarty_tpl->tpl_vars['cates_parent_id_prod']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
if (($_smarty_tpl->tpl_vars['row']->value->c_id == $_smarty_tpl->tpl_vars['c']->value->c_id)) {
echo $_smarty_tpl->tpl_vars['c']->value->c_name;
}
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?></td>
					<td><?php if (($_smarty_tpl->tpl_vars['row']->value->p_status == 1)) {?>Hiển thị<?php } else { ?>Không hiển thị<?php }?></td>
					<td><a href="editbook.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
" title="Sửa sản phẩm"> [Sửa]</a> <a href="?did=<?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
" onclick="return confirm('Bạn có chắc xóa sách mã <?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
 không?')" title="Xóa sản phẩm"> [Xóa]</a></td>
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