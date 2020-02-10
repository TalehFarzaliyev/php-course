<?php
//Ededin Beraber bolenlerinin sayi ve ozu
	$n = 20;
	$m = 1;
	$counter = 0;
	while ($m<=$n) {
		$tam 	= intval($n/$m);
		$qaliq 	= $n%$m;
		if($tam==$qaliq)
		{
			echo $m."<br>";
			$counter++;
		}
		$m++;
	}
	echo $counter;
?>