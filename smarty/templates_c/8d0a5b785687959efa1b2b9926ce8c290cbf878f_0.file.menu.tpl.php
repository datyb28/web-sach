<?php /* Smarty version 3.1.24, created on 2022-06-18 18:14:59
         compiled from "smarty/templates/menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:46059245562adfa03cda3e6_07954058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d0a5b785687959efa1b2b9926ce8c290cbf878f' => 
    array (
      0 => 'smarty/templates/menu.tpl',
      1 => 1458226132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46059245562adfa03cda3e6_07954058',
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
  'unifunc' => 'content_62adfa03de1a90_69024676',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62adfa03de1a90_69024676')) {
function content_62adfa03de1a90_69024676 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '46059245562adfa03cda3e6_07954058';
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
}?>><a href="index.php" title="Trang ch???"><span class="glyphicon glyphicon-home"></span></a></li>
									<li <?php if (isset($_smarty_tpl->tpl_vars['menu_sgk']->value)) {
echo $_smarty_tpl->tpl_vars['menu_sgk']->value;
}?>><a href="sach_giao_khoa.php">S??ch gi??o khoa</a>
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
}?>><a href="sach_tham_khao.php">S??ch tham kh???o</a>
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
}?>><a href="sach_chuyen_nganh.php">S??ch chuy??n ng??nh</a>
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
}?>><a href="tin_tuc.php">Tin t???c</a></li>
									<li <?php if (isset($_smarty_tpl->tpl_vars['menu_lh']->value)) {
echo $_smarty_tpl->tpl_vars['menu_lh']->value;
}?>><a href="lien_he.php">Li??n h???</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<form class="form-inline" style="margin-top:10px" action="xl_tim_kiem.php" method="post">
										<div class="form-group">
											<div class="input-group" style="margin:0px">
												<input type="text" class="form-control" id="search" placeholder="T??m ki???m s???n ph???m" style="border-radius:0px;" name="search">
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