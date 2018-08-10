<?php
							$message="From ".htmlspecialchars($_POST['leave_msg_form_name'])." messge ".htmlspecialchars($_POST['leave_msg_form_msg'])."addres ".htmlspecialchars($_POST['leave_msg_form_email']);
							$to="375298388602@mail.ru";
							$from="resumerer@mail.ru";
							$subject="From my website";
							$headers="From $from\r\nReplyTo: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
							mail($to, $subject, $messge,$headers);htmlspecialchars($fio)
						?>