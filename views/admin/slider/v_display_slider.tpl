<ol class="breadcrumb">
   	<li>Trang tổng quan</li>
	<li>Quản lý slider</li>
	<li class="active">Danh sách slider</li>
</ol>
<div class="row">
	<div class="col-md-7">
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>STT</th>
						<th>Hình ảnh</th>
						<th>Đường dẫn tới</th>	
						<th>Trạng thái</th>
						<th>Chức năng</th>
					</tr>
				</thead>
				<tbody>
					{if isset($dl_sliders)}
					{foreach $dl_sliders as $row}
					<tr>
						<td>{$row->s_id}</td>
						<td><img src="../public/images/slider/{$row->s_image}" alt="" width="80"></td>
						<td>{$row->s_link}</td>
						<td>{if ($row->s_status==1)}Hiển thị{else}Không hiển thị{/if}</td>
						<td><a href="editslider.php?id={$row->s_id}" title="Sửa slider"> [Cập nhật]</a></td>
						</tr>
						{/foreach}
						{/if}
					</tbody>
				</table>
			</div>
		</div>
	<div class="col-md-5">
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
				{foreach $dl_sliders as $row2}
				<div class="item {if ($row2->s_active==1)}active{/if}">
					<img src="../public/layout/images/slider/{$row2->s_image}" class="img-responsive">
					<div class="container">
						<div class="carousel-caption">
							<h1>.</h1>
							<p>.</p>
							<p><a class="btn btn-lg btn-success" href="../{$row2->s_link}" role="button">{$row2->s_button}</a></p>
						</div>
					</div>
				</div>
				{/foreach}
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>