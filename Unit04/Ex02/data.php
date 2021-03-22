<?php 
	$images = array();
	$images['SP01'] = "<img style='width: 50px; height= 50px' src='images/ip5.jpg'>";
	$images['SP02'] = "<img style='width: 50px; height= 50px' src='images/ip6.jfif'>";
	$images['SP03'] = "<img style='width: 50px; height= 50px' src='images/ip7_plus.jpeg'>";
	$images['SP04'] = "<img style='width: 50px; height= 50px' src='images/Samsung_note9.jpg'>";
	$images['SP05'] = "<img style='width: 50px; height= 50px' src='images/ipX.jpeg'>";

	//echo $images['SP01'];

	$products = array();
	$products['SP01'] = array('SP01', 'IP 5', 3000000, 30, $images['SP01']);
	$products['SP02'] = array('SP02', 'IP 6', 3000000, 39, $images['SP02']);
	$products['SP03'] = array('SP03', 'IP 7 Plus', 3000000, 24, $images['SP03']);
	$products['SP04'] = array('SP04', 'IP Samsung Note 9', 8000000, 20, $images['SP04']);
	$products['SP05'] = array('SP05', 'IP X', 20000000, 100, $images['SP05']);
 ?>