<?php
	$n =65;
	$counter = 0;
	$i=1;
	do {
		if($n%$i==0)
		{
			echo $i."<br>";
			$counter++;
		}
		$i++;
	}while($i<=$n);
	while ( $i<=$n) {
		if($n%$i==0)
		{
			echo $i."<br>";
			$counter++;
		}
		$i++;
	}

	if($counter<=2)
	{
		echo "Sadedir, Bolenlerin sayi=".$counter;
	}
	else
	{
		echo "Murekkebdir, Bolenlerin sayi=".$counter;
	}
?>