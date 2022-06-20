<?php /* Smarty version 3.1.24, created on 2016-04-28 15:36:28
         compiled from "../smarty/templates/admin/head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4854572203cc6320d3_70310522%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df744a139e228af8e788a1bb6ae8c6ec1919d71a' => 
    array (
      0 => '../smarty/templates/admin/head.tpl',
      1 => 1458131164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4854572203cc6320d3_70310522',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572203cc691491_48685776',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572203cc691491_48685776')) {
function content_572203cc691491_48685776 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4854572203cc6320d3_70310522';
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