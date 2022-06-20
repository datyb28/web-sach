<?php  
	require_once("models/m_categories.php");
	require_once("models/m_product.php");
	class C_categories{

		function display_sach_giao_khoa(){
			$m_cate = new M_categories();
			$categories = $m_cate->get_category_parent(1);
			$categories_2 = $m_cate->get_category_parent(2);
			$categories_3 = $m_cate->get_category_parent(3);
			$m_prod = new M_product();
			

			include_once ("controllers/Pager.php");
			$pager=new pager();
			$products = $m_prod->get_products_parent_id(1);
			$limit=12;
			$crent=isset($_GET["page"])?$_GET["page"]:"";
			$count=count($products);
			$start=$pager->findStart($limit);
			$page=$pager->findPages($count, $limit);
			$listpage=$pager->pageList($crent, $page);
			$products = $m_prod->get_products_parent_id_phan_trang($start,$limit,1);

			include_once("models/m_info.php");
			$m_website=new M_website();
			$info=$m_website->display_detail_info();


			include("controllers/smarty_ban_hang.php");
			$smarty = new Smarty_ban_hang();
			$smarty->assign("title","Sách văn học");
			$smarty->assign("view","views/san_pham/v_sach_giao_khoa.tpl");
			$smarty->assign("menu_sgk","class='active'");
			$smarty->assign("cates",$categories);
			$smarty->assign("cates2",$categories_2);
			$smarty->assign("cates3",$categories_3);
			$smarty->assign("prods",$products);
			$smarty->assign("listpage",$listpage);
			$smarty->assign("info",$info);
			//Hiển thị layout
			$smarty->display("san_pham/layout.tpl");
		}
		function display_sach_tham_khao(){
			$m_cate = new M_categories();
			$categories = $m_cate->get_category_parent(1);
			$categories_2 = $m_cate->get_category_parent(2);
			$categories_3 = $m_cate->get_category_parent(3);
			$m_prod = new M_product();
			

			include_once ("controllers/Pager.php");
			$pager=new pager();
			$products = $m_prod->get_products_parent_id(2);
			$limit=12;
			$crent=isset($_GET["page"])?$_GET["page"]:"";
			$count=count($products);
			$start=$pager->findStart($limit);
			$page=$pager->findPages($count, $limit);
			$listpage=$pager->pageList($crent, $page);
			$products = $m_prod->get_products_parent_id_phan_trang($start,$limit,2);

			include_once("models/m_info.php");
			$m_website=new M_website();
			$info=$m_website->display_detail_info();

			include("controllers/smarty_ban_hang.php");
			$smarty = new Smarty_ban_hang();
			$smarty->assign("title","Sách văn học");
			$smarty->assign("view","views/san_pham/v_sach_tham_khao.tpl");
			$smarty->assign("menu_stk","class='active'");
			$smarty->assign("cates",$categories);
			$smarty->assign("cates2",$categories_2);
			$smarty->assign("cates3",$categories_3);
			$smarty->assign("prods",$products);
			$smarty->assign("listpage",$listpage);
			$smarty->assign("info",$info);
			//Hiển thị layout
			$smarty->display("san_pham/layout.tpl");
		}
		function display_sach_chuyen_nganh(){
			$m_cate = new M_categories();
			$categories = $m_cate->get_category_parent(1);
			$categories_2 = $m_cate->get_category_parent(2);
			$categories_3 = $m_cate->get_category_parent(3);
			$m_prod = new M_product();
			
			include_once("models/m_info.php");
			$m_website=new M_website();
			$info=$m_website->display_detail_info();

			include_once ("controllers/Pager.php");
			$pager=new pager();
			$products = $m_prod->get_products_parent_id(3);
			$limit=12;
			$crent=isset($_GET["page"])?$_GET["page"]:"";
			$count=count($products);
			$start=$pager->findStart($limit);
			$page=$pager->findPages($count, $limit);
			$listpage=$pager->pageList($crent, $page);
			$products = $m_prod->get_products_parent_id_phan_trang($start,$limit,3);


			include("controllers/smarty_ban_hang.php");
			$smarty = new Smarty_ban_hang();
			$smarty->assign("title","Sách văn học");
			$smarty->assign("view","views/san_pham/v_sach_chuyen_nganh.tpl");
			$smarty->assign("menu_scn","class='active'");
			$smarty->assign("cates",$categories);
			$smarty->assign("cates2",$categories_2);
			$smarty->assign("cates3",$categories_3);
			$smarty->assign("prods",$products);
			$smarty->assign("listpage",$listpage);
			$smarty->assign("info",$info);
			//Hiển thị layout
			$smarty->display("san_pham/layout.tpl");
		}
		function display_category_menu_index(){
			$m_cate = new M_categories();
			$categories = $m_cate->get_category_parent(1);
			$categories_2 = $m_cate->get_category_parent(2);
			$categories_3 = $m_cate->get_category_parent(3);
			$m_prod = new M_product();
			$products = $m_prod->get_products();
			require_once("models/m_news.php");
			$m_new = new M_news();
			
			require_once("controllers/Pager.php");
			$pager=new pager();
			$dl_news = $m_new->get_news();
			$limit=3;
			$crent=isset($_GET["page"])?$_GET["page"]:"";
			$count=count($dl_news);
			$start=$pager->findStart($limit);
			$page=$pager->findPages($count, $limit);
			$listpage=$pager->pageList($crent, $page);
			$dl_news = $m_new->get_news($start,$limit);

			//Sản phẩm phân trang sách giáo khoa
			$products_id1 = $m_prod->get_products_parent_id(1);
			$limit_1=5;
			$crent_1=isset($_GET["page"])?$_GET["page"]:"";
			$count_1=count($products_id1);
			$start_1=$pager->findStart($limit_1);
			$page_1=$pager->findPages($count_1, $limit_1);
			$listpage_1=$pager->pageList($crent_1, $page_1);
			$products_id1 = $m_prod->get_products_parent_id_phan_trang($start_1,$limit_1,1);

			//Sản phẩm phân trang sách tham khảo
			$products_id2 = $m_prod->get_products_parent_id(2);
			$limit_2=5;
			$crent_2=isset($_GET["page"])?$_GET["page"]:"";
			$count_2=count($products_id2);
			$start_2=$pager->findStart($limit_2);
			$page_2=$pager->findPages($count_2, $limit_2);
			$listpage_2=$pager->pageList($crent_2, $page_2);
			$products_id2 = $m_prod->get_products_parent_id_phan_trang($start_2,$limit_2,2);
			
			//Sản phẩm phân trang sách chuyên ngành
			$products_id3 = $m_prod->get_products_parent_id(3);
			$limit_3=5;
			$crent_3=isset($_GET["page"])?$_GET["page"]:"";
			$count_3=count($products_id3);
			$start_3=$pager->findStart($limit_3);
			$page_3=$pager->findPages($count_3, $limit_3);
			$listpage_3=$pager->pageList($crent_3, $page_3);
			$products_id3 = $m_prod->get_products_parent_id_phan_trang($start_3,$limit_3,3);

			//Sản phẩm phân trang sách mới nhất
			$prods_new = $m_prod->get_products();
			$limit_4=5;
			$crent_4=isset($_GET["page"])?$_GET["page"]:"";
			$count_4=count($prods_new);
			$start_4=$pager->findStart($limit_4);
			$page_4=$pager->findPages($count_4, $limit_4);
			$listpage_4=$pager->pageList($crent_4, $page_4);
			$prods_new = $m_prod->get_products($start_4,$limit_4);

			//Sản phẩm phân trang sách nổi bật
			$prods_feature = $m_prod->get_products_feature();
			$limit_5=5;
			$crent_5=isset($_GET["page"])?$_GET["page"]:"";
			$count_5=count($prods_feature);
			$start_5=$pager->findStart($limit_5);
			$page_5=$pager->findPages($count_5, $limit_5);
			$listpage_5=$pager->pageList($crent_5, $page_5);
			$prods_feature = $m_prod->get_products_feature($start_5,$limit_5);
			//Hiển thị info
			include_once("models/m_info.php");
			$m_website=new M_website();
			$info=$m_website->display_detail_info();

			include("controllers/smarty_ban_hang.php");
			$smarty = new Smarty_ban_hang;
			//Lập trình
			$smarty->assign("title","Trang bán sách sư phạm");
			$smarty->assign("view","views/v_home.tpl");
			$smarty->assign("menu_home","class='active'");
			$smarty->assign("cates",$categories);
			$smarty->assign("cates2",$categories_2);
			$smarty->assign("cates3",$categories_3);
			$smarty->assign("prods",$products);
			$smarty->assign("dl_news",$dl_news);
			
			$smarty->assign("products_id1",$products_id1);
			$smarty->assign("products_id2",$products_id2);
			$smarty->assign("products_id3",$products_id3);
			$smarty->assign("prods_new",$prods_new);
			$smarty->assign("prods_feature",$prods_feature);

			$smarty->assign("info",$info);
			//Hiển thị layout
			$smarty->display("layout.tpl");
		}
	}
?>