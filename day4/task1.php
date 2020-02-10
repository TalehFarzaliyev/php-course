<?php

$myarr = [1,10,-5,-19,35,-40,98];
echo'<pre>';print_r($myarr);
for ($i=0; $i <count($myarr) ; $i++) { 
	if($myarr[$i]>=0)
	{
		$myarr[$i] = $myarr[$i]+2;
	}	
}
echo "<pre>"; print_r($myarr);
?>