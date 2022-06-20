<?php /* Smarty version 3.1.24, created on 2016-04-01 17:52:03
         compiled from "C:/OpenServer/domains/doan.com/views/admin/bai_viet/v_insert_new.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:172356fe8b13270903_84947401%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b9028fb3ac6b79966da657307dfb48e511279c0' => 
    array (
      0 => 'C:/OpenServer/domains/doan.com/views/admin/bai_viet/v_insert_new.tpl',
      1 => 1458230258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172356fe8b13270903_84947401',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe8b133233a8_85048829',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe8b133233a8_85048829')) {
function content_56fe8b133233a8_85048829 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '172356fe8b13270903_84947401';
?>

<?php echo '<script'; ?>
>
    function kiemtra(){
    var name=document.getElementById('n_title');
    if (name.value==""){
    document.getElementById("err_name").innerHTML="Bạn đang để trống tên bài viết";
    name.focus();
    return false;
  }
  else{
    document.getElementById("err_name").innerHTML="";
  }
   //Ảnh
  var image=document.getElementById("n_image");
  if (image.value=="") {
    document.getElementById("err_image").innerHTML="Bạn đang để trống hình ảnh chính bài viết";
    return false;
    image.focus();
  }
  else{
    document.getElementById("err_image").innerHTML="";
  }
  //Tóm tắt
  var image=document.getElementById("n_sum");
  if (image.value=="") {
    document.getElementById("err_sum").innerHTML="Hãy nhập vào mô tả";
    return false;
    image.focus();
  }
  else{
    document.getElementById("err_sum").innerHTML="";
  }
   return true;
}
<?php echo '</script'; ?>
>

<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý bài viết</li>
	<li class="active">Thêm bài viết mới</li>
</ol>
<div class="row">
<div class="col-md-12">
	<form action="" method="POST" role="form">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="col-md-3 panel-title">Thêm tin tức mới</h1>
				<div class="text-right">
					<button type="submit" name="submit" onclick="return kiemtra()" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-save"></span></p>Thêm mới</button>
					<button type="submit" name="submitout" onclick="return kiemtra()" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-open"></span></p>Thêm mới và thoát</button>
					<button type="submit" name="out" class="btn btn-primary"><p><span class="glyphicon glyphicon-remove"></span></p>Hủy bỏ</button>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group form-inline">
                	<p style="color:red" id="err_name"></p>
					<label for="" class="col-md-2">Tiêu đề:</label>
					<input type="text" class="form-control" id="n_title" name="n_title" placeholder="Nhập tiêu đề tin">
				</div>
				<div class="form-group form-inline">
                	<p style="color:red" id="err_image"></p>
					<label for="" class="col-md-2">Hình đại diện:</label>
					<input id="n_image" class="form-control" name="n_image" type="text" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
					<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'n_image' );" />
				</div>
				<div class="form-group form-inline">
                	<p style="color:red" id="err_sum"></p>
					<label for="" class="col-md-2">Tóm tắt:</label>
					<textarea id="n_sum" name="n_sum" class="form-control" rows="7" cols="50"></textarea>
				</div>
				<div class="form-group">
					<label for="" class="col-md-2">Nội dung:</label>
					<textarea name="n_content" id="ckeditor" class="form-control ckeditor" rows="3" cols="50"></textarea>
				</div>
				<div class="form-group">
					<label for="" class="col-md-2">Trạng thái:</label>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="n_status" id="c_status"> Không hiển thị
						</label>
					</div>
				</div>
			</div>
		</div>
	
		
	
	</form>	<?php echo '<script'; ?>
 type="text/javascript" src="../public/ckfinder/ckfinder.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 type="text/javascript">

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
<?php echo '</script'; ?>
>
</div><?php }
}
?>