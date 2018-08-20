<?php
include 'db.php';
$uid=$_POST['uid'];
if (isset($_POST['aboutMeText'])) {
		$aboutMeText=$_POST['aboutMeText'];
		$updateAboutMe=mysqli_query($connection,"UPDATE `mainInfo` SET `aboutMe` = '1234' WHERE `idInfo` =$uid");
		echo 'ok';
	}
?>