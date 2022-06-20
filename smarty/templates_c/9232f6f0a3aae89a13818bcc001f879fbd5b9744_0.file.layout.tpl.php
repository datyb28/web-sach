<?php /* Smarty version 3.1.24, created on 2016-04-01 17:39:49
         compiled from "../smarty/templates/admin/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2102456fe8835f06be8_70901149%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9232f6f0a3aae89a13818bcc001f879fbd5b9744' => 
    array (
      0 => '../smarty/templates/admin/layout.tpl',
      1 => 1457332886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2102456fe8835f06be8_70901149',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe883608d9a0_62673138',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe883608d9a0_62673138')) {
function content_56fe883608d9a0_62673138 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2102456fe8835f06be8_70901149';
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