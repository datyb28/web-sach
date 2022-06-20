<?php  
	class C_sliders{

		//Front
		//Hiển thị tin tức
		function get_sliders(){
			require_once("models/m_slider.php");
			$m_slider = new M_sliders();
			$dl_news = $m_slider->get_sliders();

		}
		//Back
		function get_sliders_admin(){
			require_once("../models/m_slider.php");
			$m_slider = new M_sliders();
			$dl_sliders = $m_slider->get_sliders_admin();


			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Trang slider");
			$smarty->assign("dl_sliders",$dl_sliders);
			$smarty->assign("view","../../../../views/admin/slider/v_display_slider.tpl");
			$smarty->display("admin/layout.tpl");
		}
		function edit_sliders_admin(){
			require_once("../models/m_slider.php");
			$m_slider = new M_sliders();
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$hienthithongtin = $m_slider->get_sliders_id($id);
				if(isset($_POST['submit'])){
					$s_link = $_POST['s_link'];	
					$s_button = $_POST['s_button'];
					$s_status = isset($_POST['s_status'])?0:1;	
					$s_image= substr($_POST['s_image'],(strrpos($_POST['s_image'],"/")+1));
					$m_edit_slider = $m_slider->update_slider($id,$s_image, $s_link, $s_button, $s_status);
					header("location:#");
				}
				if(isset($_POST['submitout'])){
					$s_link = $_POST['s_link'];	
					$s_button = $_POST['s_button'];
					$s_status = isset($_POST['s_status'])?0:1;	
					$s_image= substr($_POST['s_image'],(strrpos($_POST['s_image'],"/")+1));
					$m_edit_slider = $m_slider->update_slider($id,$s_image, $s_link, $s_button, $s_status);
					header("location:slider.php");
				}
				if(isset($_POST['out'])){
					header("location:slider.php");
				}
			}
			


			include_once("../controllers/Smarty_ban_hang_admin.php");
			$smarty = new Smarty_ban_hang_admin();
			$smarty->assign("title","Trang slider");
			$smarty->assign("hienthithongtin",$hienthithongtin);
			$smarty->assign("view","../../../../views/admin/slider/v_edit_slider.tpl");
			$smarty->display("admin/layout.tpl");
		}

	}
?>