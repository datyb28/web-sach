<?php /* Smarty version 3.1.24, created on 2016-03-31 09:35:01
         compiled from "C:/xampp/htdocs/doan18_3/views/admin/bai_viet/v_edit_new.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2843756fcd325c3e2e8_32138258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58206be2f2919830b510b98629dd9b33daa13f06' => 
    array (
      0 => 'C:/xampp/htdocs/doan18_3/views/admin/bai_viet/v_edit_new.tpl',
      1 => 1458153887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2843756fcd325c3e2e8_32138258',
  'variables' => 
  array (
    'hienthithongtin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fcd325d00c31_16450882',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fcd325d00c31_16450882')) {
function content_56fcd325d00c31_16450882 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2843756fcd325c3e2e8_32138258';
?>
<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý bài viết</li>
	<li>Cập nhật bài viết</li>
	<li><?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->n_title;?>
</li>
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
					<input type="text" class="form-control" id="n_title" name="n_title" value="<?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->n_title;?>
">
				</div>
				<div class="form-group form-inline">
					<label for="" class="col-md-2">Hình đại diện:</label>
					<input id="n_image" class="form-control" name="n_image" type="text" value="/doan/public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->n_image;?>
" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
					<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'n_image' );" />
				</div>
				<div class="form-group form-inline">
					<label for="" class="col-md-2">Tóm tắt:</label>
					<textarea name="n_sum" class="form-control" rows="7" cols="50"><?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->n_sum;?>
</textarea>
				</div>
				<div class="form-group">
					<label for="" class="col-md-2">Nội dung:</label>
					<textarea name="n_content" class="form-control ckeditor" rows="3" cols="50"><?php echo $_smarty_tpl->tpl_vars['hienthithongtin']->value->n_content;?>
"</textarea>
				</div>
				<div class="form-group">
					<label for="" class="col-md-2">Trạng thái:</label>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="n_status" id="c_status" <?php if (($_smarty_tpl->tpl_vars['hienthithongtin']->value->n_status == 0)) {?>checked<?php }?>> Không hiển thị
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