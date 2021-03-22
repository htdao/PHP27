<?php 
	$arr = array(1,4,2,6,9,100,4);

	echo "Mảng ban đầu: ";
	for ($i=0; $i < count($arr) ; $i++) { 
		echo "$arr[$i]&nbsp;";
	}
	
	echo "<br>Mảng đảo ngược: ";
	for ($i=count($arr)-1; $i>=0; $i--) { 
		echo "$arr[$i]&nbsp;";
	}
 ?>