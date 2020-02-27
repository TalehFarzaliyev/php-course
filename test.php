
<?php  
//phpinfo();
// /echo 'test';
$serverName = "94.138.197.30"; 
$uid = "Sumaks";   
$pwd = "Sumaks2020";  
$databaseName = "Az_Saygac"; 

//$conn = odbc_connect("Driver={SQL Server Native Client 10.0};Server=$serverName;Database=$databaseName;", $uid, $pwd);
//"Provider=SQLOLEDB;Data Source=94.138.197.30;Initial Catalog=Az_Saygac; User ID=Sumaks;Password=Sumaks2020"
$connectionInfo = array( "UID"=>$uid,                            
                          "PWD"=>$pwd,                            
                          "Database"=>$databaseName); 

/* Connect using SQL Server Authentication. */  
//$conn = sqlsrv_connect( $serverName, $connectionInfo);  
$conn = new PDO("sqlsrv:Server=94.138.197.30;Database=Az_Saygac", $uid, $pwd);
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
//$conn = new PDO('sqlsrv:Server=94.138.197.30\\SQLEXPRESS;Database=Az_Saygac', $uid, $pwd);
//$tsql = "SELECT id, FirstName, LastName, Email FROM tblContact";  
// try {
//     $db = new PDO ("sqlsrv:server=".$serverName.":1433;dbname=".$databaseName, $uid, $pwd);
//     $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
//     $db->exec("set names utf8");
//     } catch (PDOException $e) {
//      $logsys .= "Failed to get DB handle: " . $e->getMessage() . "\n";
// }
/* Execute the query. */  
 

if ( $conn )  
{  
     echo "Statement executed.<br>\n";  
}   
else   
{  
     echo $logsys." Error in statement execution.\n";  
     // die( print_r( sqlsrv_errors(), true));  
}  

/* Iterate through the result set printing a row of data upon each iteration.*/  

// while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))  
// {  
//      echo "Col1: ".$row[0]."\n";  
//      echo "Col2: ".$row[1]."\n";  
//      echo "Col3: ".$row[2]."<br>\n";  
//      echo "-----------------<br>\n";  
// }  

// /* Free statement and connection resources. */  
// sqlsrv_free_stmt( $stmt);  
// sqlsrv_close( $conn);  
?>  