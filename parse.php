<?php
	include 'adodb5/adodb.inc.php';
	$db = ADONewConnection('mssqlnative');
	$db->debug = true;
	$db->setConnectionParameter('characterSet','UTF-8');
	$db->connect('94.138.197.30','Sumaks','Sumaks2020','Az_Saygac');
 	//$rs = $db->getAll('SELECT * FROM ES_Helind WHERE ID>58000');
	print "<pre>";
	print_r($db);
	print "</pre>";

?>