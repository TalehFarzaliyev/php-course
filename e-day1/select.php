<?php
include 'config.php';

$sql 	= 'SELECT id,ad FROM `xeberler`';
$query 	= mysqli_query($conn,$sql);

if($query)
{
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Ad</th>";
	echo "<th>Emeliyyatlar</th>";
	echo "</tr>";
	while ($row = mysqli_fetch_assoc($query)) {
		echo "<tr>";
			echo "<td>".$row['id'].'</td>';
			echo "<td>".$row['ad'].'</td>';
			echo '<td><a href="update.php?id='.$row['id'].'">Redakte Et </a> | <a href="delete.php?id='.$row['id'].'"><button>Sil</button></a></td>';
		echo "</tr>";
	}
	echo '</table>';
}



?>