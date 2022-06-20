<?php /* Smarty version 3.1.24, created on 2022-06-18 18:18:19
         compiled from "../smarty/templates/admin/head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:163947505662adfacb056e92_98920785%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e802ff4700c9cada5266c528d5157ac3cfbca30' => 
    array (
      0 => '../smarty/templates/admin/head.tpl',
      1 => 1458131164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163947505662adfacb056e92_98920785',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62adfacb0e1e17_08852226',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62adfacb0e1e17_08852226')) {
function content_62adfacb0e1e17_08852226 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '163947505662adfacb056e92_98920785';
?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

	<!-- Bootstrap CSS -->
	<link href="../public/layout/css/bootstrap.min.css" rel="stylesheet">
	<link href="../public/layout/css/admin.css" rel="stylesheet">
	<!-- jQuery -->
	<?php echo '<script'; ?>
 src="../public/layout/js/jquery.js"><?php echo '</script'; ?>
>
	<!-- Bootstrap JavaScript -->
	<?php echo '<script'; ?>
 src="../public/layout/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../public/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
	<!-- HTML5 Shim and Respond.js                              IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
			<![endif]-->
</head>
<body><?php }
}
?>