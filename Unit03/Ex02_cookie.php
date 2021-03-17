<?php 
	echo "<br>".$_COOKIE['class'];
	setcookie('class', 'PHP27', time() + 60);
	echo "<br>".$_COOKIE['class'];
 ?>