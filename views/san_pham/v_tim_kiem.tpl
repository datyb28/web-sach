<section class="breadcb">
  <h2>Trang tìm kiếm</h2>
  <p>Trang chủ / Tìm kiếm</p>
</section>
<section class="sellmon">
  <div class="container">
    <div class="row">
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
        <!-- <h3 class="title-module-right">
          <span>Sách khác</span>
        </h3>
        <ul class="nav nav-pills nav-stacked">
          {if isset($chon)}
          {foreach $chon as $row}
          <li><a href="?id={$row->p_id}"><span class="glyphicon glyphicon-book"></span> {$row->p_name}</a></li>
          {/foreach}
          {/if}
        </ul> -->
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
      <div class="col-md-12">
        <div class="col-md-12">
        <div class="col-md-12">
        {if isset($chon)}
        {foreach $chon as $row}
        <div class="col-md-3">
          <div class="mon-item">
            <a href="chi_tiet_sach.php?id={$row->p_id}" title=""><img src="public/images/san_pham/{$row->p_image}" alt="" class="img-responsive"></a>
            <div class="box-item-detail">
            </div>
            <div class="mon-item-detail">
              <h4 class="text-center"><a href="chi_tiet_sach.php?id={$row->p_id}" title="">{$row->p_name}</a></h4>
              <p class="text-center">{$row->p_price|number_format} vnđ</p>
              <input type="hidden" id="dongia{$row->p_id}" value="{$row->p_price}"/>
              <span style="margin-left: 10px">Số lượng mua</span>
              <input  class="col-md-offset-2" type="text" value="1" size="2" id="soluong{$row->p_id}" style="text-align: center;" /></p>
            </div>
            <p class="text-center"><a href="javascript:void(0)" title="" id="{$row->p_id}" class="button-1"><button type="submit" class="btn-item btn btn-danger add-to-cart" title="Thêm vào giỏ hàng">Mua hàng</button></a> <a href="chi_tiet_sach.php?id={$row->p_id}" title=""><button class="btn-item btn add-to-cart" title="Xem chi tiết"><span class="glyphicon glyphicon-eye-open"></span></button></a></p>
          </div>
        </div>
        {/foreach}
        {/if}
        <div class="col-md-6 col-md-offset-4">
          <ul class = "pagination">
            
          </ul>
        </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>