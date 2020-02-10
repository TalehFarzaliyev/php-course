<?php 
	
	// $a = 10;
	// $b = 15;
	// $c = 25;
	// if ($a == 11) 
	// {
	// 	echo "Beraber";
	// }
	// else if($a > 11)
	// {
	// 	echo "Boyukdur";
	// }
	// else if($a < 11)
	// {
	// 	echo "Kicikdir";
	// }
	// else
	// {
	// 	echo "Wrong condition!";
	// }
	// 1.1)A,C,B
	// 1.2)C,A,B
	
	// 1.1)A,C,B
	// 1.2)C,A,B

	// 1.1)A,C,B
	// 1.2)C,A,B
	

	// $a = 25;
	// $b = intval($a/10); //1ci teref
	// $c = $a%10;  //2ci teref

	// if($b>$c)
	// {
	// 	$out = $b+$c;
	// }
	// else if($b<$c)
	// {
	// 	$out = $c-$b;
	// }

	// echo $out;

	// $day = 7;
	// $divide = $day%3;
	// $level;
	// if ($day % 3 == 0)
	// {
	// 	echo "A , B , C";
	// } 
	// else if($day % 3 == 1) 
	// {
	// 	echo "C , A , B";
	// }
	// else if($day % 3 == 2) 
	// {
	// 	echo "B, C , A";
	// }

	//switch

	// switch ($divide) {
	// 	case 0:
	// 		echo "A , B , C";
	// 		break;
	// 	case 1:
	// 		echo "C , A , B";
	// 		break;
	// 	case 2:
	// 		echo "B, C , A";
	// 		break;

	// 	default:
	// 		echo "A , B , C";
	// 		break;
	// }
	
	$grade = 7;
	$level;
	if ($grade==1 || $grade==2 || $grade==3)
	{
		$level=1;
	} 
	else if ($grade==4 || $grade==5 || $grade==6)
	{
		$level=2;
	} 
	else if ($grade==7 || $grade==8 || $grade==9)
	{
		$level=3;
	} 
	else if ($grade==10 || $grade==11 || $grade==12 )
	{
		$level=4;
	} 

	switch ($level) {
		case 1:
			echo "Ilkin";
			break;
		case 2:
			echo "Orta";
			break;
		case 3:
			echo "Kafi";
			break;
		case 4:
			echo "Yuksek";
			break;

	}

?>