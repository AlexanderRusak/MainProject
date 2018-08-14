<?php
header('Content-type:text/html; charset="utf-8"');  
include 'db.php';
$login=$_POST['reg_login'];
$email=$_POST['reg_email'];
$password=md5($_POST['pwd1']);
$activation=md5($email.time());
$count=mysqli_query($connection,"SELECT `uid` FROM `users` WHERE `email`='$email'");
if(mysqli_num_rows($count) < 1)
        {
            mysqli_query($connection,"INSERT INTO `users`(`uid`,`login`, `email`, `password`, `activation`) VALUES('',$login','$email','$password','$activation')");
            //header('Location: auth_page.php');
            //exit;
        }
        else
        {
           $err= mysql_errno() . ": " . mysql_error(). "\n";
           
            //header('Location: index.php');
            //exit;
        }
?>