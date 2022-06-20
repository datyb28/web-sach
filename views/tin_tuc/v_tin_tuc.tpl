<section class="breadcb">
	<h2>Trang tin tức</h2>
	<p>Trang chủ / Tin tức</p>
</section>
<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3 class="title-module-right">
					<span>Sách mới nhất</span>
				</h3>
				{foreach $prods_new as $row}
				<div class="cate-item">
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><img src="public/images/san_pham/{$row->p_image}" alt="" class="img-responsive"></a>
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><h4>{$row->p_name}</h4></a>
					<p>{$row->p_price|number_format}đ</p>
					<div class="clearfix"></div>
				</div>
				{/foreach}
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
			</div>
			<div class="col-md-9">
				{foreach $dl_news as $row}
				<div class="col-md-6">
					<div class="blog-item blog-item-news">
						<div class="img-hid"><a href="chi_tiet_tin.php?id={$row->n_id}" title=""><img src="public/images/tin_tuc/{$row->n_image}" alt="" class="img-responsive"></a></div>
						<h4>{$row->n_adddate|date_format}</h4>
						<a href="chi_tiet_tin.php?id={$row->n_id}" title=""><h3>{$row->n_title}</h3></a>
						<p>{$row->n_sum}</p>
						<span class="readmore"><a href="chi_tiet_tin.php?id={$row->n_id}" title="">XEM CHI TIẾT </a><span class="glyphicon glyphicon-arrow-right"></span></span>
					</div>
				</div>
				{/foreach}

				<div class="col-md-7 col-md-offset-5">{$listpage}</div>
			</div>
		</div>
	</div>
</section>