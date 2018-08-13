

<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<meta charset="utf-8" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script type="text/javascript" src="JS/scripts.js" ></script>
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
	
	  	<div class="white">
	  			<div class="left-container">
	  				<div class="fixed-menu">
	  				<div class="logo">
	  					<a href="#"><img width="275" height="225" src="image/logo.png"></a>
	  				</div>
	  				<nav  class="menu">
	  					<a href="#SignIn">SignIn</a>
	  					<a href="#reg">Registration</a>
	  					<a href="#">Contacts</a>
	  				</nav>
	  				</div>
	  			</div>
	  			<div class="top-layer">
	  			 <div class="lets">
	  			 	Let's Make Something Great
	  			 </div>
	  			 	<div class="underLets">
	  			 		I’m an UI designer that prides ourself on being strategic brand partners and awesome product providers
	  			 	</div>
	  					<div  class="SignIn">
	  						



	  						<!--     Форма входа -->
	  						<form method="post"   name="test" id="logInForm">
							<div>
									<label>UserName</label>
							</div>
							<div>
									<input id="sgn_login" type="text" name="signIn_login" placeholder="Enter username">
									
							</div>
							<div>
								<label>PassWord</label>
								<input id="sgn_pwd" type="password" name="signIn_pwd">
								
							</div>
							<div id="sgn_server_err"></div>
							<div>
								<input id="sgn_btn" type="submit" value="Send">
							</div>
															
							
						</form>
							<!--                              -->	
	  					</div>

	  					<form action="registration_without_email.php" method="post" name="test" id="regForm" >
	  						<div  class="Registration">
	  						<a name="Reg"></a>
							<div>
								<label>Login</label>
								<input type="text" placeholder="Enter your login" id="reg_login" name="reg_login">
								<div id="reg_login_server_err"></div>
							</div>
							<div>
								<label >Email</label>
								<input  type="text" placeholder="Enter your email" id="reg_email" name="reg_email">
								<b id="reg_email_server_err"></b>
							</div>
							<div>
								<label>PassWord</label>
								<input id="reg_pwd1"  type="password" name="reg_pwd1">
							</div>
							<div>
								<label>PassWord</label>
								<input id="reg_pwd2"  type="password" name="reg_pwd2">
							</div>
							<input type="submit" id="btn_reg_form"  value="Send"></input>
	  					</div>	
	  					</form>
	  	
	  			 	<div class="btn-div">
	  			 		<a class="a-btn-lets"href="#">
	  			 			 <div class="btn-lets">
	  			 				<div>Let's start</div>
	  			 			 </div>
	  			 	
	  			 	</div></a>
	  			 	
	  			</div>
				
	  			<div class="main-info">
	  				<div class="pfText">Portfolio</div>
	  				<div class="underpfText"></div>
					<div class="nav">
						<ul>
							<li>Branding</li>
							<li>Branding</li>
							<li>Branding</li>
							<li>Branding</li>
						</ul>
					</div>
					<div class="linenav">
						
					</div>
					<div class="linenavcolor">
						<div class="linenavcolor1"></div>
						<div class="linenavcolor2">	</div>
						<div class="linenavcolor3"></div>
						<div class="linenavcolor4"></div>
					</div>
					<div class="category">
						<div class="category-block">
							<div></div>
							<div>Marketing Parnter</div>
							<div>Branding UI/UX Article</div>
							<a href="#"><div>Viev Project ></div></a>
							<div></div>
						</div>
						<div class="category-block">
							<div></div>
							<div>Website Design</div>
							<div>Branding UI/UX Article</div>
							<a href="#"><div>Viev Project ></div></a>
							<div></div>
						</div>
						<div class="category-block">
							<div></div>
							<div>Music Player Design</div>
							<div>Branding UI/UX Article</div>
							<a href="#"><div>Viev Project ></div></a>
							<div></div>
						</div>
						<div class="category-block">
							<div></div>
							<div>Marketing Partner</div>
							<div>Branding UI/UX Article</div>
							<a href="#"><div>Viev Project ></div></a>
							<div></div>
						</div>
						<div class="category-block">
							<div></div>
							<div>Marketing Partner</div>
							<div>Branding UI/UX Article</div>
							<a href="#"><div>Viev Project ></div></a>
							<div></div>
						</div>
						<div class="category-block">
							<div></div>
							<div>Software Developement</div>
							<div>Branding UI/UX Article</div>
							<a href="#"><div>Viev Project ></div></a>
							<div></div>
						</div>
					</div>
					<div class="about">
						<div class="leave_msg">
							<div>Leave a Message</div>
							<form id="msg_form" class="leave_msg_form" action="mail.php"  method="post" >
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
						
						<div class="line"></div>
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
  			</div>
  			
</body>
</html>