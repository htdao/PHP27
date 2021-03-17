<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
       	<h3 class="text-center">ZENT GROUP PHP - Thực hành về gửi dữ liệu dùng POST</h3>
        <form action="check.php" method="POST" role="form">
        	<?php 
        		if (isset($_COOKIE['check_failes'])) {
        	 ?>
		        <div class="alert alert-danger">
		            <strong>Thông báo!</strong> Yêu cầu nhập đầy đủ thông tin
		        </div>
		    <?php } ?>
		  	<div class="form-group row">
		    	<label for="inputEmail3" class="col-sm-2 col-form-label">Mã Sinh Viên</label>
		    	<div class="col-sm-10">
		      		<input type="text" class="form-control" id="inputEmail3" name="id" placeholder="Nhập mã sinh viên">
		    	</div>
		  	</div>
		  	<div class="form-group row">
		    	<label for="inputEmail3" class="col-sm-2 col-form-label">Họ Và Tên</label>
		    	<div class="col-sm-10">
		      		<input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Nhập tên">
		    	</div>
		  	</div>
		  	<div class="form-group row">
		    	<label for="inputEmail3" class="col-sm-2 col-form-label">Số Điện Thoại</label>
		    	<div class="col-sm-10">
		      		<input type="text" class="form-control" id="inputEmail3" name="phone" placeholder="Nhập số điện thoại">
		    	</div>
		  	</div>
		  	<div class="form-group row">
		    	<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
		    	<div class="col-sm-10">
		      		<input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Nhập email">
		    	</div>
		  	</div>
		  	<div class="form-group row">
		    	<label for="inputPassword3" class="col-sm-2 col-form-label">Mật Khẩu</label>
		    	<div class="col-sm-10">
		      		<input type="password" class="form-control" id="inputPassword3" name="pwd" placeholder="Nhập mật khẩu">
		    	</div>
		  	</div>

		  	<div class="form-group row">
		    	<label for="inputEmail3" class="col-sm-2 col-form-label">Giới tính</label>
		    	<div class="col-sm-10">
		      		<input class="form-check-input" type="radio" name="gt" id="nam" value="Nam" checked>
        			<label class="form-check-label" for="nam">Nam</label>
		      		<input class="form-check-input" type="radio" name="gt" id="nu" value="Nữ">
        			<label class="form-check-label" for="nu">Nữ</label>
        			<input class="form-check-input" type="radio" name="gt" id="khac" value="Khác">
        			<label class="form-check-label" for="khac">Khác</label>
		    	</div>
		  	</div>

		  	<div class="form-group row">
		    	<label for="inputEmail3" class="col-sm-2 col-form-label">Địa Chỉ</label>
		    	<div class="col-sm-10">
		      		<input type="text" class="form-control" id="inputEmail3" name="addr" placeholder="Nhập địa chỉ">
		    	</div>
		  	</div>
		  	<div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-primary">Lưu Thông Tin</button>
			    </div>
		  	</div>
		</form>
    </div>
</body>
</html>