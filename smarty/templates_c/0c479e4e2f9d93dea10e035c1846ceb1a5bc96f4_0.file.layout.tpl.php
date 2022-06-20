<?php /* Smarty version 3.1.24, created on 2016-04-28 15:36:28
         compiled from "../smarty/templates/admin/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29585572203cc5720a1_87552547%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c479e4e2f9d93dea10e035c1846ceb1a5bc96f4' => 
    array (
      0 => '../smarty/templates/admin/layout.tpl',
      1 => 1457332886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29585572203cc5720a1_87552547',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572203cc5ccef6_30816574',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572203cc5ccef6_30816574')) {
function content_572203cc5ccef6_30816574 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29585572203cc5720a1_87552547';
echo $_smarty_tpl->getSubTemplate ("admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ct-left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/ct-right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>