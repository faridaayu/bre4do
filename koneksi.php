<?php

$server_name = "localhost"; //servername
$user_name = "u795648811_bread";
$password = "Bre4do";
$db = "u795648811_bread";
$conn = mysql_connect($server_name, $user_name, $password, $db);

if (!$conn) {
	die("Error Connection");
} 
// else {
// 	echo "berhasil konek";
// }

?>