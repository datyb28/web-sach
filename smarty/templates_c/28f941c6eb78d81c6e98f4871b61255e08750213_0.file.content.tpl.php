<?php /* Smarty version 3.1.24, created on 2016-04-01 17:37:53
         compiled from "smarty/templates/content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2986956fe87c1999f97_81459242%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28f941c6eb78d81c6e98f4871b61255e08750213' => 
    array (
      0 => 'smarty/templates/content.tpl',
      1 => 1456296930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2986956fe87c1999f97_81459242',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe87c19e2f06_58334488',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe87c19e2f06_58334488')) {
function content_56fe87c19e2f06_58334488 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2986956fe87c1999f97_81459242';
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