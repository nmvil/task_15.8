<?php
	function power($num, $pow) {
		if ($pow > 2) {
			$ans = $num * power ($num, $pow - 1);
		} elseif ($pow == 2) {
			return ($num * $num);
		}
		return $ans;
	}

	$n = readline();
	$p = readline();

	switch ($p) {
		case 0:
			echo 1;
			break;
		case 1:
			echo $n;
			break;
		default:
			echo (power($n, $p));
			break;
	}

?>