	$("document").ready(function(){
	 console.log("ok");	
	 	jQuery.validator.setDefaults({
  		debug: true,
  		success: "logInForm_valid"
		});
	 $("#logInForm").validate({
			rules:{
				signIn_login:{
					required: true,
					minlength:7
				},
				signIn_pwd:{
					required:true
				}
			},
			messages:{
				signIn_login:{
					required: "Field for your name is required"
				},
				signIn_pwd:{
					required: "Field for your password is required"
				}
			}
			
		});	

	 $("#regForm").validate({
			rules:{
				reg_login:{
					required: true,
					minlength:7
				},
				reg_email:{
					required:true,
					email:true
				},
				reg_pwd1:{
					required:true
				},
				reg_pwd2:{
					equalTo:"#reg_pwd1"
				},
				
			},
			messages:{
				login:{
					required: "Поле имени обязательно для заполнения"
				}
			}
			
		});	

	 $("#msg_form").validate({
	 		
	 		
			rules:{
				leave_msg_form_name:{
					required: true,
					minlength:3
				},
				leave_msg_form_email:{
					required:true,
					email:true
				},
				leave_msg_form_msg:{
					required:true
				}
			},
			messages:{
				leave_msg_form_name:{
					required: "Field for your name is required",
					minlength:"The name can not be less than 3 characters"
				},
				leave_msg_form_email:{
					required: "Field for your email is required"
				},
				leave_msg_form_msg:{
					required: "Field for your message is required"
				}

			}
			
		});
	 	
		$(".menu a:nth-child(1)").click(function(){
			$(".SignIn").css("display","inline-block");
			$(".btn-div").css("display","none");
			$(".Registration").css("display","none");
			$(".main-info").css("margin-top","550px");
		});
	
		$(".menu a:nth-child(2) ").click(function(){
			$(".SignIn").css("display","none");
			$("a-btn-lets").css("display","none");
			$(".btn-div").css("display","none");
			$(".Registration").css("display","block").css("margin-top","250px");
			$(".main-info").css("margin-top","800px");

		});

		$(".btn-lets ").click(function(){
			$(".SignIn").css("display","inline-block");
			$(".btn-div").css("display","none");

		});
	
		$(".btn-onslider").click(function(){
			$(".SignIn").css("display","inline-block");
			$(".SignIn input").focus();
		})

		$(".nav ul li:nth-child(2)").click(function(){
			$(".linenavcolor div").css("display","none");
			$(".linenavcolor2").css("display","block");
		});
		$(".nav ul li:nth-child(1)").click(function(){
			$(".linenavcolor div").css("display","none");
			$(".linenavcolor1").css("display","block");
		});
		$(".nav ul li:nth-child(3)").click(function(){
			$(".linenavcolor div").css("display","none");
			$(".linenavcolor3").css("display","block");
		});
		$(".nav ul li:nth-child(4)").click(function(){
			$(".linenavcolor div").css("display","none");
			$(".linenavcolor4").css("display","block");
		});

		
	});
	

