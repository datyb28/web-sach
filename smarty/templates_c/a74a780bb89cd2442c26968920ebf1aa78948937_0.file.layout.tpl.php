<?php /* Smarty version 3.1.24, created on 2016-04-28 15:21:08
         compiled from "smarty/templates/ct_san_pham/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5655722003445da72_33700963%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a74a780bb89cd2442c26968920ebf1aa78948937' => 
    array (
      0 => 'smarty/templates/ct_san_pham/layout.tpl',
      1 => 1458137551,
      2 => 'file',
    ),
    '6d51eb982f252ffe0294ad350230f201cac8518e' => 
    array (
      0 => 'smarty/templates/layout.tpl',
      1 => 1458227706,
      2 => 'file',
    ),
    'd098ba614639b8a5a3588ca57752a1494c46ce9c' => 
    array (
      0 => 'smarty/templates/slider.tpl',
      1 => 1458268016,
      2 => 'file',
    ),
    '1d6084a3fb892f9daa0ae699e7a451bdd1d067cc' => 
    array (
      0 => '1d6084a3fb892f9daa0ae699e7a451bdd1d067cc',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '5655722003445da72_33700963',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572200351b4636_17755174',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572200351b4636_17755174')) {
function content_572200351b4636_17755174 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5655722003445da72_33700963';
echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '5655722003445da72_33700963';
?>

<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("subcribe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?><?php
/*%%SmartyHeaderCode:246355722003507b224_27784412%%*/
if ($_valid && !is_callable('content_57220035078f05_85159659')) {
function content_57220035078f05_85159659 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '246355722003507b224_27784412';
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
/*/%%SmartyNocache:246355722003507b224_27784412%%*/
}
}
?>