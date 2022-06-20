<?php /* Smarty version 3.1.24, created on 2016-03-17 16:16:00
         compiled from "../smarty/templates/admin/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:344456eaca30591de6_96707899%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6637218e286b121389e4b5211e5ca886fa76a5c' => 
    array (
      0 => '../smarty/templates/admin/layout.tpl',
      1 => 1457332886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '344456eaca30591de6_96707899',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eaca305dd601_07259882',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eaca305dd601_07259882')) {
function content_56eaca305dd601_07259882 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '344456eaca30591de6_96707899';
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