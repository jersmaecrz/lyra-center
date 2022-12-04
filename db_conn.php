<?php  

$sname = "remotemysql.com";
$uname = "NsqxjSUDbx";
$password = "wLgUwnheJo";
$db_name = "NsqxjSUDbx";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}