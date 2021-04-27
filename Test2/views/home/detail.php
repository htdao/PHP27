<?php 

   include_once('header.php');
 ?>
 	<div class="container-fluid bg-dark">
 	<div class="container">
 		<h3 class="text-center" style="color: white"><?= $detail['title'] ?></h3>
 		<p></p>
 		<img class="" style="height: 600px; width: 900px; margin-left: 17%" src="public/images/postImg/<?= $detail['thumbnail'] ?>">
 		
 		<div class="" style="padding-bottom: 20px; width: 900px; margin-left: 17%"">
 			<p class="" style="color: red; margin-top: 20px"><?= $detail['description'] ?></p>
 			<p class="" style="color: white; margin-top: 20px"><?= $detail['content'] ?></p>
 		</div>
 	</div>
 	</div>
<?php 
   require_once('footer.php');
 ?>