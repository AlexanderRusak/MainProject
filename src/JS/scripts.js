	$("document").ready(function(){

		$(".next").click(function(){
			var currentImage=$(".img.curry");
			var currentImageIndex=$(".img.curry").index();
			var nextImageIndex=currentImageIndex+1;
			var nextImage=$(".img").eq(nextImageIndex);
			currentImage.hide();
			currentImage.removeClass("curry");

			if (nextImageIndex==($(".img:last").index()+1)) {
				$(".img").eq(0).fadeIn(1000);
				$(".img").eq(0).addClass("curry");
			}
			else{
				nextImage.fadeIn(1000);
				nextImage.addClass("curry");
			}
			});	
			$(".prev").click(function(){
			var currentImage=$(".img.curry");
			var currentImageIndex=$(".img.curry").index();
			var prevImageIndex=currentImageIndex-1;
			var prevImage=$(".img").eq(prevImageIndex);

			currentImage.hide();
			currentImage.removeClass("curry");
			prevImage.fadeIn(1000);
			prevImage.addClass("curry");	
			});// code for slider




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
		
	
	
	
