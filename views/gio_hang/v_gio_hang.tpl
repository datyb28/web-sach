<section class="breadcb">
    <h2>Trang giỏ hàng</h2>
    <p>Trang chủ / Giỏ hàng</p>
</section>
<section id="content">
  <div class="main" style="min-height:768px" id="th_giohang">
    <div class="container">
    {if isset($ds_mon_an) || isset($ds_thuc_don)}
        <div>{assign var=tien_mon_an value=0}
        <form action="gio_hang.php" method="post">
    {if isset($ds_mon_an)}       
        <h3 align="center">Danh sách sách bạn đã chọn</h3>
        <table align="center" width="90%" cellpadding="2px" cellspacing="0" class="tb-giohang table table-bordered">
            <tr><td width="100px">Mã sách</td><td>Tên sách</td><td>Hình ảnh</td><td  width="100px">Số lượng</td><td align="right" width="150px">Đơn giá</td><td align="right"  width="150px">Thành tiền</td><td align="center"  width="70px">Xóa</td></tr>
        {foreach $ds_mon_an as $item}
            <tr>
                <td>
                    {$item->p_id}
                </td>
                <td>
                    {$item->p_name}
                </td>
                <td>
                    <img src="public/images/san_pham/{$item->p_image}" width="100px" height="120px" alt="">
                </td>
                <td>
                    <input type="text" value="{$item->so_luong}" name="soluong{$item->p_id}" style="width:70px; text-align:center"/>
                    <input type="hidden" value="{$item->p_price}" name="dongia{$item->p_id}"/>
                </td>
                <td align="right">
                    {number_format($item->p_price)}
                </td>
                <td align="right">
                    {number_format($item->so_luong*$item->p_price)}đ 
                    {$tien_mon_an=$tien_mon_an+$item->so_luong*$item->p_price}
                </td>
                <td align="center">
                    <input type="checkbox" name="{{$item->p_id}}" value="{$item->p_price}"/>
                </td>
            </tr>
        {/foreach}
            <tr bgcolor="#FFE9D2"><td colspan="" rowspan="" headers=""></td><td colspan="4" align="right">Tổng tiền:</td><td align="right">{number_format($tien_mon_an)}đ</td></tr>
        </table> 
    {/if} 
    
    {if isset($ds_thuc_don)}{assign var=tien_thuc_don value=0}
        <h3 align="center">Danh sách thực đơn bạn đã chọn</h3>
        <table align="center" width="90%" cellpadding="2px" cellspacing="0">
            <tr><td width="100px">Mã thực đơn</td><td>Tên thực đơn</td><td  width="100px">Số lượng</td><td align="right" width="150px">Đơn giá</td><td align="right"  width="150px">Thành tiền</td><td align="center"  width="70px">Xóa</td></tr>
        {foreach $ds_thuc_don as $item}
            <tr>
                <td>
                    {$item->ma_thuc_don}
                </td>
                <td>
                    {$item->ten_thuc_don}
                </td>
                <td>
                    <input type="text" value="{$item->so_luong}" name="soluongt{$item->ma_thuc_don}" style="width:70px; text-align:center"/>
                    <input type="hidden" value="{$item->p_price}" name="dongiat{$item->ma_thuc_don}"/>
                </td>
                <td align="right">
                    {number_format($item->p_price)}
                </td>
                <td align="right">
                    {number_format($item->so_luong*$item->p_price)}đ
                    {$tien_thuc_don=$tien_thuc_don+$item->so_luong*$item->p_price}
                </td>
                <td align="center">
                    <input type="checkbox" name="t{{$item->ma_thuc_don}}" value="{$item->p_price}"/>
                </td>
            </tr>
        {/foreach}
            <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền thực đơn:</td><td align="right">{number_format($tien_thuc_don)}đ</td></tr>
            {if isset($ds_mon_an)}
                <tr bgcolor="#FEC8A7"><td colspan="4" align="right">Tiền hóa đơn:</td><td align="right" style="color:red">
                {$tong=$tien_thuc_don + $tien_mon_an}
                {number_format($tong)}đ</td></tr>
            {/if}
        </table> 
    {/if} 
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
    {else}
        <h3 align="center">Giỏ hàng của bạn rỗng</h3> 
    {/if}
    </div>
  </div>
</section>