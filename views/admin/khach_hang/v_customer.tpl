<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý khách hàng</li>
	<li class="active">Danh sách khách hàng</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>Mã</th>
					<th>Tên khách hàng</th>
					<th>Địa chỉ</th>
					<th>Số điện thoại</th>
					<th>Email</th>
					<th>Ghi chú</th> 
					<th>Ngày đăng ký</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			{if isset($dl_customer)}
				{foreach $dl_customer as $row}
				<tr>
					<td>{$row->cus_id}</td>
					<td>{$row->cus_name}</td>
					<td>{$row->cus_address}</td>
					<td>{$row->cus_phone}</td>
					<td>{$row->cus_email}</td>
					<td>{$row->cus_note}</td>
					<td>{$row->cus_adddate|date_format}</td>
					<td><a href="?did={$row->cus_id}" title="Xóa khách hàng" onclick="return confirm('Bạn có chắc muốn xóa khách hàng có mã {$row->cus_id} không?')"> [Xóa]</a></td>
				</tr>
				{/foreach}
				{/if}
					</tbody>
				</table>
				<div class="col-md-offset-5">{$listpage}</div>
			</div>
		</div>