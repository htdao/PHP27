<?php
	$a = 6;
	$b = 0;

    echo "Phương trình: " . $a . "x + " . $b . " = 0";
    echo "<br>";
    if ($a == 0) {
        if ($b == 0) {
            echo ("Phương trình có vô số nghiệm!");
        } else {
            echo ("Phương trình vô nghiệm!");
        }
        return;
    } else {
        echo ("Phương trình có 1 nghiệm: x = ".(-$b/$a));
    }
 ?>