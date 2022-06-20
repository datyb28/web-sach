<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý đơn hàng</li>
	<li class="active">Danh sách đơn hàng</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>Tên khách hàng</th>
					<th>Mã hóa đơn</th>
					<th>Tổng tiền</th>
					<th>Trạng thái</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			{if isset($dl_bill)}
				{foreach $dl_bill as $row}
				<tr>
					<td>{$row->cus_name}</td>
					<td>{$row->tran_id}</td>
					<td>{$row->tran_totalprice}</td>
					<td>{if ($row->cus_status==0)}Chưa xem{elseif ($row->cus_status==1)}Đang xử lý{else}Đã thanh toán{/if}</td>
					<td><a href="detailbill.php?id={$row->tran_id}&cus_id={$row->cus_id}" title="Xem đơn hàng"> [Xem & cập nhật]</a>
					{if ($row->cus_status==0)}<a href="?did={$row->cus_id}" title="Xóa đơn hàng" onclick="return confirm('Bạn có chắc muốn xóa đơn hàng có mã {$row->cus_id} không?')"> [Xóa đơn hàng]</a>{/if}</td>
				</tr>
				{/foreach}
				{/if}
					</tbody>
				</table>
				<div class="col-md-offset-5">{$listpage}</div>
			</div>
		</div>