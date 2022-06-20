<?php /* Smarty version 3.1.24, created on 2016-03-17 16:17:55
         compiled from "smarty/templates/ct_san_pham/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:43656eacaa381fc09_68005361%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdc4fffc1e8635716681ac45464168a724591f4' => 
    array (
      0 => 'smarty/templates/ct_san_pham/layout.tpl',
      1 => 1458137551,
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
      1 => 1458206938,
      2 => 'file',
    ),
    '70e41f07f32015289b653f76dee9bb78bc823b75' => 
    array (
      0 => '70e41f07f32015289b653f76dee9bb78bc823b75',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '43656eacaa381fc09_68005361',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eacaa38bd772_58625424',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eacaa38bd772_58625424')) {
function content_56eacaa38bd772_58625424 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '43656eacaa381fc09_68005361';
echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '43656eacaa381fc09_68005361';
?>

<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("subcribe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?><?php
/*%%SmartyHeaderCode:443456eacaa38a1112_56009610%%*/
if ($_valid && !is_callable('content_56eacaa389f5b0_35547863')) {
function content_56eacaa389f5b0_35547863 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '443456eacaa38a1112_56009610';
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
						<div class="item">
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
						<div class="item active">
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
/*/%%SmartyNocache:443456eacaa38a1112_56009610%%*/
}
}
?>