{literal}
<script>
	function kiemtra(){
		var name=document.getElementById('name');
		if (name.value=="") {
			document.getElementById("err_name").innerHTML="Bạn đang để trống tên";
			name.focus();
			return false;
		}
		else{
			document.getElementById("err_name").innerHTML="";
		}
		var email=document.getElementById('email');
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (email.value=="" || !re.test(email.value)) {
				document.getElementById('err_email').innerHTML="Email sai định dạng";
				email.focus();
				return false;	
			}
			
			else{
				document.getElementById("err_email").innerHTML="";
			}
		var phone=document.getElementById('phone');
		if (phone.value=="") {
				document.getElementById('err_phone').innerHTML="Số điện thoại nhập sai định dạng";
				phone.focus();
				return false;
			}
			else{
				document.getElementById("err_phone").innerHTML="";
			}
		var rep=document.getElementById('rep');
		if (rep.value=="") {
				document.getElementById('err_rep').innerHTML="Bạn đang để trống phản hồi";
				rep.focus();
				return false;
			}
			else{
				document.getElementById("err_rep").innerHTML="";
			}
		return true;
	}
</script>
{/literal}
<section class="breadcb">
	<h2>Trang liên hệ</h2>
	<p>Trang chủ / Liên hệ</p>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h3 class="title-module-right">
				<span>Ý kiến phản hồi</span>
			</h3>
			<form action="" method="POST" role="form">
				
				<div class="form-group col-md-12">
					<label for="">Họ và tên:</label>
					<input type="text" class="form-control" id="name" name="l_name" placeholder="Nhập họ tên">
                    <p style="color:red" id="err_name"></p>
				</div>
				<div class="form-group col-md-6">
					<label for="">Email:</label>
					<input type="text" class="form-control" id="email" name="l_email" placeholder="Nhập email">
                    <p style="color:red" id="err_email"></p>
				</div>
				<div class="form-group col-md-6">
					<label for="">Số điện thoại:</label>
					<input type="text" class="form-control" id="phone" name="l_phone" placeholder="Nhập số điện thoại">
                    <p style="color:red" id="err_phone"></p>
				</div>
				<div class="form-group col-md-12">
					<label for="">Nội dung:</label>
					<textarea rows="10" class="form-control" id="rep" name="l_content" ></textarea>
                    <p style="color:red" id="err_rep"></p>
				</div>
				
				<div class="form-group col-md-12">
					<p class="text-center"><button type="submit" name="send" class="btn btn-primary" onclick="return kiemtra()" style="margin-bottom: 40px">GỬI</button></p>
                </div>
			</form>
		</div>
		<div class="col-md-6">
			<div class="col-md-6">
				<h3 class="title-module-right">
					<span>Liên hệ</span>
				</h3>
				<div class="op-ct">
					<span class="glyphicon glyphicon-map-marker text-primary"></span>
					<p>50-52 Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội, Việt Nam</p>
				</div>
				<div class="op-ct">
					<span class="glyphicon glyphicon-earphone text-primary"></span>
					<p>(+841) 123 456</p>
				</div>
				<div class="op-ct">
					<span class="glyphicon glyphicon-envelope text-primary"></span>
					<p>Email: Contact@bookstore.com Website: www.Bookstore.com</p>
				</div>
			</div>
			<div class="col-md-6">
				<h3 class="title-module-right">
					<span>Liên kết</span>
				</h3>
			</div>
		</div>
	</div>
</div>