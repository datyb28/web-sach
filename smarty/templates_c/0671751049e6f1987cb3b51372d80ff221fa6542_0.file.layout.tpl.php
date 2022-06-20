<?php /* Smarty version 3.1.24, created on 2016-03-21 11:30:25
         compiled from "../smarty/templates/admin/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2114356efcd41be26c4_42018281%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0671751049e6f1987cb3b51372d80ff221fa6542' => 
    array (
      0 => '../smarty/templates/admin/layout.tpl',
      1 => 1457332886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2114356efcd41be26c4_42018281',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56efcd41c5af33_23135638',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56efcd41c5af33_23135638')) {
function content_56efcd41c5af33_23135638 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2114356efcd41be26c4_42018281';
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