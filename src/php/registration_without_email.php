<?php
header('Content-type:text/html; charset="utf-8"'); 
var_dump($_POST['param']);  
include 'db.php';
$login_code=json_decode($_POST['param']);
$login=gettext($login_code->login);

$email_code=json_decode($_POST['param']);
$email=gettext($login_code->email);

$password_code=json_decode(md5($_POST['pwd1']));
$password=gettext($password->password);
echo $email;
$activation=json_decode(md5($email.time()));
$count=mysqli_query($connection,"SELECT `uid` FROM `users` WHERE `email`='$email'");
if(mysqli_num_rows($count) < 1)
        {
            mysqli_query($connection,"INSERT INTO `users`(`uid`,`login`, `email`, `password`, `activation`) VALUES('',$login','$email','$password','$activation')");
           // header('Location: auth_page.php');
            //exit;
        }
        else
        {
          
           
           // header('Location: index.php');
            //exit;
        }
?>