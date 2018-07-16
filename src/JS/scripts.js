	$("document").ready(function(){

	



		$(".menu a:nth-child(1)").click(function(){
			$(".SignIn").css("display","inline-block");
			$(".SignIn input").focus();
		});
	
		$(".menu a:nth-child(2) ").click(function(){
			$(".SignIn").css("display","none");

		});
		$(".SignIn input:nth-child(3)").click(function(){
				if (!$("#username").val()=="") {
					alert("ok");
				}
				else{
					alert("neok");
				}
				
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
		
	
	
	
