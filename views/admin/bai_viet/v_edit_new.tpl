<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý bài viết</li>
	<li>Cập nhật bài viết</li>
	<li>{$hienthithongtin->n_title}</li>
</ol>
<div class="row">
<div class="col-md-12">
	<form action="" method="POST" role="form">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="col-md-3 panel-title">Cập nhật tin tức</h1>
				<div class="text-right">
					<button type="submit" name="submit" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-save"></span></p>Cập nhật</button>
					<button type="submit" name="submitout" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-open"></span></p>Cập nhật và thoát</button>
					<button type="submit" name="out" class="btn btn-primary"><p><span class="glyphicon glyphicon-remove"></span></p>Hủy bỏ</button>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group form-inline">
					<label for="" class="col-md-2">Tiêu đề:</label>
					<input type="text" class="form-control" id="n_title" name="n_title" value="{$hienthithongtin->n_title}">
				</div>
				<div class="form-group form-inline">
					<label for="" class="col-md-2">Hình đại diện:</label>
					<input id="n_image" class="form-control" name="n_image" type="text" value="/doan/public/images/tin_tuc/{$hienthithongtin->n_image}" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
					<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'n_image' );" />
				</div>
				<div class="form-group form-inline">
					<label for="" class="col-md-2">Tóm tắt:</label>
					<textarea name="n_sum" class="form-control" rows="7" cols="50">{$hienthithongtin->n_sum}</textarea>
				</div>
				<div class="form-group">
					<label for="" class="col-md-2">Nội dung:</label>
					<textarea name="n_content" class="form-control ckeditor" rows="3" cols="50">{$hienthithongtin->n_content}"</textarea>
				</div>
				<div class="form-group">
					<label for="" class="col-md-2">Trạng thái:</label>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="n_status" id="c_status" {if ($hienthithongtin->n_status==0)}checked{/if}> Không hiển thị
						</label>
					</div>
				</div>
			</div>
		</div>
	
		
	
	</form>	<script type="text/javascript" src="../public/ckfinder/ckfinder.js"></script>
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
</div>