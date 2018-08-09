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
	  						<form  name="test" id="logInForm">
							<div>
								
									<label>UserName</label>
									<input  type="text" name="login" placeholder="Enter username">
							</div>
							<div>
								<label>PassWord</label>
								<input type="password" name="pwd">
							</div>
							<input type="submit" value="Send"></input>  
						</form>
							<!--                              -->	
	  					</div>

	  					<form  name="test" id="regForm" >
	  						<div  class="Registration">
	  						<a name="Reg"></a>
							<div>
								<label>Login</label>
								<input type="text" placeholder="Enter your login" name="login">
							</div>
							<div>
								<label>Email</label>
								<input  type="text" placeholder="Enter your email" name=reg_email">
							</div>
							<div>
								<label>PassWord</label>
								<input id="reg_pwd1"  type="password" name="pwd1">
							</div>
							<div>
								<label>PassWord</label>
								<input id="reg_pwd2"  type="password" name="pwd2">
							</div>
							<input type="submit"></input>
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
							<form id="msg_form" class="leave_msg_form" role="form">
								<div>
									<input type="text" name="name" for="name" placeholder="Name*">
								</div>
								<div>
									<input type="email" name="email" for="email" placeholder="Email*">
								</div>
									
								<div>
								<textarea required form="msg_form" for="text" placeholder="Message*"></textarea>
								</div>
								<input class="btn_leave_msg" type="submit" name="" value="Send">
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