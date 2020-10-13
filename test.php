<?php
	//************ Database ***********//
		$servername = "localhost";
		$username 	= "root";
		$password 	= "";
		$database 	= "helind";
		$conm 		= mysqli_connect($servername, $username, $password,$database);
	//************ Database ***********//	
		$sql1 	= "SELECT max(`id`) as `last_id` From wc_helind";
		$result = mysqli_query($conm, $sql1);
		$row 	= mysqli_fetch_assoc($result);
		//print_r($row); exit();
		$last_id = $row['last_id'];
	//************Mysql End **********//
		
	$conn_string = "Provider=SQLOLEDB;Data Source=94.138.197.30;Initial Catalog=Az_Saygac; User ID=Sumaks;Password=Sumaks2020";
	$serverName = '94.138.197.30';//only the server name
	$connectionInfo = array( "Database"=>"Az_Saygac", "UID"=>"Sumaks", "PWD"=>"Sumaks2020");
	$conn 		= sqlsrv_connect( $serverName, $connectionInfo);
	$sql  		= "SELECT * FROM ES_Helind WHERE ID>59930";
    $params 	= array();
    $options 	=  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $stmt 		= sqlsrv_query( $conn, $sql , $params, $options );
    $row_count 	= sqlsrv_num_rows( $stmt );
	$data_arr 	= array();
	$counter 	= 0;
    while( $row = sqlsrv_fetch_array( $stmt) ) {
    	$data_arr[] = $row;
    }
    //echo "<pre>";print_r($data_arr);
    sqlsrv_close($conn);





		//print_r(json_encode($rs)); exit();
		if(!empty($data_arr))
		{
			for ($i=0; $i < count($data_arr); $i++) {
		        $sql 		 = '';
		        $insert_data = '';
		        for ($j=0; $j < 16 ; $j++) {
		            if($j == 1 or $j == 2 or $j == 8)
		            {
		            	if($j == 8)
		            	{
		            		$date = $data_arr[$i]['Zaman'];
		            		$data_arr[$i][$j] = $date->format('Y-m-d H:i:s');
							$given = new DateTime($data_arr[$i][$j], new DateTimeZone("Asia/Baku"));
							$given->setTimezone(new DateTimeZone("Asia/Baku"));
							$data_arr[$i][$j] = $given->format("Y-m-d H:i:s"); 
							//echo ($data_arr[$i][$j])
		            	}
		                $insert_data.="'".$data_arr[$i][$j]."',";
		            }
		        }
		        $insert_data = rtrim($insert_data,',');
		        $sql = "INSERT INTO `wc_helind`(devices_id, T0_1_8_0, Zaman) VALUES (".$insert_data.");".PHP_EOL;
		        //echo $sql; //exit();
		        if(!mysqli_query($conm,$sql))
		            echo("Error description: " . mysqli_error($conm));
		    }
		}
?>