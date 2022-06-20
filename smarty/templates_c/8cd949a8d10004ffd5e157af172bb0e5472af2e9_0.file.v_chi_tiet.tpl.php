<?php /* Smarty version 3.1.24, created on 2016-03-24 05:27:18
         compiled from "C:/xampp/htdocs/doan18_3/views/chi_tiet_san_pham/v_chi_tiet.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:489556f36ca6b3de40_49471313%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cd949a8d10004ffd5e157af172bb0e5472af2e9' => 
    array (
      0 => 'C:/xampp/htdocs/doan18_3/views/chi_tiet_san_pham/v_chi_tiet.tpl',
      1 => 1458216492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '489556f36ca6b3de40_49471313',
  'variables' => 
  array (
    'prods_detail' => 0,
    'cates_parent_id_prod' => 0,
    'cates_parent' => 0,
    'ci' => 0,
    'ca' => 0,
    'c' => 0,
    'mang' => 0,
    'row' => 0,
    'author_cate' => 0,
    'a' => 0,
    'publisher_cate' => 0,
    'p' => 0,
    'prods_detail_id' => 0,
    'pi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56f36ca6dc38d8_45728112',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f36ca6dc38d8_45728112')) {
function content_56f36ca6dc38d8_45728112 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '489556f36ca6b3de40_49471313';
if (isset($_smarty_tpl->tpl_vars['prods_detail']->value)) {?>
<section class="breadcb">
	<h2>Trang chi tiết sản phẩm</h2>
	<p>Trang chủ / <?php
$_from = $_smarty_tpl->tpl_vars['cates_parent_id_prod']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ca']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->value) {
$_smarty_tpl->tpl_vars['ca']->_loop = true;
$foreach_ca_Sav = $_smarty_tpl->tpl_vars['ca'];
$_from = $_smarty_tpl->tpl_vars['cates_parent']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['ci'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['ci']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ci']->value) {
$_smarty_tpl->tpl_vars['ci']->_loop = true;
$foreach_ci_Sav = $_smarty_tpl->tpl_vars['ci'];
if (($_smarty_tpl->tpl_vars['ci']->value->c_id == $_smarty_tpl->tpl_vars['ca']->value->parent_id && $_smarty_tpl->tpl_vars['prods_detail']->value->c_id == $_smarty_tpl->tpl_vars['ca']->value->c_id)) {
echo $_smarty_tpl->tpl_vars['ci']->value->c_name;
}
$_smarty_tpl->tpl_vars['ci'] = $foreach_ci_Sav;
}
$_smarty_tpl->tpl_vars['ca'] = $foreach_ca_Sav;
}
?> / <?php
$_from = $_smarty_tpl->tpl_vars['cates_parent_id_prod']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
if (($_smarty_tpl->tpl_vars['prods_detail']->value->c_id == $_smarty_tpl->tpl_vars['c']->value->c_id)) {
echo $_smarty_tpl->tpl_vars['c']->value->c_name;
}
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?> / <?php echo $_smarty_tpl->tpl_vars['prods_detail']->value->p_name;?>
</p>
</section>

<section class="detail-prod">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['prods_detail']->value->p_image;?>
">
							<img src="public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['prods_detail']->value->p_image;?>
" />
						</li>
					<?php
$_from = $_smarty_tpl->tpl_vars['mang']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
					<?php if ($_smarty_tpl->tpl_vars['row']->value != '') {?>
						<li data-thumb="public/images/thumbs/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
">
							<img src="public/images/thumbs/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" />
						</li>
						<?php }?>
					<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Thông tin sách</a></li>
					<li><a data-toggle="tab" href="#menu1">Bình luận & Đánh giá</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<h3><?php echo $_smarty_tpl->tpl_vars['prods_detail']->value->p_name;?>
</h3>
						<h4><?php echo $_smarty_tpl->tpl_vars['prods_detail']->value->p_describe;?>
</h4>
						<div class="col-md-6">
							<h5>Tác giả:</h5>
							<h5>Số trang:</h5>
							<h5>Nhà xuất bản:</h5>
							<h5>Giá:</h5>
							<h5>Chuyên mục:</h5>
							<h5>Nhập số lượng cần mua:</h5>
						</div>
						<div class="col-md-6" style="margin-bottom:30px">
							<h5><?php
$_from = $_smarty_tpl->tpl_vars['author_cate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
if (($_smarty_tpl->tpl_vars['prods_detail']->value->a_id == $_smarty_tpl->tpl_vars['a']->value->a_id)) {
echo $_smarty_tpl->tpl_vars['a']->value->a_name;
}
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?></h5>
							<h5><?php echo $_smarty_tpl->tpl_vars['prods_detail']->value->p_page;?>
</h5>
							<h5><?php
$_from = $_smarty_tpl->tpl_vars['publisher_cate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
if (($_smarty_tpl->tpl_vars['prods_detail']->value->pl_id == $_smarty_tpl->tpl_vars['p']->value->pl_id)) {
echo $_smarty_tpl->tpl_vars['p']->value->pl_name;
}
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?></h5>
							<h5><?php echo number_format($_smarty_tpl->tpl_vars['prods_detail']->value->p_price);?>
</h5>
							<h5><?php
$_from = $_smarty_tpl->tpl_vars['cates_parent_id_prod']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
if (($_smarty_tpl->tpl_vars['prods_detail']->value->c_id == $_smarty_tpl->tpl_vars['c']->value->c_id)) {
echo $_smarty_tpl->tpl_vars['c']->value->c_name;
}
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?></h5>
							<input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['prods_detail']->value->p_id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['prods_detail']->value->p_price;?>
"/>
							<h5><input  class="" type="text" value="1" size="2" id="soluong<?php echo $_smarty_tpl->tpl_vars['prods_detail']->value->p_id;?>
" style="text-align: center;" /></h5>
						</div>
						<a href="javascript:void(0)" title="" id="<?php echo $_smarty_tpl->tpl_vars['prods_detail']->value->p_id;?>
" class="button-1"><button type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Thêm vào giỏ</button></a>
					</div>
	<?php }?>
					<div id="menu1" class="tab-pane fade">
						<p>
							<div class="fb-comments" data-href="http://localhost/doan/chi_tiet_sach.php?id=<?php echo $_smarty_tpl->tpl_vars['prods_detail']->value->p_id;?>
" data-numposts="10"></div>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<h3 class="title-module-right">
					<span>Sách liên quan</span>
				</h3>
			</div>
			<section class="sellmon">
				<?php
$_from = $_smarty_tpl->tpl_vars['prods_detail_id']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pi'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pi']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pi']->value) {
$_smarty_tpl->tpl_vars['pi']->_loop = true;
$foreach_pi_Sav = $_smarty_tpl->tpl_vars['pi'];
?>
				<div class="col-md-5ths">
					<div class="mon-item">
						<a href="chi_tiet_sach.php?id=<?php echo $_smarty_tpl->tpl_vars['pi']->value->p_id;?>
" title="Click để xem chi tiết sách"><img src="public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['pi']->value->p_image;?>
" alt="" class="img-responsive"></a>
						<div class="box-item-detail">
						</div>
						<div class="mon-item-detail">
							<a href="chi_tiet_sach.php?id=<?php echo $_smarty_tpl->tpl_vars['pi']->value->p_id;?>
" title="Click để xem chi tiết sách"><h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['pi']->value->p_name;?>
</h4></a>
							<p class="text-center"><?php echo number_format($_smarty_tpl->tpl_vars['pi']->value->p_price);?>
đ</p>
							<input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['pi']->value->p_id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['pi']->value->p_price;?>
"/>
							<span style="margin-left: 10px">Số lượng mua</span>
							<input  class="col-md-offset-3" type="text" value="1" size="2" id="soluong<?php echo $_smarty_tpl->tpl_vars['pi']->value->p_id;?>
" style="text-align: center; margin-bottom: 20px;" />
						</div>
						<p class="text-center"><a href="javascript:void(0)" title="" id="<?php echo $_smarty_tpl->tpl_vars['pi']->value->p_id;?>
" class="button-1"><button type="submit" class="btn-item btn btn-danger add-to-cart" title="Thêm vào giỏ hàng">Mua hàng</button></a> <a href="chi_tiet_sach.php?id=<?php echo $_smarty_tpl->tpl_vars['pi']->value->p_id;?>
" title=""><button class="btn-item btn add-to-cart" title="Xem chi tiết"><span class="glyphicon glyphicon-eye-open"></span></button></a></p>
					</div>
				</div>
				<?php
$_smarty_tpl->tpl_vars['pi'] = $foreach_pi_Sav;
}
?>
			</section>
		</div>
	</div>
</section><?php }
}
?>