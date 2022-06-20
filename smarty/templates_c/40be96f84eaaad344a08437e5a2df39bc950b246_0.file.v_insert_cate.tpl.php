<?php /* Smarty version 3.1.24, created on 2016-04-01 17:57:27
         compiled from "C:/OpenServer/domains/doan.com/views/admin/loai_sach/v_insert_cate.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:200856fe8c573d3ad1_81659166%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40be96f84eaaad344a08437e5a2df39bc950b246' => 
    array (
      0 => 'C:/OpenServer/domains/doan.com/views/admin/loai_sach/v_insert_cate.tpl',
      1 => 1458229877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200856fe8c573d3ad1_81659166',
  'variables' => 
  array (
    'cates_parent' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56fe8c5747f143_78139993',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56fe8c5747f143_78139993')) {
function content_56fe8c5747f143_78139993 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '200856fe8c573d3ad1_81659166';
?>
<?php echo '<script'; ?>
>
    function kiemtra(){
        var name=document.getElementById('name');
		var mota=document.getElementById('mota');
        if (name.value=="") {
            document.getElementById("err_name").innerHTML="Tên không được rỗng";
            name.focus();
            return false;
        }
        else
             document.getElementById("err_name").innerHTML="";
		if (mota.value=="") {
            document.getElementById("err_mota").innerHTML="Tên không được rỗng";
            mota.focus();
            return false;
        }
        else
             document.getElementById("err_mota").innerHTML="";
            return true;

    }

<?php echo '</script'; ?>
>
<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý danh mục sách</li>
	<li class="active">Thêm danh mục</li>
</ol>
<div class="row">
<div class="col-md-12">
	<form action="" method="POST" role="form">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="col-md-3 panel-title">Thêm loại sách mới</h1>
				<div class="text-right">
					<button type="submit" name="submit" onclick="return kiemtra()" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-save"></span></p>Thêm mới</button>
					<button type="submit" name="submit" onclick="return kiemtra()" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-open"></span></p>Thêm mới và thoát</button>
					<button type="reset" name="reset" class="btn btn-primary"><p><span class="glyphicon glyphicon-remove"></span></p>Hủy bỏ</button>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group form-inline">
                	<p style="color:red" id="err_name"></p>
					<label for="" class="col-md-2">Tên loại sách:</label>
					<input type="text" class="form-control" id="name" name="c_name" placeholder="Nhập tên loại sách">
				</div>
				<div class="form-group form-inline">
                	<p style="color:red" id="err_mota"></p>
					<label for="" class="col-md-2">Mô tả loại sách:</label>
					<textarea name="c_summary" id="mota" class="form-control" rows="7" cols="50"></textarea>
				</div>
				<div class="form-group form-inline">
					<label for="" class="col-md-2">Danh mục cha:</label>
					<select class="form-control" name="parent_id" id="parent_id">
						<?php if (isset($_smarty_tpl->tpl_vars['cates_parent']->value)) {?>
						<?php
$_from = $_smarty_tpl->tpl_vars['cates_parent']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->c_id;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->c_name;?>
</option>
						<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
						<?php }?>
					</select>
				</div>
				<div class="form-group">
					<label for="" class="col-md-2">Trạng thái:</label>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="c_status" id="c_status"> Không hiển thị
						</label>
					</div>
				</div>
			</div>
		</div>
	
		
	
	</form>
</div><?php }
}
?>