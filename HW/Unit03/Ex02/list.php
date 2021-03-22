<?php 
	session_start();
	if (isset($_SESSION['info'])) {
		// echo "Tồn tại";
		$dataArr = $_SESSION['info'];
	}else{
		// echo "Không tồn tại";
		$_SESSION['info']=array();
		$dataArr = array();
	}
	//print_r($dataArr)
	
	// session_destroy();
	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h3 class="text-center" style="padding: 20px">DANH SÁCH NGƯỜI DÙNG</h3>
		<a href="add.php" class="btn btn-primary" role="button">Thêm mới</a>
		<?php 
        	if (isset($_COOKIE['add-status'])) {
        ?>
			<div class="alert alert-primary">
			    <strong>Thông báo!</strong> Thêm thành công!
			</div>
		<?php } ?>
		<?php 
        	if (isset($_COOKIE['delete-status'])) {
        ?>
			<div class="alert alert-primary">
			    <strong>Thông báo!</strong> Xóa thành công!
			</div>
		<?php } ?>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Mã Sinh Viên</th>
		      <th scope="col">Họ Tên</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		    	// print_r($dataArr);
		    	for ($i=0; $i < count($dataArr); $i++) { 
		    	
		    ?>
		     	<tr>
		     		<td><?php echo $i+1; ?></td>
		     		<td><?php echo $dataArr[$i]['id']; ?></td>
		     		<td><?php echo $dataArr[$i]['name']; ?></td>
		     		<td>
		     			<a href="detail.php?id=<?php echo $dataArr[$i]['id']; ?>" class="btn btn-success">Detail</a>
		     			<a href="delete.php?id=<?php echo $dataArr[$i]['id']; ?>" class="btn btn-danger">Delete</a>
		     		</td>	
		     	</tr>
		     <?php } ?>
		  </tbody>
		</table>
	</div>
</body>
</html>