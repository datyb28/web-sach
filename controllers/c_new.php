<?php  
	class C_news{

		//Front
		//Hiển thị tin tức
		function display_news(){
			require_once("models/m_news.php");
			$m_new = new M_news();
			require_once("controllers/Pager.php");
			$pager=new pager();
			$dl_news = $m_new->get_news();
			$limit=6;
			$crent=isset($_GET["page"])?$_GET["page"]:"";
			$count=count($dl_news);
			$start=$pager->findStart($limit);
			$page=$pager->findPages($count, $limit);
			$listpage=$pager->pageList($crent, $page);
			$dl_news = $m_new->get_news($start,$limit);

			require_once("models/m_product.php");
			$m_prod = new M_product();
			//Sản phẩm phân trang sách mới nhất
			$prods_new = $m_prod->get_products();
			$limit_4=4;
			$crent_4=isset($_GET["page"])?$_GET["page"]:"";
			$count_4=count($prods_new);
			$start_4=$pager->findStart($limit_4);
			$page_4=$pager->findPages($count_4, $limit_4);
			$listpage_4=$pager->pageList($crent_4, $page_4);
			$prods_new = $m_prod->get_products($start_4,$limit_4);

			//Sản phẩm phân trang sách nổi bật
			$prods_feature = $m_prod->get_products_feature();
			$limit_5=4;
			$crent_5=isset($_GET["page"])?$_GET["page"]:"";
			$count_5=count($prods_feature);
			$start_5=$pager->findStart($limit_5);
			$page_5=$pager->findPages($count_5, $limit_5);
			$listpage_5=$pager->pageList($crent_5, $page_5);
			$prods_feature = $m_prod->get_products_feature($start_5,$limit_5);

			include_once("models/m_info.php");
			$m_website=new M_website();
			$info=$m_website->display_detail_info();

			include("controllers/Smarty_ban_hang.php");
			$smarty = new Smarty_ban_hang();
			$smarty->assign("title","Danh mục tin tức");
			$smarty->assign("view","views/tin_tuc/v_tin_tuc.tpl");
			$smarty->assign("menu_tt","class='active'");
			$smarty->assign("dl_news",$dl_news);
			$smarty->assign("listpage",$listpage);
			$smarty->assign("prods_new",$prods_new);
			$smarty->assign("prods_feature",$prods_feature);
			$smarty->assign("info",$info);
			$smarty->display("tin_tuc/layout.tpl");
		}
		function display_news_admin(){
			require_once("../models/m_news.php");
			require_once("../controllers/Pager.php");
			$m_new = new M_news();
			
			$pager=new pager();
			$dl_news_admin = $m_new->get_news_admin();
			$limit=6;
			$crent=isset($_GET["page"])?$_GET["page"]:"";
			$count=count($dl_news_admin);
			$start=$pager->findStart($limit);
			$page=$pager->findPages($count, $limit);
			$listpage=$pager->pageList($crent, $page);

			$dl_news_admin = $m_new->get_news_admin($start,$limit);
			if(isset($_GET['did'])){
				$n_id = $_GET['did'];
				$del_new = $m_new->del_news($n_id);
				if($del_new){
					header("location:listnew.php");
				}
			}

			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Trang admin");
			$smarty->assign("listpage",$listpage);
			$smarty->assign("dl_news_admin",$dl_news_admin);
			$smarty->assign("view","../../../../views/admin/bai_viet/v_list_new.tpl");
			$smarty->display("admin/layout.tpl");
		}
		function insert_new(){
			require_once("../models/m_news.php");
			$m_new = new M_news();
			if(isset($_POST['submit'])){
				$n_title = $_POST['n_title'];
				$n_image= substr($_POST['n_image'],(strrpos($_POST['n_image'],"/")+1));
				$n_sum = $_POST['n_sum'];
				$n_content = $_POST['n_content'];
				$n_status = isset($_POST['n_status'])?0:1;
				$insert_new = $m_new->insert_news($n_title,$n_image,$n_sum,$n_content,$n_status);
				if($insert_new){
					header("location:#");
				}
			}
			if(isset($_POST['submitout'])){
				$n_title = $_POST['n_title'];
				$n_image= substr($_POST['n_image'],(strrpos($_POST['n_image'],"/")+1));
				$n_sum = $_POST['n_sum'];
				$n_content = $_POST['n_content'];
				$n_status = isset($_POST['n_status'])?0:1;
				$insert_new = $m_new->insert_news($n_title,$n_image,$n_sum,$n_content,$n_status);
				if($insert_new){
					header("location:listnew.php");
				}
			}
			if(isset($_POST['out'])){
				header("location:listnew.php");
			}
			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Trang thêm tin bài");
			$smarty->assign("view","../../../../views/admin/bai_viet/v_insert_new.tpl");
			$smarty->display("admin/layout.tpl");
		}
		function edit_new(){
			require_once("../models/m_news.php");
			$m_new = new M_news();
			if(isset($_GET['id'])){
				$n_id = $_GET['id'];
				$hienthithongtin = $m_new->news_detail($n_id);
				if(isset($_POST['submit'])){
					$n_title = $_POST['n_title'];
					$n_image= substr($_POST['n_image'],(strrpos($_POST['n_image'],"/")+1));
					$n_sum = $_POST['n_sum'];
					$n_content = $_POST['n_content'];
					$n_status = isset($_POST['n_status'])?0:1;
					$edit_new = $m_new->update_news($n_id, $n_title, $n_image, $n_sum, $n_content, $n_status);
					if($edit_new){
						header("location:#");
					}
				}
				if(isset($_POST['submitout'])){
					$n_title = $_POST['n_title'];
					$n_image= substr($_POST['n_image'],(strrpos($_POST['n_image'],"/")+1));
					$n_sum = $_POST['n_sum'];
					$n_content = $_POST['n_content'];
					$n_status = isset($_POST['n_status'])?0:1;
					$edit_new = $m_new->update_news($n_id, $n_title, $n_image, $n_sum, $n_content, $n_status);
					if($edit_new){
						header("location:listnew.php");
					}
				}
				if(isset($_POST['out'])){
					header("location:listnew.php");
				}
			}
			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Trang thêm tin bài");
			$smarty->assign("hienthithongtin",$hienthithongtin);
			$smarty->assign("view","../../../../views/admin/bai_viet/v_edit_new.tpl");
			$smarty->display("admin/layout.tpl");
		}
		function new_detail(){
			require_once("models/m_news.php");
			$m_new = new M_news();
			if(isset($_GET['id'])){
				$n_id = $_GET['id'];
				$hienthithongtin = $m_new->news_detail($n_id);
			}

			//Sản phẩm phân trang sách nổi bật
			require_once("models/m_product.php");
			$m_prod = new M_product();
			require_once("controllers/Pager.php");
			$pager=new pager();
			$prods_feature = $m_prod->get_products_feature();
			$limit_5=5;
			$crent_5=isset($_GET["page"])?$_GET["page"]:"";
			$count_5=count($prods_feature);
			$start_5=$pager->findStart($limit_5);
			$page_5=$pager->findPages($count_5, $limit_5);
			$listpage_5=$pager->pageList($crent_5, $page_5);
			$prods_feature = $m_prod->get_products_feature($start_5,$limit_5);
			include_once("models/m_info.php");
			$m_website=new M_website();
			$info=$m_website->display_detail_info();

			include("controllers/Smarty_ban_hang.php");
			$smarty = new Smarty_ban_hang();
			$smarty->assign("title","Trang chi tiết tin");
			$smarty->assign("hienthithongtin",$hienthithongtin);
			$smarty->assign("prods_feature",$prods_feature);
			$smarty->assign("info",$info);
			$smarty->assign("view","views/chi_tiet_san_pham/v_chi_tiet_tin.tpl");
			$smarty->display("tin_tuc/layout.tpl");
		}
	}
?>