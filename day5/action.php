<?php
$pass 	 = '12345';
$email 	 = 'ftaleh96@gmail.com';
$message = '';

if(isset($_POST['submit']))
{
	if(!empty($_POST['email'])){
		$form_email = $_POST['email'];
	}
	else{
		$form_email = '';
		$message ='Email bosh ola bilmez!';
	}
	if(!empty($_POST['password'])){
		$form_pass = $_POST['password'];
	}
	else{
		$form_pass = '';
		$message ='Parol bosh ola bilmez!';
	}
	if(empty($_POST['password']) && empty($_POST['email']))
	{
		$form_email= '';
		$form_pass = '';
		$message ='Zehmet olmasa her 2 saheni doldurun!';
	}


	if($pass == $form_pass && $email == $form_email)
	{
		header('Location:profile.php');
	}
	else
	{
		if(!empty($message))
		{
			echo "<h3>".$message."!</h3><br>";
		}
		else{
			echo "<h3>Daxil etdiyiniz melumatlar yanlishdir!</h3><br>";
			echo $form_pass.' -> '.$form_email;
		}
	}
}


?>