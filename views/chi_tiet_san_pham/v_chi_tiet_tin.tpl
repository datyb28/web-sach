<section class="breadcb">
	<h2>Trang sách chuyên ngành</h2>
	<p>Trang chủ / Tin tức / {$hienthithongtin->n_title}</p>
</section>
<section class="sellmon">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h1>{$hienthithongtin->n_title}</h1>
				<p><strong>Ngày đăng: {$hienthithongtin->n_adddate}</strong></p>
				<span>{$hienthithongtin->n_content}</span>
			</div>
			<div class="col-md-3">
				<!-- <h3 class="title-module-right">
					<span>Sách theo giá</span>
				</h3>
				<div id="slider-range"></div>
				<p>
					<label for="amount"></label>
					<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
					<button type="submit" class="btn btn-primary">LỌC</button>
				</p> -->
				<h3 class="title-module-right">
					<span>Sách nổi bật</span>
				</h3>
				{foreach $prods_feature as $row}
				<div class="cate-item">
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><img src="public/images/san_pham/{$row->p_image}" alt="" class="img-responsive"></a>
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><h4>{$row->p_name}</h4></a>
					<p>{$row->p_price|number_format}đ</p>
					<div class="clearfix"></div>
				</div>
				{/foreach}
				<!-- <h3 class="title-module-right">
					<span>Sách theo tác giả</span>
				</h3>
				<div class="checkbox">
					<label><input type="checkbox" value="">Option 1</label>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" value="">Option 2</label>
				</div> -->
			</div>
		</div>
	</div>
</section>