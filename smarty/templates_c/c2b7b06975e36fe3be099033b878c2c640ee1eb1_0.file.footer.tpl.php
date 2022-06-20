<?php /* Smarty version 3.1.24, created on 2022-06-18 18:15:00
         compiled from "smarty/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:159887527762adfa04315767_01169368%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b7b06975e36fe3be099033b878c2c640ee1eb1' => 
    array (
      0 => 'smarty/templates/footer.tpl',
      1 => 1458269199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159887527762adfa04315767_01169368',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_62adfa0439e822_27911410',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_62adfa0439e822_27911410')) {
function content_62adfa0439e822_27911410 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '159887527762adfa04315767_01169368';
?>
<!-- OPTION FOOTER -->
				<section class="op-footer">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-3">
								<h4><img src="public/layout/images/logo_blue.png" alt="" class="img-responsive"></h4>
								<div class="op-ct">
									<span class="glyphicon glyphicon-map-marker text-primary"></span>
									<p>50-52 Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội, Việt Nam</p>
								</div>
								<div class="op-ct">
									<span class="glyphicon glyphicon-earphone text-primary"></span>
									<p>Phone: (+80) 123 456 Fax: (+80) <?php echo $_smarty_tpl->tpl_vars['info']->value->i_phone;?>
</p>
								</div>
								<div class="op-ct">
									<span class="glyphicon glyphicon-envelope text-primary"></span>
									<p>Email: <?php echo $_smarty_tpl->tpl_vars['info']->value->i_email;?>
 Website: www.ssp.com</p>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<h4>Điều hướng</h4>
								<div class="op-ct">
									<ul>
										<li><a href="index.php">Trang chủ</a></li>
										<li><a href="sach_giao_khoa.php">Sách giáo khoa</a></li>
										<li><a href="sach_tham_khao.php">Sách tham khảo</a></li>
										<li><a href="sach_chuyen_nganh.php">Sách chuyên ngành</a></li>
										<li><a href="tin_tuc.php">Tin tức</a></li>
										<li><a href="lien_he.php">Liên hệ</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<h4>THÔNG TIN</h4>
								<div class="op-ct">
									<ul>
										<li><a href="#">Về chúng tôi</a></li>
										<li><a href="#">Thông tin giao hàng</a></li>
										
									</ul>
								</div>
							</div>
							<div class="col-sm-6 col-md-3">
								<h4>TÌM KIẾM ĐỊA CHỈ</h4>
								<div class="op-ct">
									<a href=""><img src="public/layout/images/social/facebook.png" alt="" class="img-responsive"></a>
									<a href=""><img src="public/layout/images/social/google.png" alt="" class="img-responsive"></a>
									<a href=""><img src="public/layout/images/social/twitter.png" alt="" class="img-responsive"></a>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.9684048402015!2d105.77390494346214!3d21.037742224903198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b6240401b9%3A0xb41bb48d633e1b80!2zxJDhuqFpIGjhu41jIFRoxrDGoW5nIG3huqFp!5e0!3m2!1svi!2sus!4v1457870665043" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- FOOTER -->
				<footer class="footer" id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<p>Copyright &copy; 2016 Sách Sư phạm. All Rights Reserved.</p>
								<img src="public/layout/images/payments_logos.png" alt="" class="img-responsive pull-right">
							</div>
						</div>
					</div>
					<a href="#0" class="cd-top" title="Lên đầu trang">Top</a>
				</footer>
				<div id="fb-root"></div>
				<?php echo '<script'; ?>
>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));<?php echo '</script'; ?>
>
				
				<?php echo '<script'; ?>
>
					jQuery(document).ready(function () {
						jQuery(".chat_fb").click(function() {
							jQuery('.fchat').toggle('slow');
						});
					});
				<?php echo '</script'; ?>
>
				<!-- <div id="cfacebook">
					<a href="javascript:;" class="chat_fb" onclick="return:false;"><i class="fa fa-facebook-square"></i> Hỗ trợ trực tuyến</a>
					<div class="fchat">
						<div class="fb-page" data-tabs="messages" data-href="https://www.facebook.com/sachsp/" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
					</div>
				</div> -->
			</body>
			</html><?php }
}
?>