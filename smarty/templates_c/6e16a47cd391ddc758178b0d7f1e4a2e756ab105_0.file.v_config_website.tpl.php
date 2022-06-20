<?php /* Smarty version 3.1.24, created on 2016-03-31 09:33:11
         compiled from "C:/xampp/htdocs/doan18_3/views/admin/v_config_website.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2898656fcd2b7638305_40345933%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e16a47cd391ddc758178b0d7f1e4a2e756ab105' => 
    array (
      0 => 'C:/xampp/htdocs/doan18_3/views/admin/v_config_website.tpl',
      1 => 1458237490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2898656fcd2b7638305_40345933',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fcd2b7da91d1_17258011',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fcd2b7da91d1_17258011')) {
function content_56fcd2b7da91d1_17258011 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2898656fcd2b7638305_40345933';
?>
<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li class="active">Thiết lập website</li>
</ol>
<div class="row">
<div class="col-md-6 cog">
		<form action="" method="post" role="form" enctype="multipart/form-data">
			<legend class="text-center text-success"><strong><span class="glyphicon glyphicon-pencil"></span> CẬP NHẬT</strong></legend>
			<div class="form-group">
				<label for="">Tiêu đề website:</label>
				<input type="text" name="i_company" class="form-control" id="" value="<?php echo $_smarty_tpl->tpl_vars['info']->value->i_company;?>
">
			</div>
			<div class="form-group">
				<label for="">Đổi logo:</label>
				<input id="i_logo" class="form-control" name="i_logo" value="doan/public/images/website/<?php echo $_smarty_tpl->tpl_vars['info']->value->i_logo;?>
" type="text" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
			<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'i_logo' );" />
			</div>
			<div class="form-group">
				<label for="">Số điện thoại:</label>
				<input type="text" name="i_phone" class="form-control" id="" value="<?php echo $_smarty_tpl->tpl_vars['info']->value->i_phone;?>
">
			</div>
			<div class="form-group">
				<label for="">Email:</label>
				<input type="text" name="i_email" class="form-control" id="" value="<?php echo $_smarty_tpl->tpl_vars['info']->value->i_email;?>
">
			</div>
			<div class="form-group">
				<label for="">Facebook:</label>
				<input type="text" name="i_facebook" class="form-control" id="" value="<?php echo $_smarty_tpl->tpl_vars['info']->value->i_facebook;?>
">
			</div>
			<div class="form-group">
				<label for="">Địa chỉ:</label>
				<input type="text" name="i_address" class="form-control" id="" value="<?php echo $_smarty_tpl->tpl_vars['info']->value->i_address;?>
">
			</div>
			<p class="text-center">
				<button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
			</p>
		</form>
	</div>
	<div class="col-md-6">
		<legend class="text-center text-success"><strong><span class="glyphicon glyphicon-th"></span> THÔNG TIN HIỆN TẠI</legend>
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th class="col-md-4">Tiêu đề website</th>
					<th class="col-md-8 text-primary"><?php echo $_smarty_tpl->tpl_vars['info']->value->i_company;?>
</th>
				</tr>
			</thead>
			<thead>
				<tr> 
					<th class="col-md-4">Logo hiện tại</th>
					<th class="col-md-8"><p class="text-center"><img src="../public/images/website/<?php echo $_smarty_tpl->tpl_vars['info']->value->i_logo;?>
" class="img-responsive"></p></th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th class="col-md-4">Số điện thoại</th>
					<th class="col-md-8 text-primary"><?php echo $_smarty_tpl->tpl_vars['info']->value->i_phone;?>
</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th class="col-md-4">Địa chỉ</th>
					<th class="col-md-8 text-primary"><?php echo $_smarty_tpl->tpl_vars['info']->value->i_address;?>
</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th class="col-md-4">Email</th>
					<th class="col-md-8 text-primary"><?php echo $_smarty_tpl->tpl_vars['info']->value->i_email;?>
</th>
				</tr>
			</thead>
			<thead>
				<tr>
					<th class="col-md-4">Facebook</th>
					<th class="col-md-8 text-primary"><?php echo $_smarty_tpl->tpl_vars['info']->value->i_facebook;?>
</th>
				</tr>
			</thead>
		</table>
	</div>
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
>
<?php }
}
?>