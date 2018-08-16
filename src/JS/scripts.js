	$("document").ready(function(){
	 console.log("ok");	


	 $("#sgn_btn").click(function(){
	 	jQuery.validator.setDefaults({
  		debug: true,
  		success: "logInForm_valid"
		});

	 	 $("#logInForm").validate({
	 		

			rules:{
				signIn_login:{
					required: true,
					minlength:3
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
			},
				submitHandler: function(form) {
	 			var login=$("#sgn_login").val();
	 			var password=$("#sgn_pwd").val();

	 			$.post("php/login_ajax.php",{password:password, login:login})
    			.done(function(data){
    				alert(data);
       				if (data=="failed") {
    					
    					$("#sgn_server_err").css("display","none");
    					$("#sgn_server_err").addClass("sgn_server_err").css("display","block").text("Invalid login or password");
    				}
    				if (data=="success") {		
    					form.submit();
    					window.location="php/auth_page.php";
    				}
    			});
    			
    		
	 		}
			
		});	



	 });
	
   $("#btn_reg_form").click(function(){
			 $("#regForm").validate({

			rules:{
				reg_login:{
					required: true,
					minlength:3
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
			},

	 		submitHandler: function(form) {
	 			console.log("work");	
	 			
    			var email=$("#reg_email").val();
    			var login=$("#reg_login").val();
    			var password=$('#reg_pwd1').val();
    			$.post("php/reg_ajax.php",{email:email, login:login,password:password})
    			.done(function(data){
    				alert(data);
       				if (data=="login_failed") {
    					$("#reg_email_server_err").css("display","none");
    					$("#reg_login_server_err").css("display","none");
    					$("#reg_login_server_err").css("display","block").text("User with that login already exists");
    				}
    				if (data=="email_failed") {
     					$("#reg_email_server_err").css("display","none");
    					$("#reg_login_server_err").css("display","none");							
    					$("#reg_email_server_err").css("display","block").text("User with that email already exists").addClass("reg_email_server_err");
    				}
    				if (data=="success") {
    					window.location="../php/auth_page.php";
    					}
    			
    				
    				if (data=="failed") {
    					$("#reg_email_server_err").css("display","none");
    					$("#reg_login_server_err").css("display","none");
    					$("#reg_email_server_err").css("display","block").text("User with that email already exists").addClass("reg_email_server_err");
    					$("#reg_login_server_err").css("display","block").text("User with that login already exists").addClass("reg_login_server_err");
    				}
    			});
    			
	 		}
			
		});	
});



	 $("#msg_form").validate({
	 		
	 		submitHandler: function(form) {
    			form.submit();
	 		},
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
	

