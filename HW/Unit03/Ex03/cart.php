<?php 
	session_start();
	if (!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}
	$dataArr = $_SESSION['cart'];
	$t=0;
	$j=0;
	foreach ($dataArr as $value) {
		$j++;
		$t += $value['sum'];
	}
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
	<div class="container" style="padding: 20px;">
		<table class="table table-bordered">
		  <thead>
		  	<tr>
		      <th colspan="6" class="text-center"></th>
		      <td><a href="product.php">Tiếp tục mua hàng</a></td>
		    </tr>
		    <tr>
		    	<th colspan="7" class="text-center">Thông tin giỏ hàng</th>
		    </tr>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Tên sản phẩm</th>
		      <th scope="col">Số lượng</th>
		      <th scope="col">Đơn giá</th>
		      <th scope="col" class="text-center">Thành tiền</th>
		      <th scope="col">Thời gian cập nhật</th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		    	$k=0;
		    	foreach ($dataArr as $value) {
		    	 	$k++; 
		    ?>
		     	<tr>
		     		<td><?php echo $value['id']; ?></td>
		     		<td><?php echo $value['name']; ?></td>
		     		<td><?php echo $value['amount']; ?></td>
		     		<td><?php echo $value['price']; ?></td>
		     		<td><?php echo $value['sum']; ?></td>
		     		<td><?php echo $value['date']; ?></td>
		     		<td>
		     			<a href="delete.php?id=<?php echo $value['id']; ?>">Xóa khỏi giỏ hàng</a>
		     		</td>	
		     	</tr>
		     <?php } ?>
		     <tr>
		     	<th colspan="4" class="text-center">Tổng Tiền</th>
		     	<th colspan="3"><?php echo $t; ?></th>
		     </tr>
		  </tbody>
		</table>
	</div>
</body>
</html>