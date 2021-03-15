<?php 
	$infos_dao = array();
	$infos_dao['name'] = 'Đào';
	$infos_dao['age'] = 20;
	$infos_dao['phone'] = 03030303;

	echo "<br> Tên: ".$infos_dao['name'];
	echo "<br> Tuổi: ".$infos_dao['age'];
	echo "<br> Số điện thoại: ".$infos_dao['phone'];

	foreach ($infos_dao as $key => $value) {
		echo "<br>Key: ".$key." - value:".$value;
	}

	foreach ($infos_dao as $key) {
		echo "<br>giá trị: ".$key;
	}
 ?>