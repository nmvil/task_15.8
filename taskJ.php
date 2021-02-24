<?php
	function nFibonacci($num) {
		switch ($num) {
			case 0:
				return 0;
			case 1: 
				return 1;	
			default:
				if ($num > 1) {
					$ans = nFibonacci($num - 1) + nFibonacci($num - 2);
				}
				return $ans;
		}
	}


	$n = readline();

	echo nFibonacci($n);

?>