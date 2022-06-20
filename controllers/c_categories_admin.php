<?php  
	require_once("../models/m_categories.php");
	require_once("../models/m_product.php");
	require_once("../models/m_author.php");
	require_once("../models/m_publisher.php");
	include_once ("../controllers/Pager.php");
	class C_categories_admin{

		function display_category_list(){
			$m_cate = new M_categories();
			$categories_get = $m_cate->get_categories();
			$categories_parent = $m_cate->get_category_parent(0);
			$categories_parent_id = $m_cate->get_category_parent_id();

			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Danh mục loại sách");
			$smarty->assign("view","../../../../views/admin/loai_sach/v_list_cate.tpl");
			$smarty->assign("cates",$categories_get);
			$smarty->assign("cates_parent",$categories_parent);
			$smarty->assign("cates_parent_id",$categories_parent_id);
			//Hiển thị layout
			$smarty->display("admin/layout.tpl");
		}
		function display_category_insert(){
			$m_cate = new M_categories();
			$categories_parent = $m_cate->get_category_parent(0);
			if(isset($_POST['submit'])){
				$c_name = $_POST['c_name'];
				$c_summary = $_POST['c_summary'];
				$parent_id = $_POST['parent_id'];
				$c_status = isset($_POST['status'])?0:1;
				$categories_insert = $m_cate->insert_categories($c_name,$c_summary,$c_status,$parent_id);
			}
			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Thêm loại sách mới");
			$smarty->assign("view","../../../../views/admin/loai_sach/v_insert_cate.tpl");
			$smarty->assign("cates_parent",$categories_parent);
			//Hiển thị layout
			$smarty->display("admin/layout.tpl");
		}
		function display_category_insert_book(){
			$m_cate = new M_categories();
			$categories_parent_id_prod = $m_cate->get_category_parent_id();
			$m_cate = new M_author();
			$author_cate = $m_cate->get_authors();
			$m_cate = new M_publisher();
			$publisher_cate = $m_cate->get_publisher();
			if(isset($_POST['btnsave'])){
				$flag = true;
				$c_id = $_POST['c_id'];	
				$p_name = $_POST['p_name'];
				$p_price = $_POST['p_price'];	
				$p_image= substr($_POST['p_image'],(strrpos($_POST['p_image'],"/")+1));
				$p_sale = $_POST['p_sale'];
				$p_feature = isset($_POST['p_feature'])?1:0;
				$p_status = isset($_POST['p_status'])?0:1;
				$p_page = $_POST['p_page'];
				$a_id = $_POST['a_id'];
				$pl_id = $_POST['pl_id'];
				$p_describe = $_POST['p_describe'];
				$p_thumbs_img1 = substr($_POST['p_thumbs_img1'],(strrpos($_POST['p_thumbs_img1'],"/")+1));
				$p_thumbs_img2 = substr($_POST['p_thumbs_img2'],(strrpos($_POST['p_thumbs_img2'],"/")+1));
				$p_thumbs_img3 = substr($_POST['p_thumbs_img3'],(strrpos($_POST['p_thumbs_img3'],"/")+1));
				$p_thumbs_img = $p_thumbs_img1.','.$p_thumbs_img2.',' .$p_thumbs_img3;
				$m_cate = new M_product();
				$insert = $m_cate->insert_product($p_name, $c_id, $p_price, $p_image, $p_describe, $p_status, $p_sale, $p_feature, $p_page, $a_id, $p_thumbs_img, $pl_id);
			}
			if(isset($_POST['btnsaveout'])){
				$flag = true;
				$c_id = $_POST['c_id'];	
				$p_name = $_POST['p_name'];
				$p_price = $_POST['p_price'];	
				$p_image= substr($_POST['p_image'],(strrpos($_POST['p_image'],"/")+1));
				$p_sale = $_POST['p_sale'];
				$p_feature = isset($_POST['p_feature'])?1:0;
				$p_status = isset($_POST['p_status'])?0:1;
				$p_page = $_POST['p_page'];
				$a_id = $_POST['a_id'];
				$pl_id = $_POST['pl_id'];
				$p_describe = $_POST['p_describe'];
				$p_thumbs_img1 = substr($_POST['p_thumbs_img1'],(strrpos($_POST['p_thumbs_img1'],"/")+1));
				$p_thumbs_img2 = substr($_POST['p_thumbs_img2'],(strrpos($_POST['p_thumbs_img2'],"/")+1));
				$p_thumbs_img3 = substr($_POST['p_thumbs_img3'],(strrpos($_POST['p_thumbs_img3'],"/")+1));
				$p_thumbs_img = $p_thumbs_img1.','.$p_thumbs_img2.',' .$p_thumbs_img3;
				$m_cate = new M_product();
				$insert = $m_cate->insert_product($p_name, $c_id, $p_price, $p_image, $p_describe, $p_status, $p_sale, $p_feature, $p_page, $a_id, $p_thumbs_img, $pl_id);
				header("location:listbook.php");
			}


			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Thêm sách mới");
			$smarty->assign("view","../../../../views/admin/sach/v_insert_book.tpl");
			$smarty->assign("cates_parent_id_prod",$categories_parent_id_prod);
			$smarty->assign("author_cate",$author_cate);
			$smarty->assign("publisher_cate",$publisher_cate);
			//Hiển thị layout
			$smarty->display("admin/layout.tpl");
		}
		function display_list_book(){
			$m_prod = new M_product();
			$pager=new pager();
			$m_product = $m_prod->get_products_admin();
			$limit=6;
			$crent=isset($_GET["page"])?$_GET["page"]:"";
			$count=count($m_product);
			$start=$pager->findStart($limit);
			$page=$pager->findPages($count, $limit);
			$listpage=$pager->pageList($crent, $page);

			$m_product = $m_prod->get_products_admin($start,$limit);
			if(isset($_GET['did'])){
				$did = $_GET['did'];
				$del_prods=$m_prod->del_product($did);
				if(isset($del_prods)){
					header("location:listbook.php");
				}
			}
			$m_cate = new M_publisher();
			$publisher_cate = $m_cate->get_publisher();
			$m_cate = new M_author();
			$author_cate = $m_cate->get_authors();
			$m_cate = new M_categories();
			$categories_parent_id_prod = $m_cate->get_category_parent_id();

			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Danh sách sách");
			$smarty->assign("view","../../../../views/admin/sach/v_list_book.tpl");
			$smarty->assign("prods",$m_product);
			$smarty->assign("listpage",$listpage);
			$smarty->assign("publisher_cate",$publisher_cate);
			$smarty->assign("author_cate",$author_cate);
			$smarty->assign("cates_parent_id_prod",$categories_parent_id_prod);
			$smarty->display("admin/layout.tpl");
		}
		function edit_book(){
			if(isset($_GET['id'])){
				$p_id = $_GET['id'];

				$m_prod_edit = new M_product();
				$hienthithongtin = $m_prod_edit->product_detail($p_id);
				$chuoi = $hienthithongtin->p_thumbs_img;
				$mang = explode(",",$chuoi);
				$m_cate = new M_publisher();
				$publisher_cate = $m_cate->get_publisher();
				$m_cate = new M_author();
				$author_cate = $m_cate->get_authors();
				$m_cate = new M_categories();
				$categories_parent_id_prod = $m_cate->get_category_parent_id();

				if(isset($_POST['btnsave'])){
					$c_id = $_POST['c_id'];	
					$p_name = $_POST['p_name'];
					$p_price = $_POST['p_price'];	
					$p_image= substr($_POST['p_image'],(strrpos($_POST['p_image'],"/")+1));
					$p_sale = $_POST['p_sale'];
					$p_feature = isset($_POST['p_feature'])?1:0;
					$p_status = isset($_POST['p_status'])?0:1;
					$p_page = $_POST['p_page'];
					$a_id = $_POST['a_id'];
					$pl_id = $_POST['pl_id'];
					$p_describe = $_POST['p_describe'];
					$p_thumbs_img1 = substr($_POST['p_thumbs_img1'],(strrpos($_POST['p_thumbs_img1'],"/")+1));
					$p_thumbs_img2 = substr($_POST['p_thumbs_img2'],(strrpos($_POST['p_thumbs_img2'],"/")+1));
					$p_thumbs_img3 = substr($_POST['p_thumbs_img3'],(strrpos($_POST['p_thumbs_img3'],"/")+1));
					$p_thumbs_img = $p_thumbs_img1.','.$p_thumbs_img2.',' .$p_thumbs_img3;
					$m_prod_edit->update_product($p_id,$p_name, $c_id, $p_price, $p_image, $p_describe, $p_status, $p_sale, $p_feature, $p_page, $a_id, $p_thumbs_img, $pl_id);
					header("location:#");
				}
				if(isset($_POST['btnsaveout'])){
					$c_id = $_POST['c_id'];	
					$p_name = $_POST['p_name'];
					$p_price = $_POST['p_price'];	
					$p_image= substr($_POST['p_image'],(strrpos($_POST['p_image'],"/")+1));
					$p_sale = $_POST['p_sale'];
					$p_feature = isset($_POST['p_feature'])?1:0;
					$p_status = isset($_POST['p_status'])?0:1;
					$p_page = $_POST['p_page'];
					$a_id = $_POST['a_id'];
					$pl_id = $_POST['pl_id'];
					$p_describe = $_POST['p_describe'];
					$p_thumbs_img1 = substr($_POST['p_thumbs_img1'],(strrpos($_POST['p_thumbs_img1'],"/")+1));
					$p_thumbs_img2 = substr($_POST['p_thumbs_img2'],(strrpos($_POST['p_thumbs_img2'],"/")+1));
					$p_thumbs_img3 = substr($_POST['p_thumbs_img3'],(strrpos($_POST['p_thumbs_img3'],"/")+1));
					$p_thumbs_img = $p_thumbs_img1.','.$p_thumbs_img2.',' .$p_thumbs_img3;
					$m_prod_edit->update_product($p_id,$p_name, $c_id, $p_price, $p_image, $p_describe, $p_status, $p_sale, $p_feature, $p_page, $a_id, $p_thumbs_img, $pl_id);
					header("location:listbook.php");
				}
			}

			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Sửa thông tin sách");
			$smarty->assign("view","../../../../views/admin/sach/v_edit_book.tpl");
			$smarty->assign("hienthithongtin",$hienthithongtin);
			$smarty->assign("mang",$mang);
			$smarty->assign("publisher_cate",$publisher_cate);
			$smarty->assign("author_cate",$author_cate);
			$smarty->assign("cates_parent_id_prod",$categories_parent_id_prod);

			$smarty->display("admin/layout.tpl");
		}
	}
?>