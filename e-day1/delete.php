<?php
	if(isset($_GET['id']) and !empty($_GET['id']))
	{
		include 'config.php';
		$news_id = $_GET['id'];
		$sql = "DELETE FROM `xeberler` Where `id`='$news_id'";
		$query = mysqli_query($conn,$sql);
		if($query)
		{
			echo "<script>alert('Silindi!')</script>";
			echo "<script>window.open('select.php','_self')</script>";
		}
		else
		{
			echo "<script>alert('Silinmedi!')</script>";
			echo "<script>window.open('select.php','_self')</script>";
		}
	}

?>