<?php 
	$str = "ZenttneZ";
	// $str = "nohh";
	echo "Chuỗi đầu vào: ".$str;
	if ($str == strrev($str)){
		echo "<br>Chuỗi đầu vào là chuỗi Palindrome!";
	}else{
		echo "<br>Chuỗi đầu vào không phải chuỗi Palindrome!";
	}
 ?>