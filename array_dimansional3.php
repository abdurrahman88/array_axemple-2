<?php
	$baju
	 = array
	(
		array("Koko",12,22),
		array("Jubah",13,23),
		array("Gamis",14,24),
		array("Kemeja",15,25)
	);

	for ($row = 0; $row < 4; $row++) {
  		echo "<p><b>Row number $row</b></p>";
 	 	echo "<ul>";
  	for ($col = 0; $col < 3; $col++) {
    	echo "<li>".$baju[$row][$col]."</li>";
  	}
  		echo "</ul>";
	}
		
?>