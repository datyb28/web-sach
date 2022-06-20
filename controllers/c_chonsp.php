<?php 
include_once ("models/m_product.php");
include_once ("models/m_categories.php");
include_once ("controllers/Pager.php");
/**
* 
*/
class C_chon_loai
{
	public function Tim_san_pham(){
		//Modell
		$m_san_pham = new M_product();
		$search=isset($_POST["tim"])?$_POST["search"]:"";
		$chonname=$m_san_pham->Doc_san_pham_theo_ten(-1,-1,$search);
		include_once("models/m_info.php");
		$m_website=new M_website();
		$info=$m_website->display_detail_info();

		//View
		include("controllers/Smarty_ban_hang.php");
		$smarty = new Smarty_ban_hang;
		//Lập trình
		$smarty->assign("title","Trang tìm kiếm");
		$smarty->assign("view","views/san_pham/v_tim_kiem.tpl");
		$smarty->assign("menu_home","class='active'");
		$smarty->assign("chon",$chonname);
		$smarty->assign("info",$info);
		//Hiển thị layout
		$smarty->display("san_pham/layout.tpl");
	}
}
 ?>