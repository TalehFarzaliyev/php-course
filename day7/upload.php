<?php
//$name = $_POST['name'];
if(isset($_FILES['file']))
{
	$file_name = $_FILES['file']['name'];
	$file_size = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
	$file_type = $_FILES['file']['type'];
	
	$new_filename = 'image'.rand(10,100).'.jpg';

	move_uploaded_file($file_tmp, '../uploads/'.$new_filename);
}

?>

<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="file" />
         <input type="submit"/>
      </form>
      
      <img src="../uploads/<?=$new_filename;?>" width="500" height="400">

   </body>
</html>