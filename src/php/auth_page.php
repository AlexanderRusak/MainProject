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

		if (isset($_POST) AND $_SERVER['REQUEST_METHOD'] == "POST") {
			$formats= array("JPG","png");
			$format=@end(explode(".", $_FILES['image']['name']));
			if (in_array($format, $formats)) {
				if (is_uploaded_file($_FILES['image']['tmp_name'] )) {
					$dir ="../uploads/".$_FILES['image']['name']."_".rand(0,9999)."_".time().".".$format;/////
					if (move_uploaded_file($_FILES['image']['tmp_name'],$dir)) {

						$upl_photo=mysqli_query($connection,"UPDATE `mainInfo` SET `photoUrl` = '$dir' WHERE `idInfo` = '$uid' ");
						header( "refresh:1;" );

					}
					
				}
			}
			else{
				//echo "incorrect format";
			}
			
		}
	
	

	$chk_row=mysqli_query($connection,"SELECT idInfo FROM `mainInfo` WHERE `idInfo`='$uid'");
	$row=mysqli_num_rows($chk_row);
	if ($row==0) {
		$create_id=mysqli_query($connection,"INSERT INTO mainInfo (`idInfo`) VALUES ($uid) ");
		$create_id_work=mysqli_query($connection,"INSERT INTO workExp (`idWork`) VALUES ($uid) ");
		$create_id_education=mysqli_query($connection,"INSERT INTO Education (`idEducation`) VALUES ($uid) ");
		$create_id_skill=mysqli_query($connection,"INSERT INTO skills (`idSkills`) VALUES ($uid) ");
	}
	if ($row==1) {
	$aboutInfo=mysqli_query($connection,"SELECT `idInfo`, `aboutMe`, `Name`, `Age`, `Email`, `Web`, `Addres`, `Phone`, `photoUrl` FROM `mainInfo` WHERE `idInfo`='$uid' ");
	$aboutInfo=mysqli_fetch_assoc($aboutInfo);
		$aboutMe=$aboutInfo['aboutMe'];
		$Age=$aboutInfo['Age'];
		$Name=$aboutInfo['Name'];
		$Email=$aboutInfo['Email'];
		$Web=$aboutInfo['Web'];
		$Addres=$aboutInfo['Addres'];
		$Phone=$aboutInfo['Phone'];
		$Photo=$aboutInfo['photoUrl'];

	$aboutEducation=mysqli_query($connection,"SELECT `idEducation`, `specialityFirst`, `institutionFirst`, `specialitySecond`, `institutionSecond`, `specialityThird`, `institutionThird`, `specialityFourth`, `institutionFourth` FROM `Education` WHERE `idEducation`='$uid'");
	$aboutEducation=mysqli_fetch_assoc($aboutEducation);
		$specialityFirst=$aboutEducation['specialityFirst'];
		$institutionFirst=$aboutEducation['institutionFirst'];
		$specialitySecond=$aboutEducation['specialitySecond'];
		$institutionSecond=$aboutEducation['institutionSecond'];
		$specialityThird=$aboutEducation['specialityThird'];
		$institutionThird=$aboutEducation['institutionThird'];
		$specialityFourth=$aboutEducation['specialityFourth'];
		$institutionFourth=$aboutEducation['institutionFourth'];

	$aboutWork=mysqli_query($connection,"SELECT `idWork`, `positionFirst`, `organizationFirst`, `positionSecond`, `organizationSecond`, `positionThird`, `organizationThird`, `positionFourth`, `organizationFourth` FROM `workExp` WHERE `idWork`='$uid'");
	$aboutWork=mysqli_fetch_assoc($aboutWork);
		$positionFirst=$aboutWork['positionFirst'];
		$organizationFirst=$aboutWork['organizationFirst'];
		$positionSecond=$aboutWork['positionSecond'];
		$organizationSecond=$aboutWork['organizationSecond'];
		$positionThird=$aboutWork['positionThird'];
		$organizationThird=$aboutWork['organizationThird'];
		$positionFourth=$aboutWork['positionFourth'];
		$organizationFourth=$aboutWork['organizationFourth'];

	$aboutSkills=mysqli_query($connection,"SELECT `idSkills`, `nameSkillFirst`, `valueSkillFirst`, `nameSkillSecond`, `valueSkillSecond`, `nameSkillThird`, `valueSkillThird`, `nameSkillFourth`, `valueSkillFourth`, `nameSkillFifth`, `valueSkillFifth`, `nameSkillSixth`, `valueSkillSixth` FROM `skills` WHERE `idSkills`='$uid'");
	$aboutSkills=mysqli_fetch_assoc($aboutSkills);
		$nameSkillFirst=$aboutSkills['nameSkillFirst'];
		$valueSkillFirst=$aboutSkills['valueSkillFirst'];
		$nameSkillSecond=$aboutSkills['nameSkillSecond'];
		$valueSkillSecond=$aboutSkills['valueSkillSecond'];
		$nameSkillThird=$aboutSkills['nameSkillThird'];
		$valueSkillThird=$aboutSkills['valueSkillThird'];
		$nameSkillFourth=$aboutSkills['nameSkillFourth'];
		$valueSkillFourth=$aboutSkills['valueSkillFourth'];
		$nameSkillFifth=$aboutSkills['nameSkillFifth'];
		$valueSkillFifth=$aboutSkills['valueSkillFifth'];
		$nameSkillSixth=$aboutSkills['nameSkillSixth'];
		$valueSkillSixth=$aboutSkills['valueSkillSixth'];
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
	if (isset($_POST['firstPosition'])||isset($_POST['firstOrganization'])||isset($_POST['secondPosition'])||isset($_POST['secondOrganization'])||isset($_POST['thirdPosition'])||isset($_POST['thirdOrganization'])||isset($_POST['fourthPosition'])||isset($_POST['fourthOrganization'])) {
		$firstPosition=$_POST['firstPosition'];
		$firstOrganization=$_POST['firstOrganization'];
		$secondPosition=$_POST['secondPosition'];
		$secondOrganization=$_POST['secondOrganization'];
		$thirdPosition=$_POST['thirdPosition'];
		$thirdOrganization=$_POST['thirdOrganization'];
		$fourthPosition=$_POST['fourthPosition'];
		$fourthOrganization=$_POST['fourthOrganization'];
		$updateWorkExperience=mysqli_query($connection,"UPDATE `workExp` SET 
			`positionFirst` = '$firstPosition',
			`organizationFirst` = '$firstOrganization',
			`positionSecond` = '$secondPosition',
			`organizationSecond` = '$secondOrganization',
			`positionThird` = '$thirdPosition',
			`organizationThird` = '$thirdOrganization',
			`positionFourth` = '$fourthPosition',
			`organizationFourth` = '$fourthOrganization
			' WHERE `idWork` =$uid");
		echo "ok";
	}
	if (isset($_POST['firstSpec'])||isset($_POST['firstInstitution'])||isset($_POST['secondSpec'])||isset($_POST['secondInstitution'])||isset($_POST['thirdSpec'])||isset($_POST['thirdInstitution'])||isset($_POST['fourthSpec'])||isset($_POST['fourthInstitution'])) {
		$sFirst=$_POST['firstSpec'];
		$iFirst=$_POST['firstInstitution'];
		$sSecond=$_POST['secondSpec'];
		$iSecond=$_POST['secondInstitution'];
		$sThird=$_POST['thirdSpec'];
		$iThird=$_POST['thirdInstitution'];
		$sFourth=$_POST['fourthSpec'];
		$iFourth=$_POST['fourthInstitution'];
		$updateEducation=mysqli_query($connection,"UPDATE `Education` SET 
			`specialityFirst` = '$sFirst',
			`institutionFirst` = '$iFirst',
			`specialitySecond` = '$sSecond',
			`institutionSecond` = '$iSecond',
			`specialityThird` = '$sThird',
			`institutionThird` = '$iThird',
			`specialityFourth` = '$sFourth',
			`institutionFourth` = '$iFourth
			' WHERE `idEducation` =$uid");
		echo "ok";
	}













	if (isset($_POST['nameSkillFirst'])) {
		$nSkill=$_POST['nameSkillFirst'];
		$updateSkill=mysqli_query($connection,"UPDATE `skills` SET 
			`nameSkillFirst` = '$nSkill'
			 WHERE `idSkills` =$uid");
	}
	if (isset($_POST['valueSkillFirst'])) {
		$valSkill=$_POST['valueSkillFirst'];
		$updateSkill=mysqli_query($connection,"UPDATE `skills` SET 
			`valueSkillFirst` = '$valSkill'
			 WHERE `idSkills` =$uid");
	}

	if (isset($_POST['nameSkillSecond'])) {
		$nSkill=$_POST['nameSkillSecond'];
		$updateSkill=mysqli_query($connection,"UPDATE `skills` SET 
			`nameSkillSecond` = '$nSkill'
			 WHERE `idSkills` =$uid");
	}
	if (isset($_POST['valueSkillSecond'])) {
		$valSkill=$_POST['valueSkillSecond'];
		$updateSkill=mysqli_query($connection,"UPDATE `skills` SET 
			`valueSkillSecond` = '$valSkill'
			 WHERE `idSkills` =$uid");
	}
	if (isset($_POST['nameSkillThird'])) {
		$nSkill=$_POST['nameSkillThird'];
		$updateSkill=mysqli_query($connection,"UPDATE `skills` SET 
			`nameSkillThird` = '$nSkill'
			 WHERE `idSkills` =$uid");
	}
	if (isset($_POST['valueSkillThird'])) {
		$valSkill=$_POST['valueSkillThird'];
		$updateSkill=mysqli_query($connection,"UPDATE `skills` SET 
			`valueSkillThird` = '$valSkill'
			 WHERE `idSkills` =$uid");
	}
	if (isset($_POST['nameSkillFourth'])) {
		$nSkill=$_POST['nameSkillFourth'];
		$updateSkill=mysqli_query($connection,"UPDATE `skills` SET 
			`nameSkillFourth` = '$nSkill'
			 WHERE `idSkills` =$uid");
	}
	if (isset($_POST['valueSkillFourth'])) {
		$valSkill=$_POST['valueSkillFourth'];
		$updateSkill=mysqli_query($connection,"UPDATE `skills` SET 
			`valueSkillFourth` = '$valSkill'
			 WHERE `idSkills` =$uid");
	}
	if (isset($_POST['nameSkillFifth'])) {
		$nSkill=$_POST['nameSkillFifth'];
		$updateSkill=mysqli_query($connection,"UPDATE `skills` SET 
			`nameSkillFifth` = '$nSkill'
			 WHERE `idSkills` =$uid");
	}
	if (isset($_POST['valueSkillFifth'])) {
		$valSkill=$_POST['valueSkillFifth'];
		$updateSkill=mysqli_query($connection,"UPDATE `skills` SET 
			`valueSkillFifth` = '$valSkill'
			 WHERE `idSkills` =$uid");
	}
	if (isset($_POST['nameSkillSixth'])) {
		$nSkill=$_POST['nameSkillSixth'];
		$updateSkill=mysqli_query($connection,"UPDATE `skills` SET 
			`nameSkillSixth` = '$nSkill'
			 WHERE `idSkills` =$uid");
	}
	if (isset($_POST['valueSkillSixth'])) {
		$valSkill=$_POST['valueSkillSixth'];
		$valueSkillSixth=mysqli_query($connection,"UPDATE `skills` SET 
			`valueSkillSixth` = '$valSkill'
			 WHERE `idSkills` =$uid");
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
		<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
		<script src="http://malsup.github.io/min/jquery.form.min.js"></script>
		<script src="../JS/jspdf.debug.js"></script>
		<script src="../JS/jspdf.min.js"></script>
		<script type="text/javascript" src="../JS/scripts2.js" ></script>
		<link rel="stylesheet" type="text/css" href="../css/style2.min.css">
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
		<div id="container" class="container">
			<div class="fix">
				<div class="left-layer">
				
				<nav class="left-menu">
					<ul>
						<a href="#"><li>Home</li></a>
						<a href="#about"><li>About me</li></a>
						<a href="#work"><li>Work Experience</li></a>
						<a href="#Education"><li>Education</li></a>
						<a href="#skills"><li>Skills</li></a>
						<a href="#" id="download"><li>Download</li></a>
					</ul>
				</nav>
			</div>
			</div>
			


			<div class="top-layer">

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
					<div class="edition_about_me"><?php echo $aboutMe?></div>

				</div>
				<div class="sbmt_about_me">
					<div class="about_me_photo">
						<img class="imagePhoto" src='<?php echo $Photo; ?>'>
							
						</img>
							<form class="url" enctype="multipart/form-data" action="auth_page.php" method="post" id="form">
							Choose photo<input type="file" name="image"  id="image">
							</form>
							<div id='load'></div>
							
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
							<div class="name_personal_data"><?php echo $Name?></div>
						</li>
						<li>Age :
							<textarea id='pd_age' class="pd_textarea"></textarea>
							<div class="age_personal_data"><?php echo $Age?></div>
						</li>
						<li>Email :
							<textarea id='pd_email' class="pd_textarea"></textarea>
							<div class="email_personal_data"><?php echo $Email?></div>
						</li>
						<li>Web :
							<textarea id='pd_web' class="pd_textarea"></textarea>
							<div class="web_personal_data"><?php echo $Web?></div>
						</li>
						<li>
							Addres :
							<textarea id='pd_addres' class="pd_textarea"></textarea>
							<div class="addres_personal_data"><?php echo $Addres?></div>
						</li>
						<li>
							Phone :
							<textarea id='pd_phone' class="pd_textarea"></textarea>
							<div class="phone_personal_data"><?php echo $Phone?></div>
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
						<div id="resultPosFirts" class="resultPosition"><?php echo $positionFirst?></div>
						<div id="resultOrgFirst" class="resultOrganization"<?php echo $organizationFirst?>></div>
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
						<div id="resultPosSecond" class="resultPosition"><?php echo $positionSecond?></div>
						<div id="resultOrgSecond" class="resultOrganization"><?php echo $organizationSecond?></div>
					</div>
				</div>
			</div>
				
			<div class="secondBlock">
				<div class="rightSection2">
					<img src="../image/rightBlock.png" alt="">
					<div class="aboutWorkRight">
						<textarea id="posThird" maxlength="24" class="position" placeholder="Enter your position"></textarea>
						<textarea id="orgThird" maxlength="25" class="organization" placeholder="Enter organization name"></textarea>
						<div id="resultPosThird"  class="resultPosition"><?php echo $positionThird?></div>
						<div id="resultOrgThird" class="resultOrganization"><?php echo $organizationThird?></div>
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
						<div id="resultPosFourth" class="resultPosition"><?php echo $positionFourth?></div>
						<div id="resultOrgFourth" class="resultOrganization"><?php echo $organizationFourth?></div>
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
						<div id="resSpecFirst" class="resSpec"><?php echo $specialityFirst?></div>
						<div id="resInstitFirst" class="resInstit"><?php echo $institutionFirst?></div>
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
						<div id="resSpecSecond" class="resSpec"><?php echo $specialitySecond?></div>
						<div id="resInstitSecond" class="resInstit"><?php echo $institutionSecond?></div>
					</div>
				</div>
			</div>
				
			<div class="secondBlock">
				<div class="rightSection2">
					<img src="../image/rightBlock.png" alt="">
					<div class="aboutWorkRight">
						<textarea id="specThird" maxlength="24"  class="placeEduc" placeholder="Enter your specialization"></textarea>
						<textarea id="institThird" maxlength="25" class="specEduc" placeholder="Enter your institution"></textarea>
						<div id="resSpecThird" class="resSpec"><?php echo $specialityThird?></div>
						<div id="resInstitThird" class="resInstit"><?php echo $institutionThird?></div>
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
						<div id="resSpecFourth" class="resSpec"><?php echo $specialityFourth?></div>
						<div id="resInstitFourth" class="resInstit"><?php echo $institutionFourth?></div>
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
							<div class="userExperience1"><?php echo $nameSkillFirst?></div>
							<textarea class="nameExperience1" placeholder="Enter your skill"></textarea> 
							<input name="flevel" id="number1" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate1(value)"> 
							<output id="firstRange" for="number1" class="number" name="level"><?php echo $valueSkillFirst?></output>
							<script>
							function outputUpdate1(vol) { 
							  document.querySelector('#firstRange').value = vol;	 
							}
							</script>
					</div>

					<div class="ueBlock2">
						<div class="userExperience2"><?php echo $nameSkillSecond?></div>
						<textarea class="nameExperience2" placeholder="Enter your skill"></textarea> 
						<input  id="number2" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate2(value)"> 
							<output id="secondRange" for="number2" class="number" name="level"><?php echo $valueSkillSecond?></output>
							<script>
							function outputUpdate2(vol) { 
							  document.querySelector('#secondRange').value = vol;	 
							}
							</script>
					</div>
					<div class="ueBlock3">
						<div class="userExperience3"><?php echo $nameSkillThird?></div>
						<textarea class="nameExperience3" placeholder="Enter your skill"></textarea> 
							<input  id="number3" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate3(value)"> 
							<output id="thirdRange" for="number3" class="number" name="level"><?php echo $valueSkillThird?></output>
							<script>
							function outputUpdate3(vol) { 
							  document.querySelector('#thirdRange').value = vol;	 
							}
							</script>
					</div>
					<div class="ueBlock4">
						<div class="userExperience4"><?php echo $nameSkillFourth?></div>
						<textarea class="nameExperience4" placeholder="Enter your skill"></textarea> 
						<textarea class="nameExperience4"></textarea> 
						<input  id="number4" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate4(value)"> 
							<output id="fourthRange" for="number4" class="number" name="level"><?php echo $valueSkillFourth?></output>
							<script>
							function outputUpdate4(vol) { 
							  document.querySelector('#fourthRange').value = vol;	 
							}
							</script>
					</div>
					<div class="ueBlock5">
						<div class="userExperience5"><?php echo $nameSkillFifth?></div>
						<textarea class="nameExperience5" placeholder="Enter your skill"></textarea> 
						<input  id="number5" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate5(value)"> 
							<output id="fifthRange" for="number5" class="number" name="level"><?php echo $valueSkillFifth?></output>
							<script>
							function outputUpdate5(vol) { 
							  document.querySelector('#fifthRange').value = vol;	 
							}
							</script>
					</div>
					<div class="ueBlock6">
						<div class="userExperience6"><?php echo $nameSkillSixth?></div>
						<textarea class="nameExperience6" placeholder="Enter your skill"></textarea> 
						<input  id="number6" class="range" type="range" min="0" max="100" step="1" value="50" onchange="outputUpdate6(value)"> 
							<output id="sixthRange" for="number6" class="number" name="level"><?php echo $valueSkillSixth?></output>
							<script>
							function outputUpdate6(vol) { 
							  document.querySelector('#sixthRange').value = vol;	 
							}
							</script>
					</div>
				</div>
			</div>
				
			
				
		</div>
		

</body>
</html>
