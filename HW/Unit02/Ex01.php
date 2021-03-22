<?php 
	$array = array(1,4,2,6,9,100,45,8,20);
	$max=$array[0];
	 
	for ($i = 1; $i < count($array); $i++){
	    if ($array[$i] > $max){
	        $max = $array[$i];
	    }
	}
	echo "<pre>";
       print_r($array);
    echo "</pre>";
	echo "Phần tử lớn nhất của mảng là: " .$max;

 ?>