<?php /* Smarty version 3.1.24, created on 2016-04-01 17:39:50
         compiled from "../smarty/templates/admin/ct-right.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1446356fe88361eeeb7_39705594%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bbe35857188cda5abc38ca56d9b7031519a716e' => 
    array (
      0 => '../smarty/templates/admin/ct-right.tpl',
      1 => 1458139182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1446356fe88361eeeb7_39705594',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe883620b9d2_85649822',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe883620b9d2_85649822')) {
function content_56fe883620b9d2_85649822 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1446356fe88361eeeb7_39705594';
?>
<section class="content-right">
	<div class="col-md-10 header-right">
		<div class="col-md-3">
			<h5 style="color: #FFF;">Xin chào, admin</h5>
		</div>
		<div class="col-md-3 col-md-offset-6">
			<ul style="list-style: none; padding:10px 0; margin-left:40px">
				<li style="float:left;margin-right: 10px;"><a href="" title="" style="color: #FFF"><span class="glyphicon glyphicon-pencil"></span> Đổi mật khẩu</a></li>
				<li><a href="logout.php" title="" style="color: #FFF"><span class="glyphicon glyphicon-log-out"></span> Đăng xuất</a></li>
			</ul>
		</div>
	</div>
	<section class="col-md-10 ct-right">
		
			<?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			<?php }?>
		</div><!--/.row-->
	</section>
	<div class="clearfix"></div>
</section>
<?php }
}
?>