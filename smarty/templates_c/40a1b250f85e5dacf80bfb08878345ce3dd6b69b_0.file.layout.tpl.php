<?php /* Smarty version 3.1.24, created on 2016-04-26 18:23:51
         compiled from "smarty/templates/san_pham/layout.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3580571f8807598be7_53532566%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40a1b250f85e5dacf80bfb08878345ce3dd6b69b' => 
    array (
      0 => 'smarty/templates/san_pham/layout.tpl',
      1 => 1458137458,
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
    'd1dfd6d167d9f6f1f18fb41a934aa9a1c7f605d0' => 
    array (
      0 => 'd1dfd6d167d9f6f1f18fb41a934aa9a1c7f605d0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3580571f8807598be7_53532566',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_571f880781ce06_76469319',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f880781ce06_76469319')) {
function content_571f880781ce06_76469319 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3580571f8807598be7_53532566';
echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '3580571f8807598be7_53532566';
?>

<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("subcribe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?><?php
/*%%SmartyHeaderCode:27354571f8807770323_56583655%%*/
if ($_valid && !is_callable('content_571f880776cda1_15403541')) {
function content_571f880776cda1_15403541 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '27354571f8807770323_56583655';
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
/*/%%SmartyNocache:27354571f8807770323_56583655%%*/
}
}
?>