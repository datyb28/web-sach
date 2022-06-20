<?php /* Smarty version 3.1.24, created on 2016-03-29 16:44:30
         compiled from "C:/xampp/htdocs/doan18_3/views/admin/bai_viet/v_list_new.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2541156fa94ce186db7_49152910%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75c1dd90676fe87e68363de045fa03c466139a3e' => 
    array (
      0 => 'C:/xampp/htdocs/doan18_3/views/admin/bai_viet/v_list_new.tpl',
      1 => 1458206234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2541156fa94ce186db7_49152910',
  'variables' => 
  array (
    'dl_news_admin' => 0,
    'row' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fa94ce8d9004_95213166',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fa94ce8d9004_95213166')) {
function content_56fa94ce8d9004_95213166 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2541156fa94ce186db7_49152910';
?>
<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý bài viết</li>
	<li class="active">Danh sách bài viết</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên bài</th>
					<th>Hình ảnh</th>
					<th>Tóm tắt</th>
					<th>Trạng thái</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			<?php if (isset($_smarty_tpl->tpl_vars['dl_news_admin']->value)) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['dl_news_admin']->value;
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
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->n_id;?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->n_title;?>
</td>
					<td><img src="../public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['row']->value->n_image;?>
" alt="" width="80"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value->n_sum;?>
</td>
					<td><?php if (($_smarty_tpl->tpl_vars['row']->value->n_status == 1)) {?>Hiển thị<?php } else { ?>Không hiển thị<?php }?></td>
					<td><a href="editnew.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->n_id;?>
" title="Sửa tin tức"> [Sửa]</a> <a href="?did=<?php echo $_smarty_tpl->tpl_vars['row']->value->n_id;?>
" title="Xóa tin tức" onclick="return confirm('Bạn có chắc chắn muốn xóa tin <?php echo $_smarty_tpl->tpl_vars['row']->value->n_title;?>
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