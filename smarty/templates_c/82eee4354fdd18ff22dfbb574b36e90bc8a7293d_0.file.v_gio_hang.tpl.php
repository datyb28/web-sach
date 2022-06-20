<?php /* Smarty version 3.1.24, created on 2016-04-28 15:31:12
         compiled from "E:/OpenServer/domains/doan.com/views/gio_hang/v_gio_hang.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:652057220290c13607_48438850%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82eee4354fdd18ff22dfbb574b36e90bc8a7293d' => 
    array (
      0 => 'E:/OpenServer/domains/doan.com/views/gio_hang/v_gio_hang.tpl',
      1 => 1458192329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '652057220290c13607_48438850',
  'variables' => 
  array (
    'ds_mon_an' => 0,
    'ds_thuc_don' => 0,
    'item' => 0,
    'tien_mon_an' => 0,
    'tien_thuc_don' => 0,
    'tong' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57220290d8a104_84284799',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57220290d8a104_84284799')) {
function content_57220290d8a104_84284799 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '652057220290c13607_48438850';
?>
<section class="breadcb">
    <h2>Trang giỏ hàng</h2>
    <p>Trang chủ / Giỏ hàng</p>
</section>
<section id="content">
  <div class="main" style="min-height:768px" id="th_giohang">
    <div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['ds_mon_an']->value) || isset($_smarty_tpl->tpl_vars['ds_thuc_don']->value)) {?>
        <div><?php $_smarty_tpl->tpl_vars['tien_mon_an'] = new Smarty_Variable(0, null, 0);?>
        <form action="gio_hang.php" method="post">
    <?php if (isset($_smarty_tpl->tpl_vars['ds_mon_an']->value)) {?>       
        <h3 align="center">Danh sách sách bạn đã chọn</h3>
        <table align="center" width="90%" cellpadding="2px" cellspacing="0" class="tb-giohang table table-bordered">
            <tr><td width="100px">Mã sách</td><td>Tên sách</td><td>Hình ảnh</td><td  width="100px">Số lượng</td><td align="right" width="150px">Đơn giá</td><td align="right"  width="150px">Thành tiền</td><td align="center"  width="70px">Xóa</td></tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['ds_mon_an']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->p_id;?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->p_name;?>

                </td>
                <td>
                    <img src="public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['item']->value->p_image;?>
" width="100px" height="120px" alt="">
                </td>
                <td>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->so_luong;?>
" name="soluong<?php echo $_smarty_tpl->tpl_vars['item']->value->p_id;?>
" style="width:70px; text-align:center"/>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->p_price;?>
" name="dongia<?php echo $_smarty_tpl->tpl_vars['item']->value->p_id;?>
"/>
                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->p_price);?>

                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->p_price);?>
đ 
                    <?php $_smarty_tpl->tpl_vars['tien_mon_an'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tien_mon_an']->value+$_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->p_price, null, 0);?>
                </td>
                <td align="center">
                    <input type="checkbox" name="<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->p_id;
$_tmp1=ob_get_clean();
echo $_tmp1;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->p_price;?>
"/>
                </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            <tr bgcolor="#FFE9D2"><td colspan="" rowspan="" headers=""></td><td colspan="4" align="right">Tổng tiền:</td><td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['tien_mon_an']->value);?>
đ</td></tr>
        </table> 
    <?php }?> 
    
    <?php if (isset($_smarty_tpl->tpl_vars['ds_thuc_don']->value)) {
$_smarty_tpl->tpl_vars['tien_thuc_don'] = new Smarty_Variable(0, null, 0);?>
        <h3 align="center">Danh sách thực đơn bạn đã chọn</h3>
        <table align="center" width="90%" cellpadding="2px" cellspacing="0">
            <tr><td width="100px">Mã thực đơn</td><td>Tên thực đơn</td><td  width="100px">Số lượng</td><td align="right" width="150px">Đơn giá</td><td align="right"  width="150px">Thành tiền</td><td align="center"  width="70px">Xóa</td></tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['ds_thuc_don']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->ma_thuc_don;?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->ten_thuc_don;?>

                </td>
                <td>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->so_luong;?>
" name="soluongt<?php echo $_smarty_tpl->tpl_vars['item']->value->ma_thuc_don;?>
" style="width:70px; text-align:center"/>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->p_price;?>
" name="dongiat<?php echo $_smarty_tpl->tpl_vars['item']->value->ma_thuc_don;?>
"/>
                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->p_price);?>

                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->p_price);?>
đ
                    <?php $_smarty_tpl->tpl_vars['tien_thuc_don'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tien_thuc_don']->value+$_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->p_price, null, 0);?>
                </td>
                <td align="center">
                    <input type="checkbox" name="t<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->ma_thuc_don;
$_tmp2=ob_get_clean();
echo $_tmp2;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->p_price;?>
"/>
                </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
            <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền thực đơn:</td><td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['tien_thuc_don']->value);?>
đ</td></tr>
            <?php if (isset($_smarty_tpl->tpl_vars['ds_mon_an']->value)) {?>
                <tr bgcolor="#FEC8A7"><td colspan="4" align="right">Tiền hóa đơn:</td><td align="right" style="color:red">
                <?php $_smarty_tpl->tpl_vars['tong'] = new Smarty_Variable($_smarty_tpl->tpl_vars['tien_thuc_don']->value+$_smarty_tpl->tpl_vars['tien_mon_an']->value, null, 0);?>
                <?php echo number_format($_smarty_tpl->tpl_vars['tong']->value);?>
đ</td></tr>
            <?php }?>
        </table> 
    <?php }?> 
    <p align="center">
    
    <input type="submit" name="btnCapnhat" value="Cập nhật" class="btn btn-primary button-2" />
    
    <input type="button" class="button-2 btn btn-primary "
						onclick="window.location.href = 'khach_hang.php?key=dat-hang'"
						value="Thanh toán" class="art-button" />
                        
    <input type="button"  class="button-1 btn btn-primary " id="btnxoa"						
						value="Xóa giỏ hàng" class="art-button" />
    </p>
    </form>
    </div>
    <?php } else { ?>
        <h3 align="center">Giỏ hàng của bạn rỗng</h3> 
    <?php }?>
    </div>
  </div>
</section><?php }
}
?>