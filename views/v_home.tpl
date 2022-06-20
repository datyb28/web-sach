<section class="sellmon">
	<div class="container">
		<h3 class="title-module">
			<span>Sách nổi bật</span>
		</h3>
		<div class="row">
			{foreach $prods_feature as $row}
			<div class="col-md-5ths">
				<div class="mon-item">
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><img src="public/images/san_pham/{$row->p_image}" alt="" class="img-responsive"></a>
					<div class="box-item-detail">
					</div>
					<div class="mon-item-detail">
						<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><h4 class="text-center">{$row->p_name}</h4></a>
						<p class="text-center">{$row->p_price|number_format}đ</p>
						<input type="hidden" id="dongia{$row->p_id}" value="{$row->p_price}"/>
							<span style="margin-left: 10px">Số lượng mua</span>
							<input  class="col-md-offset-3" type="text" value="1" size="2" id="soluong{$row->p_id}" style="text-align: center;" />
					</div>
					<p class="text-center"><a href="javascript:void(0)" title="" id="{$row->p_id}" class="button-1"><button type="submit" class="btn-item btn btn-danger add-to-cart" title="Thêm vào giỏ hàng">Mua hàng</button></a> <a href="chi_tiet_sach.php?id={$row->p_id}" title=""><button class="btn-item btn add-to-cart" title="Xem chi tiết"><span class="glyphicon glyphicon-eye-open"></span></button></a></p>
				</div>
			</div>
			{/foreach}
		</div></div></section>
		<!-- EXPAND -->
		
		<section class="wrap-expand">
		<div class="container">
			<section class="ex-pand">
				<div class="container">
					<!-- SPOTLIGHT -->
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="expand">
								<div class="expand-text">
									<div class="expand-left"><span class="glyphicon glyphicon-earphone"></span>
										<h4>Hỗ trợ khách hàng 24/7</h4>
										<p>Số điện thoai: 04 3754 7713</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="expand">
								<div class="expand-text">
									<div class="expand-left"><span class="glyphicon glyphicon-send"></span>
										<h4>Miễn phí giao hàng</h4>
										<p>với hóa đơn trên 200.000 VNĐ</p>
									</div>
								</div>
							</div>
						</div>
						<div class=" col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="expand expand-no-border">
								<div class="expand-text">
									<div class="expand-left">
										<span class="glyphicon glyphicon-piggy-bank"></span>
										<h4>Khuyến mãi hàng tháng</h4>
										<p>giảm giá từ 10 - 20%</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- SPOTLIGHT -->	
				</div>
			</section>	
		</div>
		</section>
		<!-- //EXPAND -->
		<div style="margin-top:10px"></div>
<section class="sellmon">
	<div class="container">
		<h3 class="title-module">
			<span>Sách mới nhất</span>
		</h3>
		<div class="row">
			{foreach $prods_new as $row}
			<div class="col-md-5ths">
				<div class="mon-item">
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><img src="public/images/san_pham/{$row->p_image}" alt="" class="img-responsive"></a>
					<div class="box-item-detail">
					</div>
					<div class="mon-item-detail">
						<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><h4 class="text-center">{$row->p_name}</h4></a>
						<p class="text-center">{$row->p_price|number_format}đ</p>
						<input type="hidden" id="dongia{$row->p_id}" value="{$row->p_price}"/>
							<span style="margin-left: 10px">Số lượng mua</span>
							<input  class="col-md-offset-3" type="text" value="1" size="2" id="soluong{$row->p_id}" style="text-align: center;" />
					</div>
					<p class="text-center"><a href="javascript:void(0)" title="" id="{$row->p_id}" class="button-1"><button type="submit" class="btn-item btn btn-danger add-to-cart" title="Thêm vào giỏ hàng">Mua hàng</button></a> <a href="chi_tiet_sach.php?id={$row->p_id}" title=""><button class="btn-item btn add-to-cart" title="Xem chi tiết"><span class="glyphicon glyphicon-eye-open"></span></button></a></p>
				</div>
			</div>
			{/foreach}
		</div>
	</div>
</section>
<section class="author">
	<div class="featurette" id="about">
            <!------------------------code---------------start---------------->
            <div class="container-fluid">
                <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <h2>Albert Einstein</h2>
                                        <p>Người đọc quá nhiều và dùng tới bộ óc quá ít sẽ rơi vào thói quen suy nghĩ lười biếng.</p>
<p class="eng">Any man who reads too much and uses his own brain too little falls into lazy habits of thinking.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <h2>Louisa May Alcott</h2>
                                        <p>Sách hay, cũng như bạn tốt, ít và được chọn lựa; chọn lựa càng nhiều, thưởng thức càng nhiều.</p>
<p class="eng">Good books, like good friends, are few and chosen; the more select, the more enjoyable.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <h2>Mark Twain</h2>
                                        <p>Một người không đọc sách chẳng hơn gì kẻ không biết đọc.</p>
<p class="eng">A person who won’t read has no advantage over one who can’t read.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <h2>Rene Descartes</h2>
                                        <p>Đọc sách hay cũng giống như trò truyện với các bộ óc tuyệt vời nhất của những thế kỷ đã trôi qua.</p>
<p class="eng">The reading of all good books is like a conversation with the finest minds of past centuries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->
                    </div>
                    <!-- End Carousel Inner -->
                    <div class="col-md-4 col-md-offset-4">
                    	<div class="controls">
                    		<ul class="nav">
                    			<li data-target="#custom_carousel" data-slide-to="0">
                    				<a href="#"><img src="public/layout/images/authors/albert-einstein.jpg" class="img-responsive"></a>
                    			</li>
                    			<li data-target="#custom_carousel" data-slide-to="1">
                    				<a href="#"><img src="public/layout/images/authors/louisa-may-alcott.jpg" class="img-responsive"></a>
                    			</li>
                    			<li data-target="#custom_carousel" data-slide-to="2">
                    				<a href="#"><img src="public/layout/images/authors/mark-twain.jpg" class="img-responsive"></a>
                    			</li>
                    			<li data-target="#custom_carousel" data-slide-to="3">
                    				<a href="#"><img src="public/layout/images/authors/rene-descartes.jpg" class="img-responsive"></a>
                    			</li>
                    		</ul>
                    	</div>
                    </div>
                </div>
                <!-- End Carousel -->
            </div>
</section>
<section class="nfs">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3 class="title-module">
					<span>Sách giáo khoa</span>
				</h3>
				{foreach $products_id1 as $row}
				<div class="cate-item">
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><img src="public/images/san_pham/{$row->p_image}" alt="" class="img-responsive"></a>
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><h4>{$row->p_name}</h4></a>
					<p>{$row->p_price|number_format}đ</p>
					<div class="clearfix"></div>
				</div>
				{/foreach}
			</div>
			<div class="col-md-4">
				<h3 class="title-module">
					<span>Sách tham khảo</span>
				</h3>
				{foreach $products_id2 as $row}
				<div class="cate-item">
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><img src="public/images/san_pham/{$row->p_image}" alt="" class="img-responsive"></a>
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><h4>{$row->p_name}</h4></a>
					<p>{$row->p_price|number_format}đ</p>
					<div class="clearfix"></div>
				</div>
				{/foreach}
			</div>
			<div class="col-md-4">
				<h3 class="title-module">
					<span>Sách chuyên ngành</span>
				</h3>
				{foreach $products_id3 as $row}
				<div class="cate-item">
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><img src="public/images/san_pham/{$row->p_image}" alt="" class="img-responsive"></a>
					<a href="chi_tiet_sach.php?id={$row->p_id}" title=""><h4>{$row->p_name}</h4></a>
					<p>{$row->p_price|number_format}đ</p>
					<div class="clearfix"></div>
				</div>
				{/foreach}
			</div>
		</div>
	</div>
</section>
<section class="blog">
	<div class="container">
		<h3 class="title-module">
			<span>Tin tức mới nhất</span>
		</h3>
		<div class="row">
			{foreach $dl_news as $row}
			<div class="col-md-4">
				<div class="blog-item">
					<div class="img-hid"><a href="chi_tiet_tin.php?id={$row->n_id}" title=""><img src="public/images/tin_tuc/{$row->n_image}" alt="" class="img-responsive"></a></div>
					<h4>{$row->n_adddate|date_format}</h4>
					<a href="chi_tiet_tin.php?id={$row->n_id}" title=""><h3>{$row->n_title}</h3></a>
					<p>{$row->n_sum}</p>
					<span class="readmore"><a href="chi_tiet_tin.php?id={$row->n_id}" title="">XEM CHI TIẾT </a><span class="glyphicon glyphicon-arrow-right"></span></span></a>
				</div>
			</div>
			{/foreach}
			<div class="col-md-4 col-md-offset-4">
				<a href="tin_tuc.php" title=""><p class="text-center"><button type="submit" class="btn btn-primary btn-view-more">XEM TẤT CẢ BÀI VIẾT <span class="glyphicon glyphicon-arrow-right"></span></button></p></a>
			</div>
		</div>
	</div>
</section>