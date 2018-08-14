<?php
	session_start();
	if (isset($_POST['logout'])) {
		unset($_SESSION['name']);
		session_destroy();
		header('Location: index.php');
         exit;
	}
	if (is_null($_SESSION['name'])){
		header('Location: index.php');
         exit;
	}
	else{
		echo "you are log in by the login:".$_SESSION['name']."   sddsdsdsdd";
	}
	
	
	
?>
<form action="auth_page.php" method="post">
	<input type="submit" name="logout" value="logout"/>	
</form>