<?php
if(!session_id()) session_start();



/* $dbhost 	= 'fdb13.biz.nf';
$dbname		= '1852132_ch';
$dbuser		= '1852132_ch';
$dbpass		= ''; */

$dbhost 	= "localhost";
$dbname		= "chess";
$dbuser		= "root";
$dbpass		= "";
 
// database connection
try{
	$_db = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass, array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", 
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => true
                ));	
}catch(Excepion $e){
	die("ERROR : ".$e->getMessage());
}




$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	if (!$conn)
	{
		die("connection faild :" . mysqli_connect_error());
	}
	//echo "server connected sucessfully";

	$db = mysqli_select_db($conn,$dbname);

	if ($db) {
		//echo "detabase sellected";
	}
	else
	{
		echo "database erroe";
	}
?>