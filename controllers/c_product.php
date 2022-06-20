<?php 
	require_once("models/m_product.php");
	require_once("models/m_categories.php");
	require_once("models/m_author.php");
	require_once("models/m_publisher.php");
	include_once ("controllers/Pager.php");
	class C_product{
		/*function __construct(){
			$this->_m_product = new M_product();	
		}*/
		function display_product(){
			//Models
			$m_prod = new M_product();
			$products = $m_prod->get_products();
		
			//Views
			
			$smarty->assign("prods",$products);
		
		}
		function insert_product(){
			//Models
			if(isset($_POST['submit'])){
				$p_name = $_POST['p_name'];
				$p_price = $_POST['p_price'];
				$p_image = $_POST['p_image'];
				$p_sum = $_POST['p_sum'];
			}
			$m_prod = new M_product();
			$prod = $m_prod->insert_product($p_name,$p_price, $p_image, $p_sum);

			//Views
		}
		
		function product_detail(){
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$m_prod= new M_product();
				$m_prods_detail = $m_prod->product_detail($id);
				$chuoi = $m_prods_detail->p_thumbs_img;
				$mang = explode(",",$chuoi);
				

				$pager=new pager();
				$prods_detail_id = $m_prod->product_detail($id);
				$limit=5;
				$crent=isset($_GET["page"])?$_GET["page"]:"";
				$count=count($prods_detail_id);
				$start=$pager->findStart($limit);
				$page=$pager->findPages($count, $limit);
				$listpage=$pager->pageList($crent, $page);

				$prods_detail_id = $m_prod->get_products_id($start,$limit,$m_prods_detail->c_id,$id);
			}
			$m_cate = new M_publisher();
			$publisher_cate = $m_cate->get_publisher();
			$m_cate = new M_author();
			$author_cate = $m_cate->get_authors();
			$m_cate = new M_categories();
			$categories_parent_id_prod = $m_cate->get_category_parent_id();
			$categories_parent = $m_cate->get_categories();
			include_once("models/m_info.php");
			$m_website=new M_website();
			$info=$m_website->display_detail_info();

			include("controllers/Smarty_ban_hang.php");
			$smarty = new Smarty_ban_hang;
			//Lập trình
			$smarty->assign("title","Chi tiết sách");
			$smarty->assign("view","views/chi_tiet_san_pham/v_chi_tiet.tpl");
			$smarty->assign("prods_detail",$m_prods_detail);
			$smarty->assign("prods_detail_id",$prods_detail_id);
			$smarty->assign("mang",$mang);
			$smarty->assign("publisher_cate",$publisher_cate);
			$smarty->assign("author_cate",$author_cate);
			$smarty->assign("cates_parent",$categories_parent);
			$smarty->assign("cates_parent_id_prod",$categories_parent_id_prod);
			$smarty->assign("info",$info);
			//Hiển thị layout
			$smarty->display("ct_san_pham/layout.tpl");

		}
	}
?>