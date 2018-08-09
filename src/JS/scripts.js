	$("document").ready(function(){
	 console.log("ok");	
	 	jQuery.validator.setDefaults({
  		debug: true,
  		success: "valid"
		});
	 $("#logInForm").validate({
			rules:{
				login:{
					required: true,
					minlength:7
				},
				pwd:{
					required:true
				}
			},
			messages:{
				login:{
					required: "Поле имени обязательно для заполнения"
				}
			}
			
		});	

	 $("#regForm").validate({
			rules:{
				login:{
					required: true,
					minlength:7
				},
				reg_email:{
					required:true
				},
				pwd1:{
					required:true
				},
				pwd2:{
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
	 		
	 		errorClass:"qwer",
			rules:{
				name:{
					required: true,
					minlength:7
				},
				email:{
					required:true,
					email:true
				}
			},
			messages:{
				name:{
					required: "Поле имени обязательно для заполнения"
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
	

