<?php
	header('Content-type:text/html; charset="utf-8"');  		
	$message="From ".htmlspecialchars($_POST['leave_msg_form_name'])." message ".htmlspecialchars($_POST['leave_msg_form_msg'])." addres ".htmlspecialchars($_POST['leave_msg_form_email']);
	$to="375298388602@mail.ru";	
	$from="rusak.alexander2017@yandex.ru";
	$subject="From my website";
	$headers = 'From: "rusak.alexander2017@yandex.ru"' . "\r\n" .
    'Reply-To: rusak.alexander2017@yandex.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    if($message==""){
    	break;
    }
    else{
    	mail($to, $subject, $message,$headers);	
    	$message="";
    	header('Location: http://src/index.php');
  		exit;
    }
	die(header('Location:'.$_SERVER['PHP_SELF']));

?>