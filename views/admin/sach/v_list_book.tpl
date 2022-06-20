<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý sách</li>
	<li class="active">Danh sách sách</li>
</ol>
<div class="row">
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên sách</th>
					<th>Giá sách</th>
					<th>Hình ảnh</th>
					<th>Số trang</th>
					<th>Nhà xuất bản</th>
					<th>Tác giả</th>
					<th>Loại sách</th>
					<th>Trạng thái</th>
					<th>Chức năng</th>
				</tr>
			</thead>
			<tbody>
			{if isset($prods)}
				{foreach $prods as $row}
				<tr>
					<td>{$row->p_id}</td>
					<td>{$row->p_name}</td>
					<td>{$row->p_price}</td>
					<td><img src="../public/images/san_pham/{$row->p_image}" alt="" class="img-responsive img-img"></td>
					<td>{$row->p_page}</td>
					<td>{foreach $publisher_cate as $p}{if ($row->pl_id == $p->pl_id)}{$p->pl_name}{/if}{/foreach}</td>
					<td>{foreach $author_cate as $a}{if ($row->a_id == $a->a_id)}{$a->a_name}{/if}{/foreach}</td>
					<td>{foreach $cates_parent_id_prod as $c}{if ($row->c_id == $c->c_id)}{$c->c_name}{/if}{/foreach}</td>
					<td>{if ($row->p_status==1)}Hiển thị{else}Không hiển thị{/if}</td>
					<td><a href="editbook.php?id={$row->p_id}" title="Sửa sản phẩm"> [Sửa]</a> <a href="?did={$row->p_id}" onclick="return confirm('Bạn có chắc xóa sách mã {$row->p_id} không?')" title="Xóa sản phẩm"> [Xóa]</a></td>
				</tr>
				{/foreach}
				{/if}
					</tbody>
				</table>
				<div class="col-md-offset-5">{$listpage}</div>
			</div>
		</div>