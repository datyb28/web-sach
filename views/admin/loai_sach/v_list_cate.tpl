<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý danh mục sách</li>
	<li class="active">Danh sách loại sách</li>
</ol>
<div class="row">
<div class="col-md-12">
	<h2 class="text-center text-primary" style="margin-top:0px">DANH MỤC LOẠI SÁCH</h2>
	<h5 class="text-center text-info" style="margin-bottom:20px; font-style:italic">Nhấp vào chuyên mục bạn cần để xem danh mục con</h5>
	{foreach $cates_parent as $v}
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo{$v->c_id}" title="Nhấn vào đây để thu gọn danh mục">{$v->c_name}</button> 
	<div id="demo{$v->c_id}" class="collapse">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th></th>
						<th>STT</th>
						<th>Tên danh mục</th>
						<th>Mô tả</th>
						<th>Trạng thái</th>
						<th>Chức năng</th>
					</tr>
				</thead>
				<tbody>
					{foreach $cates_parent_id as $k}
					{if {$v->c_id} == {$k->parent_id}}
					<tr>
						<td></td>
						<td><!-- {$k->c_id} --></td>
						<td>{$k->c_name}</td>
						<td>{$k->c_summary}</td>
						<td>{if ($k->c_status==1)}Hiển thị{else}Không hiển thị{/if}</td>
						<td> <a href="" title="Xóa danh mục"> [Xóa]</a></td>
					</tr>
					{/if}
					{/foreach}
				</tbody>
			</table>
		</div>
	</div>
	{/foreach}
</div>