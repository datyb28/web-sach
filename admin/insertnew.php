<?php 
	@session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login'] != "OK"){
		session_destroy();
		header("location:login.php");	
	}  
	include("../controllers/c_new.php");
	$c_news = new C_news();
	$c_news->insert_new();
?>