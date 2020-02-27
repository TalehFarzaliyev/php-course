<?php
$cars = [ 
	["Marka"=>"BMW","Model"=>"528"],
	1=>["Marka"=>"Ford","Model"=>"Mustang"],
	["Marka"=>"Ferrari","Model"=>"ENZO"],
	["Marka"=>"AUDI","Model"=>"A7"],
];
//echo"<pre>";print_r($cars);
echo "<table border='1' align='left' width='600'>";
echo "<th>Marka</th>";
echo "<th>Model</th>";
foreach ($cars as $key => $value) {
		echo "<tr>";
		echo "<td>".$value['Marka']."</td>";
		echo "<td>".$value['Model']."</td>";
		echo "</tr>";
}
echo "</table>";
?>