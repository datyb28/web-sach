<?php /* Smarty version 3.1.24, created on 2016-03-21 11:29:38
         compiled from "smarty/templates/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1572756efcd121558a9_44662852%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b855ee5d39c7ca8978ce6f0d3e313eac7254897f' => 
    array (
      0 => 'smarty/templates/layout.tpl',
      1 => 1458227706,
      2 => 'file',
    ),
    'f2d79f440f420621283a9435c2e600809c99d3a2' => 
    array (
      0 => 'smarty/templates/slider.tpl',
      1 => 1458268016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1572756efcd121558a9_44662852',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56efcd12e695f0_18106610',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56efcd12e695f0_18106610')) {
function content_56efcd12e695f0_18106610 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1572756efcd121558a9_44662852';
echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php /*  Call merged included template "slider.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '384556efcd12c17ea3_60197825', 'content_56efcd12bb2ce2_18049505');
/*  End of included template "slider.tpl" */?>

<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("subcribe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?><?php
/*%%SmartyHeaderCode:384556efcd12c17ea3_60197825%%*/
if ($_valid && !is_callable('content_56efcd12bb2ce2_18049505')) {
function content_56efcd12bb2ce2_18049505 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '384556efcd12c17ea3_60197825';
?>
<!-- SLIDER -->
			<section class="slider">
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-id" data-slide-to="0" class=""></li>
						<li data-target="#carousel-id" data-slide-to="1" class=""></li>
						<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="public/layout/images/slider/c-slide-1.jpg" class="img-responsive">
							<div class="container">
								<div class="carousel-caption">
									<h1>.</h1>
									<p>.</p>
									<p><a class="btn btn-lg btn-success" href="#" role="button">Mua ngay</a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="public/layout/images/slider/c-slide-2" class="img-responsive">
							<div class="container">
								<div class="carousel-caption">
									<h1>.</h1>
									<p>.</p>
									<p><a class="btn btn-lg btn-success" href="#" role="button">Xem thêm</a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img src="public/layout/images/slider/c-slide-3.jpg" class="img-responsive">
							<div class="container">
								<div class="carousel-caption">
									<h1>.</h1>
									<p>.</p>
									<p><a class="btn btn-lg btn-success" href="#" role="button">Mua ngay</a></p>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</section><?php
/*/%%SmartyNocache:384556efcd12c17ea3_60197825%%*/
}
}
?>