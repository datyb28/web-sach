<?php 
	@session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login'] != "OK"){
		session_destroy();
		header("location:login.php");	
	} 
	include("../controllers/c_categories_admin.php");
	$c_categories = new C_categories_admin();
	$c_categories->display_category_list();
?>