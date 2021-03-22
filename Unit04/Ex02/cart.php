<?php 
	// require('data.php');
	session_start();
	$products = $_SESSION['cart'];
	// echo "<pre>";
	// 	print_r($products);
	// echo "</pre>";
	// session_destroy();
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
		<h3 class="text-center" style="padding: 20px">Products</h3>
		<a href="index.php" class="btn btn-primary" role="button">Back to Home</a>
		<table class="table">
		  <thead>
		    <tr>
		      <th>Code</th>
		      <th>Name</th>
		      <th>Price</th>
		      <th>Quantity</th>
		      <th>Amount</th>
		      <th>Image</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  		$i=0;
		  		$sum = 0;
		  		foreach ($products as $value) {
		  			$sum+=$value[2]*$value[3];
		  	 ?>
		     	<tr>
		     		<td><?php echo $value[0]; ?></td>
		     		<td><?php echo $value[1]; ?></td>
		     		<td><?php echo $value[2]; ?></td>
		     		<td>
			     		<a href="add2cart.php?code=<?php echo $value['0']; ?>" class="btn btn-success">+</a> 
			     		<?php echo $value[3]; ?> 
			     		<a href="remove.php?code=<?php echo $value['0']; ?>&type=0" class="btn btn-danger">-</a></td>
		     		<td><?php echo $value[2]*$value[3]; ?></td>
		     		<td><?php echo $value[4]; ?></td>
		     		<td>
		     			<a href="remove.php?code=<?php echo $value['0']; ?>&type=1" class="btn btn-danger">Delete</a>
		     		</td>	
		     	</tr>
		     	<?php $i++; } ?>
		     	<tr>
		     		<th colspan="4">Tổng tiền</th>
		     		<th colspan="2"><?php echo $sum; ?></th>
		     	</tr>
		  </tbody>
		</table>
	</div>
</body>
</html>