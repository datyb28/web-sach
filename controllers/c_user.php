<?php 
	require_once("../models/m_user.php");
	include_once ("../controllers/Pager.php");
	class C_user{
		
		function insert_user(){
			//Models
			$m_user = new M_user();
			$users = $m_user->get_users();
			if(isset($_POST['submit'])){
				$u_account = $_POST['u_account'];
				$u_password = MD5($_POST['u_password']);
				$u_name = $_POST['u_name'];
				$u_address = $_POST['u_address'];
				$u_permiss = $_POST['u_permiss'];
				$u_status = isset($_POST['u_status'])?0:1;
				$u_email = $_POST['u_email'];
				$u_phone = $_POST['u_phone'];
				$insertuser = $m_user->insert_user($u_account, $u_password, $u_name, $u_address, $u_permiss, $u_status, $u_email, $u_phone);
			}
			if(isset($_POST['submitout'])){
				$u_account = $_POST['u_account'];
				$u_password = MD5($_POST['u_password']);
				$u_name = $_POST['u_name'];
				$u_address = $_POST['u_address'];
				$u_permiss = $_POST['u_permiss'];
				$u_status = isset($_POST['u_status'])?0:1;
				$u_email = $_POST['u_email'];
				$u_phone = $_POST['u_phone'];
				$insertuser = $m_user->insert_user($u_account, $u_password, $u_name, $u_address, $u_permiss, $u_status, $u_email, $u_phone);
				if($insertuser){
					header("location:listuser.php");
				}
			}
		
			//Views
			
			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Thêm thành viên mới");
			$smarty->assign("users",$users);
			$smarty->assign("view","../../../../views/admin/thanh_vien/v_insert_user.tpl");
			$smarty->display("admin/layout.tpl");
		
		}
		function list_user(){
			//Models
			$m_user = new M_user();
			
			$pager=new pager();
			$users = $m_user->get_users_admin();
			$limit=10;
			$crent=isset($_GET["page"])?$_GET["page"]:"";
			$count=count($users);
			$start=$pager->findStart($limit);
			$page=$pager->findPages($count, $limit);
			$listpage=$pager->pageList($crent, $page);

			$users = $m_user->get_users_admin($start,$limit);

			if(isset($_GET["did"])){
				$id = $_GET["did"];
				$m_user->del_user($id);
			}
			//Views
			
			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Danh sách thành viên");
			$smarty->assign("users",$users);
			$smarty->assign("listpage",$listpage);
			$smarty->assign("view","../../../../views/admin/thanh_vien/v_list_user.tpl");
			$smarty->display("admin/layout.tpl");
		}
	}
?>