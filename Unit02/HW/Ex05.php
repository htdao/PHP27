<?php 
	$name = "Dương Vũ Văn Quá";
	$arr = explode(" ",$name);
	$ho = $arr[0];
	$ten = $arr[count($arr)-1];
	$dem="";
	for ($i=1; $i < count($arr)-1 ; $i++) { 
		$dem = $dem.$arr[$i]." ";
	}
	echo "Chuỗi đầu vào: ".$name;
	echo "<br>Họ: ".$ho;
	echo "<br>Đệm: ".$dem;
	echo "<br>Tên: ".$ten;
 ?>