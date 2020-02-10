<?php
// Provider=SQLOLEDB;Data Source=94.138.197.30;Initial Catalog=Az_Saygac; User ID=Sumaks;Password=Sumaks2020
$serverName = "94.138.197.30\\sqlexpress, 1542"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"Az_Saygac", "UID"=>"Sumaks", "PWD"=>"Sumaks2020");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>