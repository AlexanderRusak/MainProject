<?php

function getResult($result_set){
	while (($row=$result_set->fetch_assoc())!=false) {
		if (($_POST['login'] == $row["login"]) && ($_POST['pwd'] == $row['pwd'])) {
			echo "ok";
			break;
		}
		
	}
	
}

$mysqli = new mysqli ("localhost", "root", "", "ReumererDB");
$mysqli->query ("SET NAMES 'utf8'");
$result_set = $mysqli->query ("SELECT * FROM `users`");
getResult($result_set);
$mysqli->close ();
echo $_POST['login'];
?>