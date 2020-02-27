<?php
include 'functions.php';
$a = 10;
$b = 15;
$name = 'Samir';

$host 	  = '192.168.1.1';
$username = 'root';
$password = 'q1w2e3r4';
$db_name  = 'test_database';

function Sum($p1,$p2)
{
	$sum = $p1+$p2;
	return $sum; //25
}

function Sum_void($p1,$p2)
{
	$sum = $p1+$p2;
	echo $sum; //25
}

function getName()
{
	GLOBAL $name;
	echo $name;
}

// function getSum()
// {
// 	echo $a+$b;
// }

// function connectDB()
// {
// 	$conn = mysqli_connect($GLOBALS['host'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['db_name']);
// 	return $conn;
// }
$c = Sum($a,$b); //25
//$d = Sum_void($a,$b); //25
//echo $c;
//getName();

$array = [];

for ($i=1; $i <=100 ; $i++) { 
	$array[$i] = $i;
}
//echo binarySearch($array, 0, 10, 15);
displayNum(1);
echo factorial(20);
?>