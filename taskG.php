<?php
	$n = readline();

	// быстрый вариант, но без while
	// if (($n & ($n - 1)) == 0) {
	// 	echo "YES";
	// } else {
	// 	echo "NO";
	// }	

	while ($n % 2 == 0) {
		$n /= 2;
	}
	if ($n > 1) {
		echo "NO";
	} else {
		echo "YES";
	}
?>