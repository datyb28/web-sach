<?php  
	class C_customer{
		function get_customer_admin(){
			include_once("../models/m_customer.php");
			include_once("../controllers/Pager.php");
			$m_customer = new M_customer();

			$pager=new pager();
			$dl_customer = $m_customer->get_customer_admin();
			$limit=10;
			$crent=isset($_GET["page"])?$_GET["page"]:"";
			$count=count($dl_customer);
			$start=$pager->findStart($limit);
			$page=$pager->findPages($count, $limit);
			$listpage=$pager->pageList($crent, $page);
			$dl_customer = $m_customer->get_customer_admin($start, $limit);
			if(isset($_GET['did'])){
				$cus_id = $_GET['did'];
				$del_cus = $m_customer->del_customer($cus_id);
				if($del_cus){
					header("location:customers.php");
				}
			}


			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Danh sách khách hàng");
			$smarty->assign("dl_customer",$dl_customer);
			$smarty->assign("listpage",$listpage);
			$smarty->assign("view","../../../../views/admin/khach_hang/v_customer.tpl");
			$smarty->display("admin/layout.tpl");
		}
	}
?>