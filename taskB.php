<?php 
	$max = readline();
	$n2 = readline();
	$n3 = readline();
	
	if ($n2 > $max) {
		$max = $n2;
	}

	if ($n3 > $max) {
		$max = $n3;
	}

	echo $max;
 ?>