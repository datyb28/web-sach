<?php /* Smarty version 3.1.24, created on 2022-06-19 05:09:28
         compiled from "../smarty/templates/admin/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:139567609262ae9368cce091_83582310%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ad478d2ad1c85d58c1b2d0043a552f0477bcf71' => 
    array (
      0 => '../smarty/templates/admin/layout.tpl',
      1 => 1457332886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139567609262ae9368cce091_83582310',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62ae9368d112a5_27257275',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62ae9368d112a5_27257275')) {
function content_62ae9368d112a5_27257275 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '139567609262ae9368cce091_83582310';
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