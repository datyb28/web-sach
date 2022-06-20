<?php  
	@session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login'] != "OK"){
		session_destroy();
		header("location:login.php");	
	}
	include("../controllers/c_contact.php");
	$c_contacts = new C_contacts();
	$c_contacts->list_contact();
?>