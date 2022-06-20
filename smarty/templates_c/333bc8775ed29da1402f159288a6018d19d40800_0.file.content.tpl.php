<?php /* Smarty version 3.1.24, created on 2016-03-17 15:54:58
         compiled from "smarty/templates/content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2256556eac542454251_95496323%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '333bc8775ed29da1402f159288a6018d19d40800' => 
    array (
      0 => 'smarty/templates/content.tpl',
      1 => 1456296930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2256556eac542454251_95496323',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eac542462ca8_88055174',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eac542462ca8_88055174')) {
function content_56eac542462ca8_88055174 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2256556eac542454251_95496323';
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