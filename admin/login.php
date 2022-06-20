<?php
	session_start();
//khởi tạo 2 biến tài khoản và mật khẩu

	try {
		$conn = new PDO("mysql:host=localhost;dbname=store","root","");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->query("set names utf8");
	} catch (PDOException $e) {
		print "Lỗi kết nối cơ sở dữ liệu" . $e->getMessage();
		exit;
	}
	if(isset($_POST['submit'])){
		$sql = "select * from users";
		$cmd = $conn->prepare($sql);
		$cmd->execute();
		$kq = $cmd->fetch(PDO::FETCH_ASSOC);
		$username = $kq['u_account'];
		$password = $kq['u_password'];
		if($_POST['username'] == $username){
			if(MD5($_POST['password']) == $password){
				$_SESSION['login'] = "OK";
				$_SESSION['name'] = $username;
				header("location:index.php");	
			}else
				$err="<div class='alert alert-danger role='alert'>Bạn đã nhập sai mật khẩu!</div>";
		}elseif($_POST['username'] == "" || $_POST['password'] == ""){
			$err = "<div class='alert alert-danger role='alert'>Vui lòng nhập đầy đủ tài khoản và mật khẩu!</div>";
		}else
			$err = "<div class='alert alert-danger role='alert'>Tài khoản không tồn tại!</div>";
		
	}
?>
<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trang đăng nhập quản trị</title>

	<!-- Bootstrap CSS -->
	<link href="../public/layout/css/bootstrap.min.css" rel="stylesheet">
	<link href="../public/layout/css/admin.css" rel="stylesheet">
	<!-- jQuery -->
	<script src="../public/layout/js/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="../public/layout/js/bootstrap.min.js"></script>
	<script>
		function kiemtra(){
			var username = document.getElementById('username');
			var password = document.getElementById('password');
			if(username.value==""){
				document.getElementById("err_js").innerHTML = "<div class='alert alert-danger role='alert'>Vui lòng nhập vào tài khoản</div>";
				username.focus();
				return false;
			}
			if(password.value==""){
				document.getElementById("err_js").innerHTML = "<div class='alert alert-danger role='alert'>Vui lòng nhập vào mật khẩu</div>";
				password.focus();
				return false;
			}
			return true;
		}
	</script>
</head>
	<body class="wrap-login">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-offset-4 col-md-4 box-login">
						<h3 class="text-center"><span class="glyphicon glyphicon-user"></span> ĐĂNG NHẬP QUẢN TRỊ</h3>
						<form action="" method="POST" role="form">
						<?php echo isset($err)?$err:""?>
						<span id="err_js"></span>
							<div class="form-group">
								<label for="">Tên đăng nhập</label>
								<input type="text" class="form-control" id="username" name="username">
							</div>
							<div class="form-group">
								<label for="">Mật khẩu</label>
								<input type="password" class="form-control" id="password" name="password">
							</div>

							<a href="" title=""><p>Quên mật khẩu?</p></a>
							<a href="../index.php" title=""><p>Quay về trang chủ</p></a>
							<p class="text-right"><button type="submit" name="submit" onclick="return kiemtra()" class="btn btn-primary">ĐĂNG NHẬP</button></p>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="container">
				<div class="row">
					<p class="text-center">&copy; Báo cao 10 đỉm</p>
				</div>
			</div>
		</div>

	</body>

	<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="../public/layout/js/menuadmin.js"></script>
</body>
</html>