<?php 
	$numb = 10;
	ktchan_le($numb);
	function ktchan_le($n){
		if($n%2==0){
			echo "<br>Số chẵn";
		}else{
			echo "<br>Số lẻ";
		}
	}

	function tingtong($arr){
		$s=0;
		foreach ($arr as $value) {
			$s+=$value;
		}
		return $s;
	}
	$array = array(1,2,3,4,5);
	echo "<br>Tổng: ".tingtong($array);
 ?>