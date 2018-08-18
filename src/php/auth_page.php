<?php
	session_start();
	if (isset($_POST['logout'])) {
		unset($_SESSION['name']);
		session_destroy();
		header('Location: ../index.php');
         exit;
	}
	if (is_null($_SESSION['name'])){
		header('Location: ../index.php');
         exit;
	}
	
	
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		new page
	</title>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
		<script type="text/javascript" src="../JS/scripts2.js" ></script>
		<link rel="stylesheet" type="text/css" href="../css/style2.min.css">
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
		<div class="container">
			<div class="left-layer">
				<div class="photo"></div>
				<nav class="left-menu">
					<ul>
						<li>Home</li>
						<li>About me</li>
						<li>Education</li>
						<li>Work Experience</li>
						<li>Skills</li>
						<li>Portfolio</li>
						<li>Contacts</li>
					</ul>
				</nav>
			</div>


			<div class="top-layer">
				<div class="main-text">Lets Make Something Great</div>
				<div class="under-main-text">Short about me</div>
				<form action="auth_page.php" method="post">
			<input type="submit" name="logout" value="logout"/>	
			</div>

			<div class="about_me">
				<div class="h_about_me">About me</div>
				<div class="red_line_about_me"></div>
				<div class="edit_about_me">
					<textarea class="edit_textarea_about_me"></textarea>
					<div class="edition_about_me"></div>

				</div>
				<div class="sbmt_about_me">
					<div class="about_me_photo"></div>
					<div class="btn_accept_about_me">
						<div class="btn_accept">Accept</div>
						<div class="btn_cancel">Cancel</div>
					</div>
					<div class="btn_edit_about_me">
						<div>Edit</div>
					</div>
				</div>
				<div class="personal_data">
					<ul>
						<li>Name :
							<textarea id='pd_name'class="pd_textarea"></textarea>
							<div class="name_personal_data"></div>
						</li>
						<li>Age :
							<textarea id='pd_age' class="pd_textarea"></textarea>
							<div class="age_personal_data"></div>
						</li>
						<li>Email :
							<textarea id='pd_email' class="pd_textarea"></textarea>
							<div class="email_personal_data"></div>
						</li>
						<li>Web :
							<textarea id='pd_web' class="pd_textarea"></textarea>
							<div class="web_personal_data"></div>
						</li>
						<li>
							Addres :
							<textarea id='pd_addres' class="pd_textarea"></textarea>
							<div class="addres_personal_data"></div>
						</li>
						<li>
							Phone :
							<textarea id='pd_phone' class="pd_textarea"></textarea>
							<div class="phone_personal_data"></div>
						</li>
					</ul>
					<div class="sbmt_personal data">
					<div class="btn_accept_about_me_pd">
						<div class="btn_accept_pd">Accept</div>
						<div class="btn_cancel_pd">Cancel</div>
					</div>
					<div class="btn_edit_about_me_pd">
						<div>Edit</div>
					</div>
					</div>
					
				</div>	</div>
			<div class="line"></div>
			<div class="work">
				<div class="header_work">Work Experience</div>
				<div class="red_line_about_me"></div>
			<div class="firstBlocks">
				<div class="rightSection">
					<img src="../image/rightBlock.png" alt="">
					<div class="aboutWorkRight">
						<textarea maxlength="24"  class="position" placeholder="Enter your position"></textarea>
						<textarea maxlength="25" class="organization" placeholder="Enter organization name"></textarea>
						<div class="resultPosition"></div>
						<div class="resultOrganization"></div>
					</div>
				</div>
				<div class="ellipse">
						<img src="../image/Ellipse.png" alt="">
						<img  class="little" src="../image/littleRed.png" alt="">
						<img class="r2" src="../image/Ellipse.png" alt="">
						<img  class="little" src="../image/littleRed.png" alt="">
				</div>
				<div class="leftSection">
					<img src="../image/leftBlock.png" alt="">
					<div class="aboutWorkLeft">
						<textarea maxlength="24" class="position" placeholder="Enter your position"></textarea>
						<textarea  maxlength="25" class="organization" placeholder="Enter organization name"></textarea>
						<div class="resultPosition"></div>
						<div class="resultOrganization"></div>
					</div>
				</div>
			</div>
				
			<div class="secondBlock">
				<div class="rightSection2">
					<img src="../image/rightBlock.png" alt="">
					<div class="aboutWorkRight">
						<textarea maxlength="24" class="position" placeholder="Enter your position"></textarea>
						<textarea maxlength="25" class="organization" placeholder="Enter organization name"></textarea>
						<div class="resultPosition"></div>
						<div class="resultOrganization"></div>
					</div>
				</div>
				<div class="ellipse2">
						<img src="../image/Ellipse.png" alt="">
						<img  class="little" src="../image/littleRed.png" alt="">
						<img class="r2" src="../image/Ellipse.png" alt="">
						<img  class="little" src="../image/littleRed.png" alt="">
				</div>
				<div class="leftSection2">
					<img src="../image/leftBlock.png" alt="">
					<div class="aboutWorkLeft">
						<textarea maxlength="24" class="position" placeholder="Enter your position"></textarea>
						<textarea  maxlength="25"class="organization" placeholder="Enter organization name"></textarea>
						<div class="resultPosition"></div>
						<div class="resultOrganization"></div>
					</div>
				</div>
					<div>
						<div class="btn_acception_work">
							<div class="btn_accept_work">Accept</div>
							<div class="btn_cancel_work">Cancel</div>
						</div>
						<div id="a" class="btn_edit_about_work">
							<div>Edit</div>
						</div>
					</div>
			</div>
				
				<div class="line"></div>


			</div>
			<div class="work">
				<div class="header_work">Education</div>
				<div class="red_line_about_me"></div>
			<div class="firstBlocks">
				<div class="rightSection">
					<img src="../image/rightBlock.png" alt="">
					<div class="aboutWorkRight">
						<textarea maxlength="24"  class="position" placeholder="Enter your position"></textarea>
						<textarea maxlength="25" class="organization" placeholder="Enter organization name"></textarea>
						<div class="resultPosition"></div>
						<div class="resultOrganization"></div>
					</div>
				</div>
				<div class="ellipse">
						<img src="../image/Ellipse.png" alt="">
						<img  class="little" src="../image/littleRed.png" alt="">
						<img class="r2" src="../image/Ellipse.png" alt="">
						<img  class="little" src="../image/littleRed.png" alt="">
				</div>
				<div class="leftSection">
					<img src="../image/leftBlock.png" alt="">
					<div class="aboutWorkLeft">
						<textarea maxlength="24" class="position" placeholder="Enter your position"></textarea>
						<textarea  maxlength="25" class="organization" placeholder="Enter organization name"></textarea>
						<div class="resultPosition"></div>
						<div class="resultOrganization"></div>
					</div>
				</div>
			</div>
				
			<div class="secondBlock">
				<div class="rightSection2">
					<img src="../image/rightBlock.png" alt="">
					<div class="aboutWorkRight">
						<textarea maxlength="24" class="position" placeholder="Enter your position"></textarea>
						<textarea maxlength="25" class="organization" placeholder="Enter organization name"></textarea>
						<div class="resultPosition"></div>
						<div class="resultOrganization"></div>
					</div>
				</div>
				<div class="ellipse2">
						<img src="../image/Ellipse.png" alt="">
						<img  class="little" src="../image/littleRed.png" alt="">
						<img class="r2" src="../image/Ellipse.png" alt="">
						<img  class="little" src="../image/littleRed.png" alt="">
				</div>
				<div class="leftSection2">
					<img src="../image/leftBlock.png" alt="">
					<div class="aboutWorkLeft">
						<textarea maxlength="24" class="position" placeholder="Enter your position"></textarea>
						<textarea  maxlength="25"class="organization" placeholder="Enter organization name"></textarea>
						<div class="resultPosition"></div>
						<div class="resultOrganization"></div>
					</div>
				</div>
					<div>
						<div class="btn_acception_work">
							<div class="btn_accept_work">Accept</div>
							<div class="btn_cancel_work">Cancel</div>
						</div>
						<div id="a" class="btn_edit_about_work">
							<div>Edit</div>
						</div>
					</div>
			</div>
			</div>
			<div class="skills">
				<div class="header_skills">My Skills</div>
				<div class="red_line_about_me"></div>
				<div class="skillsBlock">
					<div class="ueBlock">
						<div class="userExperience"></div>
						<input id="number" class="range" type="range" min="0" max="100" step="1" value="50"> 
						<label for="number" class="number"></label>
					</div>
					<div class="ueBlock2">
						<div class="userExperience"></div>
						<input id="number" class="range" type="range" min="0" max="100" step="1" value="50"> 
						<label for="number" class="number"></label>
					</div>
					<div class="ueBlock3">
						<div class="userExperience"></div>
						<input id="number" class="range" type="range" min="0" max="100" step="1" value="50"> 
						<label for="number" class="number"></label>
					</div>
					<div class="ueBlock4">
						<div class="userExperience"></div>
						<input id="number" class="range" type="range" min="0" max="100" step="1" value="50"> 
						<label for="number" class="number"></label>
					</div>
					<div class="ueBlock5">
						<div class="userExperience"></div>
						<input id="number" class="range" type="range" min="0" max="100" step="1" value="50"> 
						<label for="number" class="number"></label>
					</div>
					<div class="ueBlock6">
						<div class="userExperience"></div>
						<input id="number" class="range" type="range" min="0" max="100" step="1" value="50"> 
						<label for="number" class="number"></label>
					</div>
				</div>
			</div>

				<div class="about">
						<div class="leave_msg">
							<div>Leave a Message</div>
							<form id="msg_form" class="leave_msg_form" action="php/mail.php"  method="post" >
								<div>
									<input type="text" name="leave_msg_form_name" for="name" placeholder="Enter your name*">
								</div>
								<div>
									<input type="email" name="leave_msg_form_email" for="email" placeholder="Enter your email*">
								</div>
								<div >
									<input id="msg_leave"  type="text"  name="leave_msg_form_msg" placeholder="Message*"></input>
								</div>
								<input class="btn_leave_msg" type="submit"  value="Send">
							</form>
						</div>
						<div class="line2"></div>
						
						<div class="location">
							<ul>
								<li><div class="location_img_1"></div>
									<div class="location_text">
										<div>Location</div>
										<div>324, Golden Tower, Amborkhana, Sylhet</div>
									</div>
								</li>
								<li><div class="location_img_2"></div>
									<div class="location_text">
										<div>Email</div>
										<div>rusak.alexander2017@yandex.ru</div>
									</div>
								</li>
								<li><div class="location_img_3"></div>
									<div class="location_text">
										<div>Call Me</div>
										<div>+375(29) 838-86-02</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
		</div>
		

</body>
</html>
