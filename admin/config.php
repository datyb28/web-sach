<?php
	@session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login'] != "OK"){
		session_destroy();
		header("location:login.php");	
	} 
	include_once("../controllers/c_info.php");
	$c_bill = new C_info();
	$c_bill->edit_display_info();
?>