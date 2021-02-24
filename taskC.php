<?php

	$year = readline();
	$isLeap = ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0));

	($isLeap) ? ($ans = "YES") : ($ans = "NO");
	echo $ans;

?>