<?php 
	function findPrime($n) {
		for ($i = 2; $i <= sqrt($n) ; $i++) { 
			if ($n % $i == 0) {
				return false;
			}
		}
		return true;
	}

	$n = readline();

	if (findPrime($n)) {
		echo "prime";
	} else {
		echo "composite";
	}
?>