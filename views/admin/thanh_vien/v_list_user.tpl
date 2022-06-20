<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý thành viên</li>
	<li class="active">Danh sách thành viên</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tài khoản</th>
					<th>Tên thành viên</th>
					<th>Loại tài khoản</th>
					<th>Email</th>
					<th>Số điện thoại</th>
					<th>Địa chỉ</th>
					<th>Trạng thái</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			{if isset($users)}
				{foreach $users as $row}
				<tr>
					<td>{$row->u_id}</td>
					<td>{$row->u_account}</td>
					<td>{$row->u_name}</td>
					<td>{if ($row->u_permiss==1)}Thành viên{else}Quản trị viên{/if}</td>
					<td>{$row->u_email}</td>
					<td>{$row->u_phone}</td>
					<td>{$row->u_address}</td>
					<td>{if ($row->u_status==1)}Kích hoạt{else}Không kích hoạt{/if}</td>
					<td><a href="edituser.php?id={$row->u_id}" title="Sửa thành viên"> [Sửa]</a> <a href="?did={$row->u_id}" onclick="return confirm('Bạn có chắc chắn muốn xóa thành viên mã {$row->u_id} không?')" title="Xóa thành viên"> [Xóa]</a></td>
				</tr>
				{/foreach}
				{/if}
					</tbody>
				</table>
				<div class="col-md-offset-5">{$listpage}</div>
			</div>
		</div>