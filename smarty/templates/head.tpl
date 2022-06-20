<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="fb:app_id" content="233648796972802"/>
	<meta property="fb:admins" content="100006550591826"/>
	<title>{$info->i_company}</title>

	<!-- Bootstrap CSS -->
	<link href="public/layout/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/layout/css/style.css" rel="stylesheet">
	<link href="public/layout/css/ranger.css" rel="stylesheet">
	<link href="public/layout/css/flexslider.css" rel="stylesheet">

	<!-- jQuery -->
	<script src="public/layout/js/jquery.js"></script>
	<script src="public/layout/js/ajax_cart.js"></script>
	<script src="public/layout/js/ajax_xoa_cart.js"></script>
  	<script src="public/layout/js/jquery-ui.js"></script>
  	<script src="public/layout/js/jquery.flexslider.js"></script>
	<!-- Bootstrap && Others JavaScript -->
	<script src="public/layout/js/bootstrap.min.js"></script>
	<script src="public/layout/js/sticky.js"></script>
	<script src="public/layout/js/ranger-slider.js"></script>
	<script src="public/layout/js/flexslider.js"></script>
	
	<!--Facebook-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=233648796972802";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<!--Back to top-->
	<script>
		jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});
	</script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body>
