	$("document").ready(function(){
	 console.log("ok");	

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
		});
	
		$(".menu a:nth-child(2) ").click(function(){
			$(".SignIn").css("display","none");
			$("a-btn-lets").css("display","none");
			$(".btn-div").css("display","none");
			$(".Registration").css("display","block");

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
	

