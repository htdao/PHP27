<?php 
	session_start();
	if (!isset($_SESSION['product'])) {
		$_SESSION['product'] = array();
	}
		$dataArr = array();
			$dataArr[0]['id']="SP01";
			$dataArr[0]['name']="Kính Mắt";
			$dataArr[0]['price']=300000;
			$dataArr[1]['id']="SP02";
			$dataArr[1]['name']="Giày";
			$dataArr[1]['price']=500000;
			$dataArr[2]['id']="SP03";
			$dataArr[2]['name']="Đồng Hồ";
			$dataArr[2]['price']=1000000;
			$dataArr[3]['id']="SP04";
			$dataArr[3]['name']="Áo";
			$dataArr[3]['price']=50000;
	$_SESSION['product'] = $dataArr;	
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
		      <th colspan="3" class="text-center">DANH SÁCH SẢN PHẨM</th>
		      <td><a href="cart.php?id=<?php echo "view"; ?>">Xem giỏ hàng</a></td>
		    </tr>
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Tên sản phẩm</th>
		      <th scope="col">Đơn giá</th>
		      <th scope="col">Hành động</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		    	for ($i=0; $i < count($dataArr); $i++) { 
		    	
		    ?>
		     	<tr>
		     		<td><?php echo $dataArr[$i]['id']; ?></td>
		     		<td><?php echo $dataArr[$i]['name']; ?></td>
		     		<td><?php echo $dataArr[$i]['price']; ?></td>
		     		<td>
		     			<a href="cartProcess.php?id=<?php echo $dataArr[$i]['id']; ?>">Thêm vào giỏ hàng</a>
		     		</td>	
		     	</tr>
		     <?php } ?>
		  </tbody>
		</table>
	</div>
</body>
</html>