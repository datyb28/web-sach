<script>
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

</script>
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
						{if isset($cates_parent)}
						{foreach $cates_parent as $row}
						<option value="{$row->c_id}">{$row->c_name}</option>
						{/foreach}
						{/if}
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
</div>