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
	});
		
	
	
	
