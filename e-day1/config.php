<?php
	$servername = 'localhost';
	$username	= 'root';
	$password 	= '';
	$db_name	= 'php kursu';

	$conn 		= mysqli_connect($servername,$username,$password,$db_name);

	if(!$conn)
	{
		die("Connection Failed: ".mysqli_connect_error());
	}
	mysqli_set_charset($conn,"utf8");
?>