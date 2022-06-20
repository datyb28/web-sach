<?php 
	@session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login'] != "OK"){
		session_destroy();
		header("location:login.php");	
	}  
	include("../controllers/c_customer.php");
	$c_customer = new C_customer();
	$c_customer->get_customer_admin();
?>