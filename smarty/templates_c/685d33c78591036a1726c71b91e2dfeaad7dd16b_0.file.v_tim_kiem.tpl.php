<?php /* Smarty version 3.1.24, created on 2016-03-17 19:57:06
         compiled from "C:/xampp/htdocs/doan/views/san_pham/v_tim_kiem.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2817156eafe0290a865_94131166%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '685d33c78591036a1726c71b91e2dfeaad7dd16b' => 
    array (
      0 => 'C:/xampp/htdocs/doan/views/san_pham/v_tim_kiem.tpl',
      1 => 1458241022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2817156eafe0290a865_94131166',
  'variables' => 
  array (
    'chon' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eafe0298d512_86741786',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eafe0298d512_86741786')) {
function content_56eafe0298d512_86741786 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2817156eafe0290a865_94131166';
?>
<section class="breadcb">
  <h2>Trang tìm kiếm</h2>
  <p>Trang chủ / Tìm kiếm</p>
</section>
<section class="sellmon">
  <div class="container">
    <div class="row">
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
        <!-- <h3 class="title-module-right">
          <span>Sách khác</span>
        </h3>
        <ul class="nav nav-pills nav-stacked">
          <?php if (isset($_smarty_tpl->tpl_vars['chon']->value)) {?>
          <?php
$_from = $_smarty_tpl->tpl_vars['chon']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
          <li><a href="?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
"><span class="glyphicon glyphicon-book"></span> <?php echo $_smarty_tpl->tpl_vars['row']->value->p_name;?>
</a></li>
          <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
          <?php }?>
        </ul> -->
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
      <div class="col-md-12">
        <div class="col-md-12">
        <div class="col-md-12">
        <?php if (isset($_smarty_tpl->tpl_vars['chon']->value)) {?>
        <?php
$_from = $_smarty_tpl->tpl_vars['chon']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
        <div class="col-md-3">
          <div class="mon-item">
            <a href="chi_tiet_sach.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
" title=""><img src="public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['row']->value->p_image;?>
" alt="" class="img-responsive"></a>
            <div class="box-item-detail">
            </div>
            <div class="mon-item-detail">
              <h4 class="text-center"><a href="chi_tiet_sach.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
" title=""><?php echo $_smarty_tpl->tpl_vars['row']->value->p_name;?>
</a></h4>
              <p class="text-center"><?php echo number_format($_smarty_tpl->tpl_vars['row']->value->p_price);?>
 vnđ</p>
              <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->p_price;?>
"/>
              <span style="margin-left: 10px">Số lượng mua</span>
              <input  class="col-md-offset-2" type="text" value="1" size="2" id="soluong<?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
" style="text-align: center;" /></p>
            </div>
            <p class="text-center"><a href="javascript:void(0)" title="" id="<?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
" class="button-1"><button type="submit" class="btn-item btn btn-danger add-to-cart" title="Thêm vào giỏ hàng">Mua hàng</button></a> <a href="chi_tiet_sach.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->p_id;?>
" title=""><button class="btn-item btn add-to-cart" title="Xem chi tiết"><span class="glyphicon glyphicon-eye-open"></span></button></a></p>
          </div>
        </div>
        <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
        <?php }?>
        <div class="col-md-6 col-md-offset-4">
          <ul class = "pagination">
            
          </ul>
        </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section><?php }
}
?>