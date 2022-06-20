<?php /* Smarty version 3.1.24, created on 2016-04-28 15:31:19
         compiled from "E:/OpenServer/domains/doan.com/views/khach_hang/v_them_khach_hang.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:622557220297534161_28971143%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bd701e6f860b5a52ca2fabc457b41cdfc3ad1ed' => 
    array (
      0 => 'E:/OpenServer/domains/doan.com/views/khach_hang/v_them_khach_hang.tpl',
      1 => 1458192540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '622557220297534161_28971143',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5722029762d405_51852869',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5722029762d405_51852869')) {
function content_5722029762d405_51852869 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '622557220297534161_28971143';
?>
<section id="content">
  <div class="main" style="min-height:768px">
    <div class="container">
        <h3 align="center" style="margin-bottom:30px">Vui lòng nhập thông tin khách hàng</h3>
            <div class="col-md-offset-4">
            <form name="them_khach_hang" action="khach_hang.php?key=dat-hang" method="post" class="form-inline" role="form">
                <div class="form-group">
                        <label class="col-md-3">Tên khách hàng:</label>
                        <input type="text" value="" name="ten_khach_hang" class="form-control" style="width:450px; text-align:center"/>
                </div>
                <div class="form-group">
                        <label class="col-md-3">Email:</label>
                        <input type="text" value="" name="email" class="form-control" style="width:450px; text-align:center"/>
                </div>
                <div class="form-group">
                        <label class="col-md-3">Địa chỉ:</label>
                        <input type="text" value="" name="dia_chi" class="form-control" style="width:450px; text-align:center"/>
                </div>
                <div class="form-group">
                        <label class="col-md-3">Điện thoại:</label>
                        <input type="text" value="" name="dien_thoai" class="form-control" style="width:450px; text-align:center"/>
                </div>
                <div class="form-group">
                        <label class="col-md-3">Ghi chú:</label>
                        <textarea name="ghi_chu" cols="55" rows="3" class="form-control" style="width:450px; text-align:center"></textarea>
                </div>
                <div class="form-group col-md-12" style="margin-top:20px">
                    <input type="submit" class="button-1 btn btn-primary" value="Gửi yêu cầu" name="submit" /> 
                    <input type="button"  class="button-2 btn btn-primary"
						onclick="window.location.href = 'gio_hang.php'"
						value="Quay về"/>
           		</div>
            </form>
    </div>
  </div>
</section><?php }
}
?>