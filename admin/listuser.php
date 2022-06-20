<?php 
	@session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login'] != "OK"){
		session_destroy();
		header("location:login.php");	
	} 
	include("../controllers/c_user.php");
	$c_user = new C_user();
	$c_user->list_user();
?>