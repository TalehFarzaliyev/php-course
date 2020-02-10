<?php

$arr = [];
for ($i=0; $i <10 ; $i++) { 
	$arr[$i] = rand(10,1000);
}
echo "<pre>"; print_r($arr);
sort($arr);
echo "<pre>"; print_r($arr);
echo $arr[0]."<pre>";
$last_index = count($arr)-1;
echo $arr[$last_index]."<pre>";

?>