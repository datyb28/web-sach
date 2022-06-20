<?php /* Smarty version 3.1.24, created on 2016-03-21 11:29:39
         compiled from "smarty/templates/content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:576156efcd13aaab51_70829561%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e6c42bea0f973e0c2c7c7417f018db716a7f2fa' => 
    array (
      0 => 'smarty/templates/content.tpl',
      1 => 1456296930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '576156efcd13aaab51_70829561',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56efcd13ae6ed3_28895187',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56efcd13ae6ed3_28895187')) {
function content_56efcd13ae6ed3_28895187 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '576156efcd13aaab51_70829561';
?>
<!-- CONTENT -->
<section class="content" id="content">
	<?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<?php }?>
</section><?php }
}
?>