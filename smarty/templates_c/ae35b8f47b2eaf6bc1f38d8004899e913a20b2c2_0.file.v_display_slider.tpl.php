<?php /* Smarty version 3.1.24, created on 2022-06-18 18:19:24
         compiled from "E:/xampp/htdocs/DoAnBanSach/views/admin/slider/v_display_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:56975900462adfb0c8c3c38_92521500%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae35b8f47b2eaf6bc1f38d8004899e913a20b2c2' => 
    array (
      0 => 'E:/xampp/htdocs/DoAnBanSach/views/admin/slider/v_display_slider.tpl',
      1 => 1458241438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56975900462adfb0c8c3c38_92521500',
  'variables' => 
  array (
    'dl_sliders' => 0,
    'row' => 0,
    'row2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62adfb0c8f5454_95008231',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62adfb0c8f5454_95008231')) {
function content_62adfb0c8f5454_95008231 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '56975900462adfb0c8c3c38_92521500';
?>
<ol class="breadcrumb">
   	<li>Trang tổng quan</li>
	<li>Quản lý slider</li>
	<li class="active">Danh sách slider</li>
</ol>
<div class="row">
	<div class="col-md-7">
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>STT</th>
						<th>Hình ảnh</th>
						<th>Đường dẫn tới</th>	
						<th>Trạng thái</th>
						<th>Chức năng</th>
					</tr>
				</thead>
				<tbody>
					<?php if (isset($_smarty_tpl->tpl_vars['dl_sliders']->value)) {?>
					<?php
$_from = $_smarty_tpl->tpl_vars['dl_sliders']->value;
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
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value->s_id;?>
</td>
						<td><img src="../public/images/slider/<?php echo $_smarty_tpl->tpl_vars['row']->value->s_image;?>
" alt="" width="80"></td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value->s_link;?>
</td>
						<td><?php if (($_smarty_tpl->tpl_vars['row']->value->s_status == 1)) {?>Hiển thị<?php } else { ?>Không hiển thị<?php }?></td>
						<td><a href="editslider.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->s_id;?>
" title="Sửa slider"> [Cập nhật]</a></td>
						</tr>
						<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	<div class="col-md-5">
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
				<?php
$_from = $_smarty_tpl->tpl_vars['dl_sliders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row2']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row2']->value) {
$_smarty_tpl->tpl_vars['row2']->_loop = true;
$foreach_row2_Sav = $_smarty_tpl->tpl_vars['row2'];
?>
				<div class="item <?php if (($_smarty_tpl->tpl_vars['row2']->value->s_active == 1)) {?>active<?php }?>">
					<img src="../public/layout/images/slider/<?php echo $_smarty_tpl->tpl_vars['row2']->value->s_image;?>
" class="img-responsive">
					<div class="container">
						<div class="carousel-caption">
							<h1>.</h1>
							<p>.</p>
							<p><a class="btn btn-lg btn-success" href="../<?php echo $_smarty_tpl->tpl_vars['row2']->value->s_link;?>
" role="button"><?php echo $_smarty_tpl->tpl_vars['row2']->value->s_button;?>
</a></p>
						</div>
					</div>
				</div>
				<?php
$_smarty_tpl->tpl_vars['row2'] = $foreach_row2_Sav;
}
?>
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div><?php }
}
?>