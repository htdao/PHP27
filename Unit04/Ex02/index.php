<?php 
	require('data.php');
	// session_start();
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
		<a href="cart.php" class="btn btn-primary" role="button">View cart</a>
		<table class="table">
		  <thead>
		    <tr>
		      <th>Code</th>
		      <th>Name</th>
		      <th>Price</th>
		      <th>Quantity</th>
		      <th>Image</th>
		      <th>#</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i=0;
		  		foreach ($products as $product) {
		  	 ?>
		     	<tr>
		     		<td><?php echo $product[0]; ?></td>
		     		<td><?php echo $product[1]; ?></td>
		     		<td><?php echo $product[2]; ?></td>
		     		<td><?php echo $product[3]; ?></td>
		     		<td><?php echo $product[4]; ?></td>
		     		<td>
		     			<a href="add2cart.php?code=<?php echo $product['0']; ?>" class="btn btn-success">Add to cart</a>
		     		</td>	
		     	</tr>
		     	<?php $i++; } ?>
		  </tbody>
		</table>
	</div>
</body>
</html>