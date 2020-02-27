<?php

function login($username,$password,$user_datas)
{
	if(empty($username) && empty($password)){
			$msg = "Melumat daxil edin";
		}
		if(empty($username)){
			$msg = "Username daxil edin";
		}
		if(empty($password)){
			$msg = "Shifre daxil edin";
		}
		if(empty($msg))
		{
			foreach ($user_datas as $key => $value) {
				if ($value['username'] == $username && $value['password'] == $password) {
					$msg = "Daxil etdiyiniz məlumat yanlışdır!";		
				}else{
					$msg = "Daxil etdiyiniz məlumat yanlışdır!";
				}
			}
		}
	echo $msg;
}


function binarySearch($arr, $l, $r, $x)
{
	if($r >= 1)
	{
		$mid = $l + ($r-1)/2;

		if($arr[$mid]==$x)
			return $mid;

		if($arr[$mid]>$x)
			return binarySearch($arr, $l, $mid-1, $x);

		return binarySearch($arr, $mid+1, $r, $x);
	}
	return -1;
}

function displayNum($number)
{
	if($number<10)
	{
		echo $number."<br>";
		displayNum($number+1);
	}
}

function factorial($number)
{
	if($number<0)
		return -1;
	if($number == 0)
		return 1;
	return ($number*factorial($number-1));
}

?>