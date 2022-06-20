<?php /* Smarty version 3.1.24, created on 2022-06-18 18:18:18
         compiled from "../smarty/templates/admin/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:175735885862adfacad74692_39816108%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2ed36f741b4676410f3a39e830edee7eb1da41f' => 
    array (
      0 => '../smarty/templates/admin/layout.tpl',
      1 => 1457332886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175735885862adfacad74692_39816108',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62adfacada44e8_48236019',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62adfacada44e8_48236019')) {
function content_62adfacada44e8_48236019 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '175735885862adfacad74692_39816108';
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