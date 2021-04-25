<?php
	echo "<table>";
	echo "<tr><b>";
	for ($i = 0;$i <= 100;$i++){
		if($i==0){
			echo "<th></th>";
		} else {
			echo "<th>" . $i . "</th>";
		}
	}
	echo "</tr></b>";
	for ($i = 1;$i <= 100;$i++){
		echo "<tr>";
		for ($j = 0;$j <= 100;$j++){
			if($j==0){
				echo "<td><b>" . $i . "</td></b>";
			} else {
				echo "<td>" . $i * $j . "</td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
?>