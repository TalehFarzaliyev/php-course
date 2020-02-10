<?php
	$n=11;
	$counter=0;
	do{
		if($n%2==0)
		{
			$n=$n/2;
		}
		else
		{
			$n++;
		}
		$counter++;
	}while($n!=1);
	echo $counter;
?>