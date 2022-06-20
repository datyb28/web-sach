<?php /* Smarty version 3.1.24, created on 2016-03-18 06:45:02
         compiled from "smarty/templates/gio_hang/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:74256eb95de924284_63519312%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6cdca804da75f8c725b7aa3492c628da57e4f34' => 
    array (
      0 => 'smarty/templates/gio_hang/layout.tpl',
      1 => 1458137514,
      2 => 'file',
    ),
    '36a779a2598993a4d17fc42c043e48ae9cf82ee8' => 
    array (
      0 => 'smarty/templates/layout.tpl',
      1 => 1458227706,
      2 => 'file',
    ),
    'f9460d6135ad301379fc445c16c79e2f5756b64d' => 
    array (
      0 => 'smarty/templates/slider.tpl',
      1 => 1458268016,
      2 => 'file',
    ),
    'c3711e83648856d7c572ac21b928306ccf012893' => 
    array (
      0 => 'c3711e83648856d7c572ac21b928306ccf012893',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '74256eb95de924284_63519312',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb95deb923e6_87772192',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb95deb923e6_87772192')) {
function content_56eb95deb923e6_87772192 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '74256eb95de924284_63519312';
echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '74256eb95de924284_63519312';
?>

<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("subcribe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?><?php
/*%%SmartyHeaderCode:891656eb95deb12031_40051922%%*/
if ($_valid && !is_callable('content_56eb95deb10955_94722718')) {
function content_56eb95deb10955_94722718 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '891656eb95deb12031_40051922';
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
/*/%%SmartyNocache:891656eb95deb12031_40051922%%*/
}
}
?>