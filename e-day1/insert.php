<?php
	include 'config.php';

	if(isset($_POST['submit']))
	{
		if(isset($_POST['ad']) && isset($_POST['metn']))
		{
			$name = $_POST['ad'];
			$text = $_POST['metn'];
			$sql  = "INSERT INTO `xeberler`(`ad`,`metn`)VALUES('$name','$text')";
			if(mysqli_query($conn,$sql))
			{
				echo "<script>alert('Elave Edildi')</script>";
			}
			else
			{
				echo mysqli_error($conn);
			}
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Insert</title>
</head>
<body>
	<form method="post" action="#">
		<h1>Form Elave Etmek</h1>
		<input type="text" name="ad">
		<br><br>
		<textarea name="metn"></textarea>
		<br><br>
		<input type="submit" name="submit" value="Save">
	</form>
</body>
</html>