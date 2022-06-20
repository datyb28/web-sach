<?php  
	@session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login'] != "OK"){
		session_destroy();
		header("location:login.php");	
	}
	include_once("../controllers/Smarty_ban_hang_admin.php");
	$smarty = new Smarty_ban_hang_admin();
	$smarty->assign("title","Trang admin");
	$smarty->assign("view","../../../../views/admin/v_home.tpl");
	$smarty->display("admin/layout.tpl");
?>