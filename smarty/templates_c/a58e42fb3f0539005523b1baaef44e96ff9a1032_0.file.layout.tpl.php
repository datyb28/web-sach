<?php /* Smarty version 3.1.24, created on 2022-06-18 12:16:28
         compiled from "smarty/templates/gio_hang/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:64017701762ada5fc427f59_48015621%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a58e42fb3f0539005523b1baaef44e96ff9a1032' => 
    array (
      0 => 'smarty/templates/gio_hang/layout.tpl',
      1 => 1458137514,
      2 => 'file',
    ),
    'c949ebf1837bf407a464231fbea2a1a1e145bf76' => 
    array (
      0 => 'smarty/templates/layout.tpl',
      1 => 1458227706,
      2 => 'file',
    ),
    '5e10fb115eb780c836a98f9270de26cfebd8992c' => 
    array (
      0 => 'smarty/templates/slider.tpl',
      1 => 1458268016,
      2 => 'file',
    ),
    '32c5ec654f36b3eeede67066ed3fefaffa67041d' => 
    array (
      0 => '32c5ec654f36b3eeede67066ed3fefaffa67041d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '64017701762ada5fc427f59_48015621',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62ada5fc446593_10871631',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62ada5fc446593_10871631')) {
function content_62ada5fc446593_10871631 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '64017701762ada5fc427f59_48015621';
echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '64017701762ada5fc427f59_48015621';
?>

<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("subcribe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?><?php
/*%%SmartyHeaderCode:175146434462ada5fc442943_19608799%%*/
if ($_valid && !is_callable('content_62ada5fc442697_40605142')) {
function content_62ada5fc442697_40605142 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '175146434462ada5fc442943_19608799';
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
/*/%%SmartyNocache:175146434462ada5fc442943_19608799%%*/
}
}
?>