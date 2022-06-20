<?php  
	include_once("../models/m_info.php");
	class C_info{
		function edit_display_info(){
			$m_website=new M_website();
			$info=$m_website->display_detail_info();

			if (isset($_POST["submit"])) {
			$i_company=isset($_POST["i_company"])?$_POST["i_company"]:"$info->i_company";
			$i_logo=substr($_POST['i_logo'],(strrpos($_POST['i_logo'],"/")+1));
			$i_address=isset($_POST["i_address"])?$_POST["i_address"]:"$info->i_address";
			$i_email=isset($_POST["i_email"])?$_POST["i_email"]:"$info->i_email";
			$i_phone=isset($_POST["i_phone"])?$_POST["i_phone"]:"$info->i_phone";
			$i_facebook=isset($_POST["i_facebook"])?$_POST["i_facebook"]:"$info->i_facebook";

			$edit =$m_website->edit_info($i_company, $i_address, $i_email, $i_phone, $i_logo, $i_facebook);
				if ($edit) {
					header("location:config.php");
				}
			}

		include_once("../controllers/Smarty_ban_hang_admin.php");
		$smarty = new Smarty_ban_hang_admin();
		$smarty->assign("title","Thiết lập website");
		$smarty->assign("info",$info);
		$smarty->assign("view","../../../../views/admin/v_config_website.tpl");
		//Hiển thị layout
		$smarty->display("admin/layout.tpl");
	}
	}
?>