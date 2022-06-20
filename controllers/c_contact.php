<?php 
	
	class C_contacts{
		public function Them_phan_hoi(){
			if(isset($_POST['send'])){
				$name = $_POST['l_name'];
				$email = $_POST['l_email'];
				$noidung = $_POST['l_content'];
				$phone = $_POST['l_phone'];
				$status = 0;

				include_once("models/m_contact.php");
				$m_contact = new M_contact();
				$succ = $m_contact->Them_lienhe($name,$email,$phone,$noidung,$status);
				if($succ){
					header("location:index.php");
				}else{
					echo "Lỗi";
				}
			}
			include_once("models/m_info.php");
			$m_website=new M_website();
			$info=$m_website->display_detail_info();
			include_once("models/m_categories.php");
			$m_cate = new M_categories();
			$categories = $m_cate->get_category_parent(1);
			$categories_2 = $m_cate->get_category_parent(2);
			$categories_3 = $m_cate->get_category_parent(3);

			//Views
			
			include("controllers/Smarty_ban_hang.php");
			$smarty = new Smarty_ban_hang;
			//Lập trình
			$smarty->assign("title","Trang liên hệ");
			$smarty->assign("view","views/lien_he/v_lien_he.tpl");
			$smarty->assign("menu_lh","class='active'");
			$smarty->assign("cates",$categories);
			$smarty->assign("cates2",$categories_2);
			$smarty->assign("cates3",$categories_3);
			$smarty->assign("info",$info);
			//Hiển thị layout
			$smarty->display("lien_he/layout.tpl");
		}
		
		function list_contact(){
			//Models
			require_once("../models/m_contact.php");
			include_once ("../controllers/Pager.php");
			$m_contact = new M_contact();
			

			$pager=new pager();
			$display_contact = $m_contact->display_contact();
			$limit=5;
			$crent=isset($_GET["page"])?$_GET["page"]:"";
			$count=count($display_contact);
			$start=$pager->findStart($limit);
			$page=$pager->findPages($count, $limit);
			$listpage=$pager->pageList($crent, $page);

			$display_contact = $m_contact->display_contact($start,$limit);

		
			//Views
			
			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Trang liên hệ");
			$smarty->assign("view","../../../../views/admin/lien_he/v_list_contact.tpl");
			$smarty->assign("listpage",$listpage);
			$smarty->assign("display_contact",$display_contact);
			$smarty->display("admin/layout.tpl");
		
		}
	}
?>