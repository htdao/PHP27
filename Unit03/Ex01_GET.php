<?php 
	echo "<pre>";
		print_r($_GET);
	echo "</pre>";

	$lang = $_GET["lang"];
	if ($lang=="vi") {
		echo "<br>Tiếng Việt";
	}else{
		echo "<br>Khác";
	}
 ?>