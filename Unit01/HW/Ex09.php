<?php 
	for($i = 1; $i < 8; $i ++) {
    	for($j = 1; $j < 8; $j ++) {
        	if($i+$j>=8){
        		echo "# ";
        	}
        	else{
        		echo "&nbsp;&nbsp;&nbsp;";
        	}
    	}
    	echo "<br>";
    	echo "<br>";
	}
 ?>