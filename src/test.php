<?php
$mysqli = new mysqli ("localhost", "root", "", "ReumererDB");
$mysqli->query ("SET NAMES 'utf8'");
$success = $mysqli->query ("INSERT INTO `users` (`login`, `pwd`, `reg_date`) VALUES ('".$_POST['login']."', '".$_POST['pwd']."', '".time ()."')");
echo $success;
$mysqli->close ();
echo $_POST['login'];
print_r($_POST);
?>