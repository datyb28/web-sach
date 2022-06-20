<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title Page</title>

	<!-- Bootstrap CSS -->
	<link href="../public/layout/css/bootstrap.min.css" rel="stylesheet">
	<link href="../public/layout/css/admin.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="../public/layout/js/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="../public/layout/js/bootstrap.min.js"></script>

	<!-- HTML5 Shim and Respond.js                              IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<section class="content-left">
		<aside class="col-md-2">
			<div class="header">
				<h4><img src="../public/layout/images/logoadmin.png" alt="" class="img-responsive" width="40" style="float:left">TRANG QUẢN TRỊ</h4>
			</div>
			<div class="clearfix"></div>
			<div id='cssmenu'>
				<ul>
					<li class='active'><a href='#'><span>Trang tổng quan</span></a></li>
					<li class='has-sub'><a href='#'><span><i class="glyphicon glyphicon-book"></i> Sách</span></a>
						<ul>
							<li><a href='#'><span>Thêm sách mới</span></a></li>
							<li><a href='#'><span>Danh sách sách</span></a></li>
						</ul>
					</li>
					<li class='has-sub'><a href='#'><span><i class="glyphicon glyphicon-list-alt"></i> Danh mục sách</span></a>
						<ul>
							<li><a href='#'><span>Thêm danh mục</span></a></li>
							<li class='last'><a href='#'><span>Danh sách danh mục</span></a></li>
						</ul>
					</li>
					<li><a href='#'><span><i class="glyphicon glyphicon-shopping-cart"></i> Đơn hàng</span></a></li>
					<li><a href='#'><span><i class="glyphicon glyphicon-comment"></i> Liên hệ</span></a></li>
					<li class='has-sub'><a href='#'><span><i class="glyphicon glyphicon-user"></i> Thành viên</span></a>
						<ul>
							<li><a href='#'><span>Thêm thành viên</span></a></li>
							<li class='last'><a href='#'><span>Danh sách thành viên</span></a></li>
						</ul>
					</li>
					<li><a href='#'><span><i class="glyphicon glyphicon-comment"></i> Slider</span></a></li>
					<li><a href='#'><span><i class="glyphicon glyphicon-comment"></i> Quảng cáo</span></a></li>
					<li><a href='#'><span><i class="glyphicon glyphicon-comment"></i> Thông tin</span></a></li>
					<li class="has-sub"><a href='#'><span><i class="glyphicon glyphicon-comment"></i> Khách hàng</span></a></li>
				</ul>
			</div>
		</aside>
	</section>
	<section class="content-right">
		<div class="col-md-10 header-right">
			
		</div>
		<script type="text/javascript" src="../public/ckeditor/ckeditor.js"></script>
		<section class="col-md-10 ct-right">
			<ol class="breadcrumb">
				<li>Sách</li>
				<li class="active">Thêm sách mới</li>
			</ol>
			<div class="row">
				<div class="col-md-push-6 col-md-6">
					
				</div>
			</div><!--/.row-->
			<div class="panel panel-info">
				<div class="panel-heading">
					<form action="" method="POST" role="form" class="form-inline form-insert">
						<h1 class="col-md-3 panel-title">Thêm sách mới
						</h1>
						<div class="text-right">
							<button type="submit" name="submit" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-save"></span></p>Thêm mới</button>
							<button type="submit" name="submit" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-open"></span></p>Thêm mới và thoát</button>
							<button type="reset" name="reset" class="btn btn-primary"><p><span class="glyphicon glyphicon-remove"></span></p>Hủy bỏ</button>
						</div>
					</div>
					<div class="panel-body">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#home">Thông tin cơ bản</a></li>
							<li><a data-toggle="tab" href="#menu1">Mô tả</a></li>
							<li><a data-toggle="tab" href="#menu2">Hình ảnh minh họa</a></li>
						</ul>

						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">
								<div class="form-group col-md-12">
									<label for="" class="col-md-2">Danh mục:</label>
									<select class="form-control">
										<option>Sách giáo khoa</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="form-group col-md-12">
									<label for="" class="col-md-2">Tên sản phẩm:</label>
									<input type="text" class="form-control" id="p_name" name="p_name" placeholder="Nhập tên của sản phẩm">
								</div>
								<div class="form-group col-md-12">
									<label for="" class="col-md-2">Giá sản phẩm:</label>
									<div class="input-group">
										<input type="text" class="form-control" id="p_price" name="p_price" placeholder="Nhập giá sản phẩm">
										<div class="input-group-addon">vnđ</div>
									</div>
								</div>
								<div class="form-group col-md-12 form-inline">
									<label for="" class="col-md-2">Hình đại diện:</label>
									<input id="p_image" class="form-control" name="p_image" type="text" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
									<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'p_image' );" />
								</div>
								<div class="form-group col-md-6">
									<label for="" class="col-md-4">Ngày tạo:</label>
									<div class="input-group">
										<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
										<input type="text" class="form-control" id="exampleInputAmount" placeholder="Chọn ngày tạo">
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="" class="col-md-4">Ngày cập nhật:</label>
									<div class="input-group">
										<div class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></div>
										<input type="text" class="form-control" placeholder="Chọn ngày cập nhật">
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="" class="col-md-4">Khuyến mại:</label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Nhập khuyến mại">
										<div class="input-group-addon">%</div>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="" class="col-md-4">Giá khuyến mại:</label>
									<div class="input-group">
										<input type="text" class="form-control" readonly="readonly">
										<div class="input-group-addon">vnđ</div>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="" class="col-md-4">Sản phẩm nổi bật:</label>
									<div class="checkbox">
										<label>
											<input type="checkbox"> Nổi bật
										</label>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="" class="col-md-4">Sản phẩm chọn:</label>
									<div class="checkbox">
										<label>
											<input type="checkbox"> Tuyển chọn
										</label>
									</div>
								</div>
								<div class="form-group col-md-8 col-md-push-4">
									<label for="" class="col-md-2">Trạng thái:</label>
									<div class="checkbox">
										<label>
											<input type="checkbox"> Không hiển thị
										</label>
									</div>
								</div>
							</form>
						</div>
						<div id="menu1" class="tab-pane fade">
							<form action="" method="POST" role="form" style="margin-top:30px">
								<div class="form-group col-md-12 form-inline">
									<label for="" class="col-md-2">Số trang:</label>
									<input type="text" class="form-control" id="" placeholder="Nhập tên của sản phẩm">
								</div>
								<div class="form-group col-md-12 form-inline">
									<label for="" class="col-md-2">Tác giả:</label>
									<select class="form-control">
										<option>Sách giáo khoa</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="form-group col-md-12 form-inline">
									<label for="" class="col-md-2">Nhà xuất bản:</label>
									<select class="form-control">
										<option>Sách giáo khoa</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class="form-group col-md-10 col-md-push-1 col-md-pull-1">
									<label for="">Mô tả sản phẩm:</label>
									<textarea name="p_sum" id="p_sum" class="form-control ckeditor" rows="10" style="resize:none;"></textarea>
								</div>
							</form>
						</div>
						


						<script type="text/javascript" src="../public/ckfinder/ckfinder.js"></script>
						<script type="text/javascript">

							function BrowseServer( startupPath, functionData )
							{
// You can use the "CKFinder" class to render CKFinder in a page:
var finder = new CKFinder();

// The path for the installation of CKFinder (default = "/ckfinder/").
finder.basePath = '';

//Startup path in a form: "Type:/path/to/directory/"
finder.startupPath = startupPath;

// Name of a function which is called when a file is selected in CKFinder.
finder.selectActionFunction = SetFileField;

// Additional data to be passed to the selectActionFunction in a second argument.
// We'll use this feature to pass the Id of a field that will be updated.
finder.selectActionData = functionData;

// Name of a function which is called when a thumbnail is selected in CKFinder.
finder.selectThumbnailActionFunction = ShowThumbnails;

// Launch CKFinder
finder.popup();
}

// This is a sample function which is called when a file is selected in CKFinder.
function SetFileField( fileUrl, data )
{
	document.getElementById( data["selectActionData"] ).value = fileUrl;
}

// This is a sample function which is called when a thumbnail is selected in CKFinder.
function ShowThumbnails( fileUrl, data )
{
// this = CKFinderAPI
var sFileName = this.getSelectedFile().name;
document.getElementById( 'thumbnails' ).innerHTML +=
'<div class="thumb">' +
'<img src="' + fileUrl + '" />' +
'<div class="caption">' +
'<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
'</div>' +
'</div>';

document.getElementById( 'preview' ).style.display = "";
// It is not required to return any value.
// When false is returned, CKFinder will not close automatically.
return false;
}
</script>
<div id="menu2" class="tab-pane fade">
	<form action="" method="POST" role="form" style="margin-top:30px">
		<div class="form-group col-md-12 form-inline">
			<label for="" class="col-md-2">Hình ảnh 1:</label>
			<input id="xFilePath" class="form-control" name="FilePath" type="text" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
			<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'xFilePath' );" />
		</div>
		<img src="" alt="">
		<div class="form-group col-md-12 form-inline">
			<label for="" class="col-md-2">Hình ảnh 2:</label>
			<input id="xFilePath1" class="form-control" name="FilePath" type="text" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
			<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'xFilePath1' );" />
		</div>
		<div class="form-group col-md-12 form-inline">
			<label for="" class="col-md-2">Hình ảnh 3:</label>
			<input id="xFilePath2" class="form-control" name="FilePath" type="text" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
			<input type="file" onchange="readURL(this);" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'xFilePath2' );"/>
		</div>
	</form>
</div>
<input type='file' onchange="readURL(this);" />
<img id="blah" src="#" alt="your image" />
<script>
// Display image
function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah')
			.attr('src',e.target.result)
			.width(150)
			.height(200);
		};

		reader.readAsDataURL(input.files[0]);
	}
}
</script>
</div>
</div>
</div>
</section>
</section>
<div class="clearfix"></div>
<footer>
	<p class="text-center">&copy; Nhà Sách Phú Đạt - <a href="http://chungback.xyz/" title="Nhấn vào trang web tác giả">http://phu.xyz/</a></p>

</footer>
<script src="../public/layout/js/menuadmin.js"></script>
</body>
</html>