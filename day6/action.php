<?php
include 'array.php';
$msg = '';
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username = $_POST['username'];
		$password = $_POST['password'];
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
					header("location: profile.php?username=".$username);
					//break;			
				}else{
					$msg = "Daxil etdiyiniz məlumat yanlışdır!";
				}
			}
		}
	}
?>