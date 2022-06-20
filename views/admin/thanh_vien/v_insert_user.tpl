<ol class="breadcrumb">
    <li>Trang tổng quan</li>
	<li>Quản lý thành viên</li>
	<li class="active">Thêm thành viên mới</li>
</ol>
<div class="row">
<div class="col-md-12">
	<form action="" method="POST" role="form">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="col-md-3 panel-title">Thêm thành viên mới</h1>
				<div class="text-right">
					<button type="submit" name="submit" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-save"></span></p>Thêm mới</button>
					<button type="submit" name="submitout" class="btn btn-primary"><p><span class="glyphicon glyphicon-floppy-open"></span></p>Thêm mới và thoát</button>
					<button name="reset" class="btn btn-primary"><a href="listuser.php" title="" style="color:#FFF; text-decoration: none"><p><span class="glyphicon glyphicon-remove"></span></p>Hủy bỏ</a></button>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group col-md-6 form-inline">
					<label for="" class="col-md-4">Tài khoản:</label>
					<input type="text" class="form-control" id="u_account" name="u_account" placeholder="Nhập tài khoản">
				</div>
				<div class="form-group col-md-6 form-inline">
					<label for="" class="col-md-4">Mật khẩu:</label>
					<input type="password" class="form-control" id="u_password" name="u_password" placeholder="Nhập mật khẩu">
				</div>
				<div class="form-group form-inline col-md-12">
					<label for="" class="col-md-2">Tên thành viên:</label>
					<input type="text" class="form-control" id="u_name" name="u_name" placeholder="Nhập tên">
				</div>
				<div class="form-group form-inline col-md-12">
					<label for="" class="col-md-2">Địa chỉ:</label>
					<textarea name="u_address" id="u_address" class="form-control" rows="10" style="resize:none;"></textarea>
				</div>
				<div class="form-group form-inline col-md-6">
					<label for="" class="col-md-4">Loại tài khoản:</label>
					<select class="form-control" name="u_permiss" id="u_permiss">
						<option value="1">Thành viên</option>
						<option value="2">Quản trị viên</option>
					</select>
				</div>
				<div class="form-group  col-md-6">
					<label for="" class="col-md-4">Trạng thái:</label>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="u_status" id="u_status"> Không hoạt động
						</label>
					</div>
				</div>
				<div class="form-group form-inline col-md-6">
					<label for="" class="col-md-4">Email:</label>
					<input type="text" class="form-control" id="u_email" name="u_email" placeholder="Nhập email">
				</div>
				<div class="form-group form-inline col-md-6">
					<label for="" class="col-md-4">Số điện thoại:</label>
					<input type="text" class="form-control" id="u_phone" name="u_phone" placeholder="Nhập số điện thoại">
				</div>
			</div>
		</div>
	
		
	
	</form>
</div>