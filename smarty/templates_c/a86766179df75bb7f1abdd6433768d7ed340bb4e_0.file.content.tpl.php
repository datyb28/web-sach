<?php /* Smarty version 3.1.24, created on 2022-06-19 05:09:33
         compiled from "smarty/templates/content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:184767551962ae936de327d0_33566534%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a86766179df75bb7f1abdd6433768d7ed340bb4e' => 
    array (
      0 => 'smarty/templates/content.tpl',
      1 => 1456296930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184767551962ae936de327d0_33566534',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62ae936de34286_96832241',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62ae936de34286_96832241')) {
function content_62ae936de34286_96832241 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '184767551962ae936de327d0_33566534';
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