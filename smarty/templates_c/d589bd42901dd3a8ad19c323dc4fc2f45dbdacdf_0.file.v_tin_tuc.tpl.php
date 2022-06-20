<?php /* Smarty version 3.1.24, created on 2016-03-17 18:00:14
         compiled from "C:/xampp/htdocs/doan/views/tin_tuc/v_tin_tuc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1618056eae29e71a974_89182697%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd589bd42901dd3a8ad19c323dc4fc2f45dbdacdf' => 
    array (
      0 => 'C:/xampp/htdocs/doan/views/tin_tuc/v_tin_tuc.tpl',
      1 => 1458234013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1618056eae29e71a974_89182697',
  'variables' => 
  array (
    'prods_new' => 0,
    'row' => 0,
    'prods_feature' => 0,
    'dl_news' => 0,
    'listpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eae29e7fb041_16454276',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eae29e7fb041_16454276')) {
function content_56eae29e7fb041_16454276 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:/xampp/htdocs/doan/smarty/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1618056eae29e71a974_89182697';
?>
<section class="breadcb">
	<h2>Trang tin tức</h2>
	<p>Trang chủ / Tin tức</p>
</section>
<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3 class="title-module-right">
					<span>Sách mới nhất</span>
				</h3>
				<?php
$_from = $_smarty_tpl->tpl_vars['prods_new']->value;
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
			</div>
			<div class="col-md-9">
				<?php
$_from = $_smarty_tpl->tpl_vars['dl_news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
				<div class="col-md-6">
					<div class="blog-item blog-item-news">
						<div class="img-hid"><a href="chi_tiet_tin.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->n_id;?>
" title=""><img src="public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['row']->value->n_image;?>
" alt="" class="img-responsive"></a></div>
						<h4><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value->n_adddate);?>
</h4>
						<a href="chi_tiet_tin.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->n_id;?>
" title=""><h3><?php echo $_smarty_tpl->tpl_vars['row']->value->n_title;?>
</h3></a>
						<p><?php echo $_smarty_tpl->tpl_vars['row']->value->n_sum;?>
</p>
						<span class="readmore"><a href="chi_tiet_tin.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->n_id;?>
" title="">XEM CHI TIẾT </a><span class="glyphicon glyphicon-arrow-right"></span></span>
					</div>
				</div>
				<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>

				<div class="col-md-7 col-md-offset-5"><?php echo $_smarty_tpl->tpl_vars['listpage']->value;?>
</div>
			</div>
		</div>
	</div>
</section><?php }
}
?>