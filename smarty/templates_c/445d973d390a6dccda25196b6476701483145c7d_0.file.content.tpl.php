<?php /* Smarty version 3.1.24, created on 2022-06-18 18:14:59
         compiled from "smarty/templates/content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:157268643162adfa03ee5df4_16272218%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '445d973d390a6dccda25196b6476701483145c7d' => 
    array (
      0 => 'smarty/templates/content.tpl',
      1 => 1456296930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157268643162adfa03ee5df4_16272218',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62adfa03f22df0_51625170',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62adfa03f22df0_51625170')) {
function content_62adfa03f22df0_51625170 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '157268643162adfa03ee5df4_16272218';
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