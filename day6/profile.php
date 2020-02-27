<?php
	include 'array.php';
	//echo "<pre>"; print_r($user_datas); exit();
	$user_name = $_GET['username'];
	$profile_datas = [];
	foreach ($user_datas as $key => $value) {
		if ($user_datas[$key]['username'] == $user_name)
		{
			$profile_datas = [
					'name' 	  => $user_datas[$key]['name'],
					'surname' => $user_datas[$key]['surname']
			];
			break;
		}
	}
	echo $profile_datas['name'].' '.$profile_datas['surname'];

?>