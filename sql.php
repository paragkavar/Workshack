<?php

/*
$user_name = "fees0_4320930";
$password = "fergus";
$database = "fees0_4320930_bui";
$server = "sql212.0fees.net";
$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
*/


$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$db_handle = mysql_connect($mysql_host,$mysql_user,$mysql_pass);
$db_found = mysql_select_db('dbase');





if (!$db_found) {
	die("DATABASE not found!");
}

?>