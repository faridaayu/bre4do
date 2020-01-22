<?php 
include("koneksi.php");

$email = $_POST["email"];
$password = $_POST["password"];

$result = mysqli_query($conn, "select * from users where email='$email' && password='$password'");
if (mysqli_num_row($result) > 0)
{
	echo "Login";
	exit;
} else {
	echo "invalid";
	exit;
}
?>