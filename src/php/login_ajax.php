<?php
session_start();
include 'db.php';
$login=$_POST['login'];
$password=$_POST['password'];
$chk_pwd=mysqli_query($connection,"SELECT * FROM `users` WHERE `password`='{$password}'");
$row_email=mysqli_num_rows($chk_pwd);
$chk_login=mysqli_query($connection,"SELECT * FROM `users` WHERE `login`='{$login}'");
$row_login=mysqli_num_rows($chk_login);
if ($row_login==1&&$row_email==1) {
	$_SESSION['name']=$_POST['login'];
	echo "success";
}
else{
	echo "failed";
}


?>