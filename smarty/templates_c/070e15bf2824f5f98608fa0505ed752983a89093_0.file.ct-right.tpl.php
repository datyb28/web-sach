<?php /* Smarty version 3.1.24, created on 2022-06-19 05:09:28
         compiled from "../smarty/templates/admin/ct-right.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:57560848662ae9368d2b4e5_19166207%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '070e15bf2824f5f98608fa0505ed752983a89093' => 
    array (
      0 => '../smarty/templates/admin/ct-right.tpl',
      1 => 1458139182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57560848662ae9368d2b4e5_19166207',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62ae9368d32019_83504107',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62ae9368d32019_83504107')) {
function content_62ae9368d32019_83504107 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '57560848662ae9368d2b4e5_19166207';
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