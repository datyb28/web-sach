<?php /* Smarty version 3.1.24, created on 2016-04-26 18:23:45
         compiled from "smarty/templates/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31175571f880151f835_79117521%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '334b30925caa0492a3a4237161b9208d4ef4ecc5' => 
    array (
      0 => 'smarty/templates/menu.tpl',
      1 => 1458226132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31175571f880151f835_79117521',
  'variables' => 
  array (
    'menu_home' => 0,
    'menu_sgk' => 0,
    'cates' => 0,
    'row' => 0,
    'menu_stk' => 0,
    'cates2' => 0,
    'menu_scn' => 0,
    'cates3' => 0,
    'menu_tt' => 0,
    'menu_lh' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571f88016c2d60_45914371',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f88016c2d60_45914371')) {
function content_571f88016c2d60_45914371 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31175571f880151f835_79117521';
?>
<!-- NAVIGATION -->
			<div class="wrap-nav">
				<div class="container">
					<div class="row">
						<nav class="navbar navbar-default" role="navigation">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="nav-op collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav">
									<li <?php if (isset($_smarty_tpl->tpl_vars['menu_home']->value)) {
echo $_smarty_tpl->tpl_vars['menu_home']->value;
}?>><a href="index.php" title="Trang chủ"><span class="glyphicon glyphicon-home"></span></a></li>
									<li <?php if (isset($_smarty_tpl->tpl_vars['menu_sgk']->value)) {
echo $_smarty_tpl->tpl_vars['menu_sgk']->value;
}?>><a href="sach_giao_khoa.php">Sách giáo khoa</a>
										<ul>
											<?php if (isset($_smarty_tpl->tpl_vars['cates']->value)) {?>
											<?php
$_from = $_smarty_tpl->tpl_vars['cates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
												<a href="sach_giao_khoa.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->c_id;?>
" title=""><li><?php echo $_smarty_tpl->tpl_vars['row']->value->c_name;?>
</li></a>
											<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
											<?php }?>
										</ul>
									</li>
									<li <?php if (isset($_smarty_tpl->tpl_vars['menu_stk']->value)) {
echo $_smarty_tpl->tpl_vars['menu_stk']->value;
}?>><a href="sach_tham_khao.php">Sách tham khảo</a>
										<ul>
											<?php if (isset($_smarty_tpl->tpl_vars['cates2']->value)) {?>
											<?php
$_from = $_smarty_tpl->tpl_vars['cates2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
												<a href="sach_tham_khao.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->c_id;?>
" title=""><li><?php echo $_smarty_tpl->tpl_vars['row']->value->c_name;?>
</li></a>
											<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
											<?php }?>
										</ul>
									</li>
									<li <?php if (isset($_smarty_tpl->tpl_vars['menu_scn']->value)) {
echo $_smarty_tpl->tpl_vars['menu_scn']->value;
}?>><a href="sach_chuyen_nganh.php">Sách chuyên ngành</a>
										<ul>
											<?php if (isset($_smarty_tpl->tpl_vars['cates3']->value)) {?>
											<?php
$_from = $_smarty_tpl->tpl_vars['cates3']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
												<a href="sach_chuyen_nganh.php?id=<?php echo $_smarty_tpl->tpl_vars['row']->value->c_id;?>
" title=""><li><?php echo $_smarty_tpl->tpl_vars['row']->value->c_name;?>
</li></a>
											<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
											<?php }?>
										</ul>
									</li>
									<li <?php if (isset($_smarty_tpl->tpl_vars['menu_tt']->value)) {
echo $_smarty_tpl->tpl_vars['menu_tt']->value;
}?>><a href="tin_tuc.php">Tin tức</a></li>
									<li <?php if (isset($_smarty_tpl->tpl_vars['menu_lh']->value)) {
echo $_smarty_tpl->tpl_vars['menu_lh']->value;
}?>><a href="lien_he.php">Liên hệ</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<form class="form-inline" style="margin-top:10px" action="xl_tim_kiem.php" method="post">
										<div class="form-group">
											<div class="input-group" style="margin:0px">
												<input type="text" class="form-control" id="search" placeholder="Tìm kiếm sản phẩm" style="border-radius:0px;" name="search">
												<div class="input-group-addon" style="border-radius:0px"><button type="submit" name="tim"><span class="glyphicon glyphicon-search"></span></button></div>
											</div>
										</div>
									</form>
								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			<div class="clearfix"></div><?php }
}
?>