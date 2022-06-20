<?php 
include_once("models/m_info.php");
$m_website=new M_website();
$info=$m_website->display_detail_info();
include("controllers/Smarty_ban_hang.php");
$smarty = new Smarty_ban_hang;
//Lập trình
$smarty->assign("title","Trang đăng nhập");
$smarty->assign("view","views/users/v_dang_nhap.tpl");
$smarty->assign("info",$info);
//Hiển thị layout
$smarty->display("users/layout_dangnhap.tpl");
?>