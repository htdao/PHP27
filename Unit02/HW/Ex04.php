<?php 
	$name = " nguyễn văn anh ";
	echo "Chuỗi đầu vào: ".$name;

	//chuyển toàn bộ sang chữ thường
    $name = strtolower($name);
    //Cắt khoảng trắng ở đầu vào cuối
    $name = trim($name);
    //Viết hoa chữ cái đầu tiên các từ
    $name = ucwords($name);
    
    echo "<br>Chuỗi sau khi chuẩn hóa: ".$name.".";
 ?>