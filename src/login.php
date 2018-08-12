<?php
include 'db.php';
$email=$_POST['email'];
$data=mysqli_query($connection,"SELECT * FROM `users` WHERE `email`='{$email}'");
$row_cnt=mysqli_num_rows($data);
if ($row_cnt==1) {
	echo "failed";
}
else{
	echo "seccess";
}
?>