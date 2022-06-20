<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý liên hệ</li>
	<li class="active">Danh sách liên hệ</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên khách hàng</th>
					<th>Email</th>
					<th>Số điện thoại</th>
					<th>Ngày gửi</th>
					<th>Trạng thái</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			{if isset($display_contact)}
				{foreach $display_contact as $row}
				<tr>
					<td>{$row->l_id}</td>
					<td>{$row->l_name}</td>
					<td>{$row->l_email}</td>
					<td>{$row->l_phone}</td>
					<td>{$row->l_adddate}</td>
					<td>{if ($row->l_status==0)}Chưa xem{else}Đã xem{/if}</td>
					<td><a href="displaycontact.php?id={$row->u_id}" title="Xem liên hệ"> [Xem]</a> <a href="?did={$row->u_id}" onclick="return confirm('Bạn có chắc muốn xóa khách hàng có mã {$row->u_id} không?')" title="Xóa liên hệ"> [Xóa]</a></td>
				</tr>
				{/foreach}
				{/if}
					</tbody>
				</table>
				<div class="col-md-offset-5">{$listpage}</div>
			</div>
		</div>