<?php  

$sname = "localhost";
$uname = "root";
$password = "";
$host = "remotemysql.com";
$user = "NsqxjSUDbx";
$password = "wLgUwnheJo";
$dbName = "NsqxjSUDbx" ;
$db_name = "NsqxjSUDbx";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}