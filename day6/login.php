<?php
	include 'action.php';
	$username = '';
	$password = '';
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sign in with PHP</title>
	</head>
	<body>
		<h1>Form Login</h1> <br>
		<?php if(!empty($msg)) echo'<h3>'.$msg.'</h3>'; ?>
		<form action="#" method="POST">
		<input name="username" type="text" placeholder="Username" value="<?=$username;?>"> <br> <br>
		<input name="password" type="password" placeholder="Password" value="<?=$password;?>"> <br> <br>
		<input name="submit" type="submit" value="Submit">
	</form>
	</body>
</html>