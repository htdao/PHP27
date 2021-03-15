<?php 
	for($i = 1; $i < 9; $i ++) {
    	for($j = 1; $j < 9; $j ++) {
        	if($i<=$j){
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