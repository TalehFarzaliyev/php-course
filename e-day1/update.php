<?php
	
	if(isset($_GET['id']) and !empty($_GET['id']))
	{
		include 'config.php';

		$news_id = $_GET['id'];
		$sql     = "SELECT `id`,`ad`,`metn` FROM `xeberler` WHERE `id`='$news_id'";
		$result  = mysqli_query($conn,$sql);
		if($result)
		{
			$old_data= mysqli_fetch_assoc($result);
		}
		else
		{
			echo "Xeta";
		}
		

		if(isset($_POST['submit']))
		{
			if(isset($_POST['ad']) && isset($_POST['metn']))
			{
				$name = $_POST['ad'];
				$text = mysqli_real_escape_string($conn,$_POST['metn']);
				$sql2 = "UPDATE `xeberler` set `ad`='$name', `metn`='$text' Where `id`='$news_id'";
				$query = mysqli_query($conn,$sql2);
				if($query)
				{
					echo "<script>alert('Redakte Edildi')</script>";
					echo "<script>window.open('select.php','_self')</script>";
				}
				else
				{
					echo "<script>alert('Redakte Edilmedi')</script>";
					echo mysqli_error($conn);
				}
			}
		}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Redakte</title>
</head>
<body>
	<form method="post" action="#">
		<h1>Form Redakte Etmek</h1>
		<input type="text" name="ad" value="<?=$old_data['ad'];?>">
		<br><br>
		<textarea name="metn" ><?=$old_data['metn'];?></textarea>
		<br><br>
		<input type="submit" name="submit" value="Update">
	</form>
</body>
</html>
<?php
	}
	else{
		echo "<h1>Bele xeber Movcud Deyil</h1>";
	}
?>