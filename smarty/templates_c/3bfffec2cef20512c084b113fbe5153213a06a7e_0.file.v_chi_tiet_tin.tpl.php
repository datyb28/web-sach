<?php /* Smarty version 3.1.24, created on 2016-03-17 18:05:24
         compiled from "C:/xampp/htdocs/doan/views/chi_tiet_san_pham/v_chi_tiet_tin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:526956eae3d47f3711_50582179%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bfffec2cef20512c084b113fbe5153213a06a7e' => 
    array (
      0 => 'C:/xampp/htdocs/doan/views/chi_tiet_san_pham/v_chi_tiet_tin.tpl',
      1 => 1458234323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '526956eae3d47f3711_50582179',
  'variables' => 
  array (
    'hienthithongtin' => 0,
    'prods_feature' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eae3d489b578_68331839',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eae3d489b578_68331839')) {
function content_56eae3d489b578_68331839 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '526956eae3d47f3711_50582179';
?>
<section class="breadcb">
	<h2>Trang sách chuyên ngành</h2>
	<p>Trang chủ / Tin tức / <?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->n_title;?>
</p>
</section>
<section class="sellmon">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h1><?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->n_title;?>
</h1>
				<p><strong>Ngày đăng: <?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->n_adddate;?>
</strong></p>
				<span><?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->n_content;?>
</span>
			</div>
			<div class="col-md-3">
				<!-- <h3 class="title-module-right">
					<span>Sách theo giá</span>
				</h3>
				<div id="slider-range"></div>
				<p>
					<label for="amount"></label>
					<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
					<button type="submit" class="btn btn-primary">LỌC</button>
				</p> -->
				<h3 class="title-module-right">
					<span>Sách nổi bật</span>
				</h3>
				<?php
$_from = $_smarty_tpl->tpl_vars['prods_feature']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
				<div class="cate-item">
					<a href="chi_tiet_sach.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
" title=""><img src="public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['row']->value->p_image;?>
" alt="" class="img-responsive"></a>
					<a href="chi_tiet_sach.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
" title=""><h4><?php echo $_smarty_tpl->tpl_vars['row']->value->p_name;?>
</h4></a>
					<p><?php echo number_format($_smarty_tpl->tpl_vars['row']->value->p_price);?>
đ</p>
					<div class="clearfix"></div>
				</div>
				<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
				<!-- <h3 class="title-module-right">
					<span>Sách theo tác giả</span>
				</h3>
				<div class="checkbox">
					<label><input type="checkbox" value="">Option 1</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" value="">Option 2</label>
				</div> -->
			</div>
		</div>
	</div>
</section><?php }
}
?>