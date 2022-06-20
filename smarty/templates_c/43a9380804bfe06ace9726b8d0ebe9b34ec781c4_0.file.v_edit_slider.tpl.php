<?php /* Smarty version 3.1.24, created on 2016-03-17 20:20:14
         compiled from "C:/xampp/htdocs/doan/views/admin/slider/v_edit_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2969856eb036e5e1ea2_89213618%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a9380804bfe06ace9726b8d0ebe9b34ec781c4' => 
    array (
      0 => 'C:/xampp/htdocs/doan/views/admin/slider/v_edit_slider.tpl',
      1 => 1458242410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2969856eb036e5e1ea2_89213618',
  'variables' => 
  array (
    'hienthithongtin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb036e6381d0_65596629',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb036e6381d0_65596629')) {
function content_56eb036e6381d0_65596629 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2969856eb036e5e1ea2_89213618';
?>
<ol class="breadcrumb">
   	<li>Trang tổng quan</li>
	<li>Quản lý slider</li>
	<li class="active">Cập nhật slider</li>
</ol>
<div class="row">
<div class="col-md-12">
	<form action="" method="POST" role="form">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="col-md-3 panel-title">Thêm loại sách mới</h1>
				<div class="text-right">
					<button type="submit" name="submit" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-save"></span></p>Lưu lại</button>
					<button type="submit" name="submitout" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-open"></span></p>Lưu lại và thoát</button>
					<button type="submit" name="out" class="btn btn-primary"><p><span class="glyphicon glyphicon-remove"></span></p>Hủy bỏ</button>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group form-inline">
                	<p style="color:red" id="err_name"></p>
					<label for="" class="col-md-2">Hình đại diện:</label>
					<input id="s_image" class="form-control" name="s_image" type="text" value="/doan/public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->s_image;?>
" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
					<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 's_image' );" />
				</div>
				<div class="form-group form-inline">
					<label for="" class="col-md-2">Đường dẫn:</label>
					<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->s_link;?>
" class="form-control" name="s_link" id="s_link">
				</div>
				<div class="form-group form-inline">
					<label for="" class="col-md-2">Tên nút:</label>
					<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->s_button;?>
" class="form-control" name="s_button" id="s_button">
				</div>
				<div class="form-group">
					<label for="" class="col-md-2">Trạng thái:</label>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="s_status" id="s_status"> Không hiển thị
						</label>
					</div>
				</div>
			</div>
		</div>
	
		
	
	</form>
</div>
<?php echo '<script'; ?>
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
><?php }
}
?>