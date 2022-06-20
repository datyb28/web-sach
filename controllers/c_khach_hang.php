<?php
@session_start();
class C_khach_hang
{
	public function __construct()
	{
		include_once('controllers/Smarty_ban_hang.php');
		include_once('models/m_khach_hang.php');
	}
	public function index()
	{   
		$smarty=new Smarty_ban_hang();
		$smarty->assign('title','Sản phẩm');
		$m_khach_hang=new m_khach_hang();
		$smarty->assign('khach_hang_hoa_don',$m_khach_hang->khach_hang_hoa_don());
		$view = 'views/khach_hang/v_khach_hang_hoa_don.tpl';
    	$smarty->assign('view',$view);
    	$smarty->display('san_pham/layout.tpl');
	}
    public function dang_ky()
    {
        include_once("models/m_info.php");
        $m_website=new M_website();
        $info=$m_website->display_detail_info();
        $smarty=new Smarty_ban_hang();
        $smarty->assign('title','Nhà sách sư phạm');
        $smarty->assign("info",$info);
        if(isset($_POST['submit']))
        {
            $ten_khach_hang=$_POST['ten_khach_hang'];
            $email=$_POST['email'];
            $dia_chi=$_POST['dia_chi'];
            $dien_thoai=$_POST['dien_thoai'];
            $ghi_chu=$_POST['ghi_chu'];        
            $m_khach_hang=new M_khach_hang();
            $ma_khach_hang=$m_khach_hang->themKhachHang($ten_khach_hang, $email, $dia_chi, $dien_thoai, $ghi_chu);
            if($ma_khach_hang>0)
            {
                $ngay_dat = date('Y-m-d',time());
                $httt=$_SESSION['thanh_tien'];
                
                $hoa_don=$m_khach_hang->themHoaDon($ma_khach_hang, $ngay_dat, $httt);
                if($hoa_don>0)
                {
                    include_once('controllers/c_gio_hang.php');
                    $c_gio_hang=new c_gio_hang();
                    $gio_hang=$c_gio_hang->layGioHang();
                     if ($gio_hang) {
                     foreach($gio_hang as $key=>$value)
                    {       
                        include_once('models/m_product.php');
                        $m_products= new M_product();
                        $gia=$m_products->product_detail($key);
                        $tong=($gia->p_price)*($value);                       
                        $m_khach_hang->themChiTietHoaDon($hoa_don,$key,$value,$tong);
                    }   
                    }

                    $m_khach_hang->capNhatDonGia_mon($hoa_don);
                    $m_khach_hang->capNhatTongTien($hoa_don);
                    $c_gio_hang->xoaGioHang();
                    //In hoa đơn
                    if ($c_gio_hang) {
                        header("location:index.php");
                    }
                    //In hoa đơn
                    $view="views/khach_hang/v_in_hoa_don.tpl";
                	$smarty->assign('view',$view);
                	$smarty->display('san_pham/layout.tpl'); 
                }
            }
        }
        else
        {
    		$view='views/khach_hang/v_them_khach_hang.tpl';
        	$smarty->assign('view',$view);
        	$smarty->display('san_pham/layout.tpl');   
        }       
    }
}