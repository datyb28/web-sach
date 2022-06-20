<?php /* Smarty version 3.1.24, created on 2016-03-21 11:30:25
         compiled from "../smarty/templates/admin/ct-right.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2883456efcd41dd9425_48278667%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b8054cf20233d4fcd8d61eb0b4057acccb0cd36' => 
    array (
      0 => '../smarty/templates/admin/ct-right.tpl',
      1 => 1458139182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2883456efcd41dd9425_48278667',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56efcd41df1669_46055995',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56efcd41df1669_46055995')) {
function content_56efcd41df1669_46055995 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2883456efcd41dd9425_48278667';
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