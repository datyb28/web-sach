{if isset($prods_detail)}
<section class="breadcb">
	<h2>Trang chi tiết sản phẩm</h2>
	<p>Trang chủ / {foreach $cates_parent_id_prod as $ca}{foreach $cates_parent as $ci}{if ($ci->c_id == $ca->parent_id && $prods_detail->c_id == $ca->c_id)}{$ci->c_name}{/if}{/foreach}{/foreach} / {foreach $cates_parent_id_prod as $c}{if ($prods_detail->c_id == $c->c_id)}{$c->c_name}{/if}{/foreach} / {$prods_detail->p_name}</p>
</section>

<section class="detail-prod">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="public/images/san_pham/{$prods_detail->p_image}">
							<img src="public/images/san_pham/{$prods_detail->p_image}" />
						</li>
					{foreach $mang as $row}
					{if $row!=""}
						<li data-thumb="public/images/thumbs/{$row}">
							<img src="public/images/thumbs/{$row}" />
						</li>
						{/if}
					{/foreach}
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Thông tin sách</a></li>
					<li><a data-toggle="tab" href="#menu1">Bình luận & Đánh giá</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<h3>{$prods_detail->p_name}</h3>
						<h4>{$prods_detail->p_describe}</h4>
						<div class="col-md-6">
							<h5>Tác giả:</h5>
							<h5>Số trang:</h5>
							<h5>Nhà xuất bản:</h5>
							<h5>Giá:</h5>
							<h5>Chuyên mục:</h5>
							<h5>Nhập số lượng cần mua:</h5>
						</div>
						<div class="col-md-6" style="margin-bottom:30px">
							<h5>{foreach $author_cate as $a}{if ($prods_detail->a_id == $a->a_id)}{$a->a_name}{/if}{/foreach}</h5>
							<h5>{$prods_detail->p_page}</h5>
							<h5>{foreach $publisher_cate as $p}{if ($prods_detail->pl_id == $p->pl_id)}{$p->pl_name}{/if}{/foreach}</h5>
							<h5>{$prods_detail->p_price|number_format}</h5>
							<h5>{foreach $cates_parent_id_prod as $c}{if ($prods_detail->c_id == $c->c_id)}{$c->c_name}{/if}{/foreach}</h5>
							<input type="hidden" id="dongia{$prods_detail->p_id}" value="{$prods_detail->p_price}"/>
							<h5><input  class="" type="text" value="1" size="2" id="soluong{$prods_detail->p_id}" style="text-align: center;" /></h5>
						</div>
						<a href="javascript:void(0)" title="" id="{$prods_detail->p_id}" class="button-1"><button type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Thêm vào giỏ</button></a>
					</div>
	{/if}
					<div id="menu1" class="tab-pane fade">
						<p>
							<div class="fb-comments" data-href="http://localhost/doan/chi_tiet_sach.php?id={$prods_detail->p_id}" data-numposts="10"></div>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<h3 class="title-module-right">
					<span>Sách liên quan</span>
				</h3>
			</div>
			<section class="sellmon">
				{foreach $prods_detail_id as $pi}
				<div class="col-md-5ths">
					<div class="mon-item">
						<a href="chi_tiet_sach.php?id={$pi->p_id}" title="Click để xem chi tiết sách"><img src="public/images/san_pham/{$pi->p_image}" alt="" class="img-responsive"></a>
						<div class="box-item-detail">
						</div>
						<div class="mon-item-detail">
							<a href="chi_tiet_sach.php?id={$pi->p_id}" title="Click để xem chi tiết sách"><h4 class="text-center">{$pi->p_name}</h4></a>
							<p class="text-center">{$pi->p_price|number_format}đ</p>
							<input type="hidden" id="dongia{$pi->p_id}" value="{$pi->p_price}"/>
							<span style="margin-left: 10px">Số lượng mua</span>
							<input  class="col-md-offset-3" type="text" value="1" size="2" id="soluong{$pi->p_id}" style="text-align: center; margin-bottom: 20px;" />
						</div>
						<p class="text-center"><a href="javascript:void(0)" title="" id="{$pi->p_id}" class="button-1"><button type="submit" class="btn-item btn btn-danger add-to-cart" title="Thêm vào giỏ hàng">Mua hàng</button></a> <a href="chi_tiet_sach.php?id={$pi->p_id}" title=""><button class="btn-item btn add-to-cart" title="Xem chi tiết"><span class="glyphicon glyphicon-eye-open"></span></button></a></p>
					</div>
				</div>
				{/foreach}
			</section>
		</div>
	</div>
</section>