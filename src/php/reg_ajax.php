<?php
session_start();
include 'db.php';
$email=$_POST['email'];
$login=$_POST['login'];
$password=$_POST['password'];
$chk_email=mysqli_query($connection,"SELECT * FROM `users` WHERE `email`='{$email}'");
$row_email=mysqli_num_rows($chk_email);
$chk_login=mysqli_query($connection,"SELECT * FROM `users` WHERE `login`='{$login}'");
$row_login=mysqli_num_rows($chk_login);

if ($row_login==1&&$row_email==0) {
	echo "login_failed";
}
if ($row_email==1&&$row_login==0) {
	echo "email_failed";
}
if ($row_email==1&&$row_login==1) {
	echo "failed";
}
if($row_email==0&&$row_login==0){
	queryReg($login,$email,$password,$connection);
}


function queryReg($l,$e,$p,$con){
		$pass=md5($p);
		$act=md5($e.time());
		mysqli_query( $con,"INSERT INTO users(`login`, `email`, `password`, `activation`) VALUES('{$l}','{$e}','{$pass}','{$act}')");
		echo "success";
		$_SESSION['name']=$l;
}
?>