<?php  
	class C_bill{
		function display_bill(){
			include_once("../models/m_bill.php");
			include_once("../controllers/Pager.php");

			$m_bill = new M_gio_hang();
			$dl_bill = $m_bill->Hien_thi_gio_hang();


			$pager=new pager();
			$dl_bill = $m_bill->Hien_thi_gio_hang();
			$limit=10;
			$crent=isset($_GET["page"])?$_GET["page"]:"";
			$count=count($dl_bill);
			$start=$pager->findStart($limit);
			$page=$pager->findPages($count, $limit);
			$listpage=$pager->pageList($crent, $page);
			$dl_bill = $m_bill->Hien_thi_gio_hang($start,$limit);



			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Danh mục đơn hàng");
			$smarty->assign("dl_bill",$dl_bill);
			$smarty->assign("listpage",$listpage);
			$smarty->assign("view","../../../../views/admin/khach_hang/v_bill.tpl");
			//Hiển thị layout
			$smarty->display("admin/layout.tpl");
		}
	
	public function Chi_tiet_gio_hang(){
		include_once("../models/m_bill.php");
		$m_giohang = new M_gio_hang();
		$id=isset($_GET["id"])?$_GET["id"]:"";
		$cus_id=isset($_GET["cus_id"])?$_GET["cus_id"]:"";
		$ctgh=$m_giohang->Chi_tiet_don_hang($id);
		$ctkh=$m_giohang->Chon_kh_theo_id($cus_id);
		if(isset($_POST['submit'])){
			
				$id=isset($_GET["id"])?$_GET["id"]:"";
				$cus_id=isset($_GET["cus_id"])?$_GET["cus_id"]:"";
				$status=$_POST['status'];
				$sua=$m_giohang->Sua_gio_hang($status,$cus_id);
				if(isset($sua)){
					header("location:bill.php");
				}
		}
		//
		include_once("../controllers/Smarty_ban_hang_admin.php");
		$smarty = new Smarty_ban_hang_admin();
		$smarty->assign("title","Xem và cập nhật đơn hàng");
		$smarty->assign("ctgh",$ctgh);
		$smarty->assign("ctkh",$ctkh);
		$smarty->assign("view","../../../../views/admin/khach_hang/v_edit_bill.tpl");
		
		//Hiển thị layout
		$smarty->display("admin/layout.tpl");

	}
	//Xóa 
	public function Xoa_don_hang(){
		$m_giohang = new M_gio_hang();
		$id=isset($_GET["id"])?$_GET["id"]:"";
		$cgh=$m_giohang->Chon_gh_theo_id($id);
		$m_giohang->Xoa_san_pham_pbill($id);
		$m_giohang->Xoa_san_pham_bill($id);
		$mgh=$m_giohang->Xoa_san_pham_cus($cgh->cus_id);
		if ($mgh) {
			header("location:set_giohang.php");
		}

	}
	}
?>