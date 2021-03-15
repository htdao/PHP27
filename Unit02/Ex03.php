<?php 
	$info = array();
	$info[0]="Đào";
	$info[1]="0909090";
	$info[2]=100;
	$info[3]=array();
	$info[3][0]=array("Hà Thị Đào");

	echo "<pre>";
		print_r($info);
	echo "</pre>";

	echo "<br>Mảng 3 chiều: ".$info[3][0][0];
 ?>