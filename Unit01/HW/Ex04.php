<table style="margin: 0 auto">
	<tr>
		<?php
			for($i = 2; $i < 10; $i ++) {
			    echo "<td style='padding:10px'>";
			    for($j = 1; $j <= 10; $j ++) {
			        echo "$i x $j = " . ($i * $j);
			        echo "<br>";
			    }
			    echo "</td>";
			}
		?>
	</tr>
</table>