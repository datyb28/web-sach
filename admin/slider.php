<?php  
	@session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login'] != "OK"){
		session_destroy();
		header("location:login.php");	
	} 
	include("../controllers/c_slider.php");
	$c_slider = new C_sliders();
	$c_slider->get_sliders_admin();
?>