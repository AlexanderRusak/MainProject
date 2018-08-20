<?php
	session_start();
	include 'db.php';
	$s_name=$_SESSION['name'];
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
	$id=mysqli_query($connection,"SELECT uid FROM `users` WHERE `login`='$s_name'");
	$row_id=mysqli_fetch_assoc($id);
	$uid=$row_id['uid'];

	$chk_row=mysqli_query($connection,"SELECT idInfo FROM `mainInfo` WHERE `idInfo`='$uid'");
	$row=mysqli_num_rows($chk_row);
	
	if ($row==0) {
		$create_id=mysqli_query($connection,"INSERT INTO mainInfo (`idInfo`) VALUES ($uid) ");
	}
	if (isset($_POST['aboutMeText'])) {
		$aboutMeText=$_POST['aboutMeText'];
		$updateAboutMe=mysqli_query($connection,"UPDATE `mainInfo` SET `aboutMe` = '$aboutMeText' WHERE `idInfo` =$uid");
		echo "ok";
	}
	if (isset($_POST['name'])||isset($_POST['age'])||isset($_POST['email'])||isset($_POST['web'])||isset($_POST['addres'])||isset($_POST['phone'])) {
		$mainName=$_POST['name'];
		$mainAge=$_POST['age'];
		$mainEmail=$_POST['email'];
		$mainWeb=$_POST['web'];
		$mainAddres=$_POST['addres'];
		$mainPhone=$_POST['phone'];
		$updateAboutMe=mysqli_query($connection,"UPDATE `mainInfo` SET `Name` = '$mainName',`Age` = '$mainAge',`Email` = '$mainEmail',`Web` = '$mainWeb',`Addres` = '$mainAddres',`Phone` = '$mainPhone' WHERE `idInfo` =$uid");
		echo "ok";
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
			<div class="fix">
				<div class="left-layer">
				<div class="photo"></div>
				<nav class="left-menu">
					<ul>
						<a href="#"><li>Home</li></a>
						<a href="#about"><li>About me</li></a>
						<a href="#work"><li>Work Experience</li></a>
						<a href="#Education"><li>Education</li></a>
						<a href="#skills"><li>Skills</li></a>
						<a href="#contacts"><li>Contacts</li></a>
					</ul>
				</nav>
			</div>
			</div>
			


			<div class="top-layer">
				<div class="main-text">Lets Make Something Great</div>
				<div class="under-main-text"></div>
				<form class="logout" action="auth_page.php" method="post">
			<input type="submit" name="logout" value="logout"/>	
				</form>
			</div>

			<div class="about_me">
				<a name="about"></a>
				<div class="h_about_me">About me</div>
				<div class="red_line_about_me"></div>
				<div class="edit_about_me">
					<textarea class="edit_textarea_about_me"></textarea>
					<div class="edition_about_me"></div>

				</div>
				<div class="sbmt_about_me">
					<div class="about_me_photo">
						<div class="btn_about_me_photo">
						<div>Upload photo</div>
					</div>
					
					</div>
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
				<a name="work"></a>
				<div class="header_work">Work Experience</div>
				<div class="red_line_about_me"></div>
				<div class="firstBlocks">
				<div class="rightSection">
					<img src="../image/rightBlock.png" alt="">
					<div class="aboutWorkRight">
						<textarea id="posFirst" maxlength="24"  class="position" placeholder="Enter your position"></textarea>
						<textarea id="orgFirst" maxlength="25" class="organization" placeholder="Enter organization name"></textarea>
						<div id="resultPosFirts" class="resultPosition"></div>
						<div id="resultOrgFirst" class="resultOrganization"></div>
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
						<textarea id="posSecond" maxlength="24" class="position" placeholder="Enter your position"></textarea>
						<textarea id="orgSecond" maxlength="25" class="organization" placeholder="Enter organization name"></textarea>
						<div id="resultPosSecond" class="resultPosition"></div>
						<div id="resultOrgSecond" class="resultOrganization"></div>
					</div>
				</div>
			</div>
				
			<div class="secondBlock">
				<div class="rightSection2">
					<img src="../image/rightBlock.png" alt="">
					<div class="aboutWorkRight">
						<textarea id="posThird" maxlength="24" class="position" placeholder="Enter your position"></textarea>
						<textarea id="orgThird" maxlength="25" class="organization" placeholder="Enter organization name"></textarea>
						<div id="resultPosThird"  class="resultPosition"></div>
						<div id="resultOrgThird" class="resultOrganization"></div>
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
						<textarea id="posFourth" maxlength="24" class="position" placeholder="Enter your position"></textarea>
						<textarea id="orgFourth"  maxlength="25"class="organization" placeholder="Enter organization name"></textarea>
						<div id="resultPosFourth" class="resultPosition"></div>
						<div id="resultOrgFourth" class="resultOrganization"></div>
					</div>
				</div>
					<div>
						<div class="btn_for_accept_work">
							<div class="btn_accept_work">Accept</div>
							<div class="btn_cancel_work">Cancel</div>
						</div>
						<div class="btn_edit_work">
							<div>Edit</div>
						</div>
					</div>
			</div>
				
				<div class="line"></div>


			</div>
			<div class="work">
				<a name="Education"></a>
				<div class="header_work">Education</div>

				<div class="red_line_about_me"></div>
			<div class="firstBlocks">
				<div class="rightSection">
					<img src="../image/rightBlock.png" alt="">
					<div class="aboutWorkRight">
						<textarea id="specFirst" maxlength="24"  class="placeEduc" placeholder="Enter your specialization"></textarea>
						<textarea id="institFirst" maxlength="25" class="specEduc" placeholder="Enter your institution"></textarea>
						<div id="resSpecFirst" class="resSpec"></div>
						<div id="resInstitFirst" class="resInstit"></div>
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
						<textarea id="specSecond" maxlength="24"  class="placeEduc" placeholder="Enter your specialization"></textarea>
						<textarea id="institSecond" maxlength="25" class="specEduc" placeholder="Enter your institution"></textarea>
						<div id="resSpecSecond" class="resSpec"></div>
						<div id="resInstitSecond" class="resInstit"></div>
					</div>
				</div>
			</div>
				
			<div class="secondBlock">
				<div class="rightSection2">
					<img src="../image/rightBlock.png" alt="">
					<div class="aboutWorkRight">
						<textarea id="specThird" maxlength="24"  class="placeEduc" placeholder="Enter your specialization"></textarea>
						<textarea id="institThird" maxlength="25" class="specEduc" placeholder="Enter your institution"></textarea>
						<div id="resSpecThird" class="resSpec"></div>
						<div id="resInstitThird" class="resInstit"></div>
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
						<textarea id="specFourth" maxlength="24"  class="placeEduc" placeholder="Enter your specialization"></textarea>
						<textarea id="institFourth" maxlength="25" class="specEduc" placeholder="Enter your institution"></textarea>
						<div id="resSpecFourth" class="resSpec"></div>
						<div id="resInstitFourth" class="resInstit"></div>
					</div>
				</div>
					<div>
						<div class="btn_acception_education">
							<div class="btn_accept_education">Accept</div>
							<div class="btn_cancel_education">Cancel</div>
						</div>
						<div id="a" class="btn_edit_education">
							<div>Edit</div>
						</div>
					</div>
			</div>
			</div>
			<a name="skills"></a>
			<div class="skills">
				<div class="header_skills">My Skills</div>
				<div class="red_line_about_me"></div>
				<div class="skillsBlock">
					<div class="ueBlock">
							<div class="userExperience1"></div>
							<textarea class="nameExperience1" placeholder="Enter your skill"></textarea> 
							<input name="flevel" id="number1" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate1(value)"> 
							<output id="firstRange" for="number1" class="number" name="level">50</output>
							<script>
							function outputUpdate1(vol) { 
							  document.querySelector('#firstRange').value = vol;	 
							}
							</script>
					</div>

					<div class="ueBlock2">
						<div class="userExperience2"></div>
						<textarea class="nameExperience2" placeholder="Enter your skill"></textarea> 
						<input  id="number2" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate2(value)"> 
							<output id="secondRange" for="number2" class="number" name="level">50</output>
							<script>
							function outputUpdate2(vol) { 
							  document.querySelector('#secondRange').value = vol;	 
							}
							</script>
					</div>
					<div class="ueBlock3">
						<div class="userExperience3"></div>
						<textarea class="nameExperience3" placeholder="Enter your skill"></textarea> 
							<input  id="number3" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate3(value)"> 
							<output id="thirdRange" for="number3" class="number" name="level">50</output>
							<script>
							function outputUpdate3(vol) { 
							  document.querySelector('#thirdRange').value = vol;	 
							}
							</script>
					</div>
					<div class="ueBlock4">
						<div class="userExperience4"></div>
						<textarea class="nameExperience4" placeholder="Enter your skill"></textarea> 
						<textarea class="nameExperience4"></textarea> 
						<input  id="number4" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate4(value)"> 
							<output id="fourthRange" for="number4" class="number" name="level">50</output>
							<script>
							function outputUpdate4(vol) { 
							  document.querySelector('#fourthRange').value = vol;	 
							}
							</script>
					</div>
					<div class="ueBlock5">
						<div class="userExperience5"></div>
						<textarea class="nameExperience5" placeholder="Enter your skill"></textarea> 
						<input  id="number5" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate5(value)"> 
							<output id="fifthRange" for="number5" class="number" name="level">50</output>
							<script>
							function outputUpdate5(vol) { 
							  document.querySelector('#fifthRange').value = vol;	 
							}
							</script>
					</div>
					<div class="ueBlock6">
						<div class="userExperience6"></div>
						<textarea class="nameExperience6" placeholder="Enter your skill"></textarea> 
						<input  id="number6" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate6(value)"> 
							<output id="sixthRange" for="number6" class="number" name="level">50</output>
							<script>
							function outputUpdate6(vol) { 
							  document.querySelector('#sixthRange').value = vol;	 
							}
							</script>
					</div>
				</div>
			</div>
				
				<div class="about">
					<a name="contacts"></a>
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
