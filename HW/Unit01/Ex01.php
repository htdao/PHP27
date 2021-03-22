<?php
	$a = 0;
	$b = 5;
	$c = 1;

    echo "Phương trình: " . $a . "x<sup>2</sup> + " . $b . "x + " . $c . " = 0";
    echo "<br>";
    if ($a == 0) {
        if ($b == 0) {
            echo ("Phương trình vô nghiệm!");
        } else {
            echo ("Phương trình có một nghiệm: "."x = ".(-$c/$b));
        }
        return;
    }
    $delta = $b*$b-4*$a*$c;
    $x1 = "";
    $x2 = "";
    // tính nghiệm
    if ($delta > 0) {
        $x1 = (-$b+sqrt($delta))/(2*$a);
        $x2 = (-$b-sqrt($delta))/(2*$a);
        echo ("Phương trình có 2 nghiệm phân biệt là: "."x1 = ".$x1." và x2 = ".$x2);
    } else if ($delta == 0) {
        $x1 = (- $b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = ".$x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    } 
 ?>