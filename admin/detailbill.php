<?php 
	@session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login'] != "OK"){
		session_destroy();
		header("location:login.php");	
	} 
	include_once("../controllers/c_bill.php");
	$c_bill = new C_bill();
	$c_bill->Chi_tiet_gio_hang();
?>