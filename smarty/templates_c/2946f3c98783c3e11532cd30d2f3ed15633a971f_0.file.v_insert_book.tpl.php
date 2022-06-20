<?php /* Smarty version 3.1.24, created on 2016-03-18 03:15:54
         compiled from "C:/xampp/htdocs/doan/views/admin/sach/v_insert_book.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1632356eb64da164290_27261103%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2946f3c98783c3e11532cd30d2f3ed15633a971f' => 
    array (
      0 => 'C:/xampp/htdocs/doan/views/admin/sach/v_insert_book.tpl',
      1 => 1458267347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1632356eb64da164290_27261103',
  'variables' => 
  array (
    'cates_parent_id_prod' => 0,
    'k' => 0,
    'author_cate' => 0,
    'a' => 0,
    'publisher_cate' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56eb64da2109d5_02810188',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb64da2109d5_02810188')) {
function content_56eb64da2109d5_02810188 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1632356eb64da164290_27261103';
?>

<?php echo '<script'; ?>
>
    function kiemtra(){
    var name=document.getElementById('name');
    if (name.value==""){
    document.getElementById("err_name").innerHTML="Bạn đang để trống tên sản phẩm";
    name.focus();
    return false;
  }
  else{
    document.getElementById("err_name").innerHTML="";
  }
   //Giá
  var price=document.getElementById('price');
    if (price.value==""){
    document.getElementById("err_price").innerHTML="Bạn đang để trống giá sản phẩm";
    price.focus();
    return false;
  }
  else{
    document.getElementById("err_price").innerHTML="";
  }
  //Ảnh
  var image=document.getElementById("p_image");
  if (image.value=="") {
    document.getElementById("err_image").innerHTML="Bạn đang để trống hình ảnh chính sản phẩm";
    return false;
    image.focus();
  }
  else{
    document.getElementById("err_image").innerHTML="";
  }
  //from
  var from=document.getElementById('from');
    if (from.value==""){
    document.getElementById("err_from").innerHTML="Bạn đang để trống số trang";
    from.focus();
    return false;
  }
  else{
    document.getElementById("err_from").innerHTML="";
  }
   return true;
}
<?php echo '</script'; ?>
>

<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý sách</li>
	<li class="active">Thêm sách mới</li>
</ol>
<div class="row">
<div class="panel panel-info">
	<div class="panel-heading">
		<form action="" method="POST" role="form" class="form-inline form-insert">
			<h1 class="col-md-3 panel-title">Thêm sách mới</h1>
			<div class="text-right">
				<button type="submit" name="btnsave" onclick="return kiemtra()" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-save"></span></p>Thêm mới</button>
				<button type="submit" name="btnsaveout" onclick="return kiemtra()" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-open"></span></p>Thêm mới và thoát</button>
				<button type="reset" name="reset" class="btn btn-primary"><p><span class="glyphicon glyphicon-remove"></span></p><a href="listbook.php" title="" style="color:#FFF;text-decoration: none">Hủy bỏ</a></button>
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
					<div class="form-group col-md-12"  style="margin-top:30px">
						<label for="" class="col-md-2">Danh mục:</label>
						<select class="form-control" name="c_id" id="c_id">
						<?php
$_from = $_smarty_tpl->tpl_vars['cates_parent_id_prod']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['k']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
$_smarty_tpl->tpl_vars['k']->_loop = true;
$foreach_k_Sav = $_smarty_tpl->tpl_vars['k'];
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value->c_id;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value->c_name;?>
</option>
						<?php
$_smarty_tpl->tpl_vars['k'] = $foreach_k_Sav;
}
?>
						</select>
					</div>
					<div class="form-group col-md-12">
                        <p style="color:red" id="err_name"></p>
						<label for="" class="col-md-2">Tên sản phẩm:</label>
						<input type="text" class="form-control" id="name" name="p_name" placeholder="Nhập tên của sản phẩm">
					</div>
					<div class="form-group col-md-12">
                        <p style="color:red" id="err_price"></p>
						<label for="" class="col-md-2">Giá sản phẩm:</label>
						<div class="input-group">
							<input type="text" class="form-control" id="price" name="p_price" placeholder="Nhập giá sản phẩm">
							<div class="input-group-addon">vnđ</div>
						</div>
					</div>
					<div class="form-group col-md-12 form-inline">
                        <p style="color:red" id="err_image"></p>
						<label for="" class="col-md-2">Hình đại diện:</label>
						<input id="p_image" class="form-control" name="p_image" type="text" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
						<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'p_image' );" />
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
							<input type="text" class="form-control" readonly="readonly" name="p_sale" id="p_sale">
							<div class="input-group-addon">vnđ</div>
						</div>
					</div>
					<div class="form-group col-md-6">
						<label for="" class="col-md-4">Sản phẩm nổi bật:</label>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="p_feature" id="p_feature"> Nổi bật
							</label>
						</div>
					</div>
					<div class="form-group col-md-6">
						<label for="" class="col-md-3">Trạng thái:</label>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="p_status" id="p_status"> Không hiển thị
							</label>
						</div>
					</div>
			</div>
			<div id="menu1" class="tab-pane fade">
					<div class="form-group col-md-12 form-inline" style="margin-top:30px">
						<label for="" class="col-md-2">Số trang:</label>
                        <p style="color:red" id="err_from"></p> 
						<input type="text" class="form-control" name="p_page" id="from" placeholder="Nhập tên của sản phẩm">
					</div>
					<div class="form-group col-md-12 form-inline">
						<label for="" class="col-md-2">Tác giả:</label>
						<select class="form-control" name="a_id" id="a_id">
							<?php
$_from = $_smarty_tpl->tpl_vars['author_cate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value->a_id;?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value->a_name;?>
</option>
							<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
						</select>
					</div>
					<div class="form-group col-md-12 form-inline">
						<label for="" class="col-md-2">Nhà xuất bản:</label>
						<select class="form-control" name="pl_id" id="pl_id">
							<?php
$_from = $_smarty_tpl->tpl_vars['publisher_cate']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->pl_id;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value->pl_name;?>
</option>
							<?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
						</select>
					</div>
					<div class="form-group col-md-10 col-md-push-1 col-md-pull-1">
						<label for="">Mô tả sản phẩm:</label>
                        <p style="color:red" id="err_s_describe"></p> 
						<textarea name="p_describe" id="s_describe" class="form-control ckeditor" rows="10" style="resize:none;"></textarea>
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

<div id="menu2" class="tab-pane fade">
		<div class="form-group col-md-12 form-inline" style="margin-top:30px">
			<label for="" class="col-md-2">Hình ảnh 1:</label>
			<input id="p_thumbs_img1" class="form-control" name="p_thumbs_img1" type="text" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
			<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'p_thumbs_img1' );" />
		</div>
		<img src="" alt="">
		<div class="form-group col-md-12 form-inline">
			<label for="" class="col-md-2">Hình ảnh 2:</label>
			<input id="p_thumbs_img2" class="form-control" name="p_thumbs_img2" type="text" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
			<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'p_thumbs_img2' );" />
		</div>
		<div class="form-group col-md-12 form-inline">
			<label for="" class="col-md-2">Hình ảnh 3:</label>
			<input id="p_thumbs_img3" class="form-control" name="p_thumbs_img3" type="text" size="60" onclick="BrowseServer( 'Images:/', 'xFilePath' );"/>
			<input type="button" class="btn btn-primary" value="Tải ảnh lên" onclick="BrowseServer( 'Images:/', 'p_thumbs_img3' );"/>
		</div>
	</form>
</div>
<?php echo '</script'; ?>
>
</div>
</div>
</div><?php }
}
?>