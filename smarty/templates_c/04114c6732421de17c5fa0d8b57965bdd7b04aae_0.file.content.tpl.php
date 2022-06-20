<?php /* Smarty version 3.1.24, created on 2016-04-26 18:23:45
         compiled from "smarty/templates/content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11252571f8801754df3_04199665%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04114c6732421de17c5fa0d8b57965bdd7b04aae' => 
    array (
      0 => 'smarty/templates/content.tpl',
      1 => 1456296930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11252571f8801754df3_04199665',
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571f88017a2821_37666904',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f88017a2821_37666904')) {
function content_571f88017a2821_37666904 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11252571f8801754df3_04199665';
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