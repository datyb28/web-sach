<?php /* Smarty version 3.1.24, created on 2016-03-24 05:28:07
         compiled from "C:/xampp/htdocs/doan18_3/views/chi_tiet_san_pham/v_chi_tiet_tin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:385756f36cd76d02e9_87238212%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79c2c5ba424d4a898a6df2e8584000831217ddbc' => 
    array (
      0 => 'C:/xampp/htdocs/doan18_3/views/chi_tiet_san_pham/v_chi_tiet_tin.tpl',
      1 => 1458234323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '385756f36cd76d02e9_87238212',
  'variables' => 
  array (
    'hienthithongtin' => 0,
    'prods_feature' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56f36cd778daf4_05049885',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f36cd778daf4_05049885')) {
function content_56f36cd778daf4_05049885 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '385756f36cd76d02e9_87238212';
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