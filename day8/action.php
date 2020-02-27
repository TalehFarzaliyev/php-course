<?php
include 'array.php';
include 'functions.php';
//$msg = '';
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username = $_POST['username'];
		$password = $_POST['password'];
		Login($username,$password,$user_datas);
	}
?>