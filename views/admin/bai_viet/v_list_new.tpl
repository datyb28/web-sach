<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý bài viết</li>
	<li class="active">Danh sách bài viết</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên bài</th>
					<th>Hình ảnh</th>
					<th>Tóm tắt</th>
					<th>Trạng thái</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			{if isset($dl_news_admin)}
				{foreach $dl_news_admin as $row}
				<tr>
					<td>{$row->n_id}</td>
					<td>{$row->n_title}</td>
					<td><img src="../public/images/tin_tuc/{$row->n_image}" alt="" width="80"></td>
					<td>{$row->n_sum}</td>
					<td>{if ($row->n_status==1)}Hiển thị{else}Không hiển thị{/if}</td>
					<td><a href="editnew.php?id={$row->n_id}" title="Sửa tin tức"> [Sửa]</a> <a href="?did={$row->n_id}" title="Xóa tin tức" onclick="return confirm('Bạn có chắc chắn muốn xóa tin {$row->n_title} không?')"> [Xóa]</a></td>
				</tr>
				{/foreach}
				{/if}
					</tbody>
				</table>
				<div class="col-md-offset-5">{$listpage}</div>
			</div>
		</div>