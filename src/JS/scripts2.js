	$("document").ready(function(){
	 console.log("ok");	
	 	$('.btn_edit_about_me').click(function(){
	 	
	 		$('.btn_edit_about_me').css('display','none');
	 		$('.btn_accept_about_me').css('display','block');
	 		$('.edit_textarea_about_me').css('display','block');
	 		$('.edition_about_me').css('display','none');

	 	});
	 	$('.btn_accept').click(function(){
	 		var aboutMeText=$('.edit_textarea_about_me').val();
	 		
	 		$('.btn_edit_about_me').css('display','block');
	 		$('.btn_accept_about_me').css('display','none');
	 		$('.edit_textarea_about_me').css('display','none');
	 		$('.edition_about_me').css('display','block').html(aboutMeText);
	 		alert(aboutMeText);
	 		$.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{aboutMeText:aboutMeText},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})

	 	})
	 	$('.btn_cancel').click(function(){
	 		
	 		$('.btn_edit_about_me').css('display','block');
	 		$('.btn_accept_about_me').css('display','none');
	 		$('.edit_textarea_about_me').css('display','none');
	 		$('.edition_about_me').css('display','block');
	 	})





	 	$('.btn_edit_about_me_pd').click(function(){
	 		$('.edit_textarea_about_me').css('border','1px red');
	 		$('.btn_edit_about_me_pd').css('display','none');
	 		$('.btn_accept_about_me_pd').css('display','block');
	 		$('.pd_textarea').css('display','block');
	 		$('.personal_data ul li div').css('display','none');
	 	})
	 	$('.btn_accept_pd').click(function(){
	 		var name=$('#pd_name').val();
	 		var age=$('#pd_age').val();
	 		var email=$('#pd_email').val();
	 		var web=$('#pd_web').val();
	 		var addres=$('#pd_addres').val();
	 		var phone=$('#pd_phone').val();
	 		$('.btn_accept_about_me_pd').css('display','none');
	 		$('.btn_edit_about_me_pd').css('display','block');
	 		$('.name_personal_data').css('display','block').html(name);
	 		$('.age_personal_data').css('display','block').html(age);
	 		$('.email_personal_data').css('display','block').html(email);
	 		$('.web_personal_data').css('display','block').html(web);
	 		$('.addres_personal_data').css('display','block').html(addres);
	 		$('.phone_personal_data').css('display','block').html(phone);
	 		$('.personal_data ul li textarea').css('display','none');
	 		$('.personal_data ul li div').css('display','block');
	 		$.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{name:name,age:age,email:email,web:web,addres:addres,phone:phone},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
	 	})
	 	$('.btn_cancel_pd').click(function(){
	 		$('.btn_edit_about_me_pd').css('display','block');
	 		$('.btn_accept_about_me_pd').css('display','none');
	 		$('.personal_data ul li textarea').css('display','none');
	 		$('.personal_data ul li div').css('display','block');
	 	})
	 	$('.btn_edit_work').click(function(){
	 		$('.btn_edit_work').css('display','none');
	 		$('.btn_for_accept_work div').css('display','block');
	 		$('.position').css('display','block');
	 		$('.organization').css('display','block');
	 		$('.resultPosition').css('display','none');
	 		$('.resultOrganization').css('display','none');
	 	})
	 	$('.btn_accept_work').click(function(){
	 		var firstPosition=$('#posFirst').val();
	 		var firstOrganization=$('#orgFirst').val();
	 		var secondPosition=$('#posSecond').val();
	 		var secondOrganization=$('#orgSecond').val();
	 		var thirdPosition=$('#posThird').val();
	 		var thirdOrganization=$('#orgThird').val();
	 		var fourthPosition=$('#posFourth').val();
	 		var fourthOrganization=$('#orgFourth').val()
	 		$('#resultPosFirts').html(firstPosition);
	 		$('#resultOrgFirst').html(firstOrganization);
	 		$('#resultPosSecond').html(secondPosition);
	 		$('#resultOrgSecond').html(secondOrganization);
	 		$('#resultPosThird').html(thirdPosition);
	 		$('#resultOrgThird').html(thirdOrganization);
	 		$('#resultPosFourth').html(fourthPosition);
	 		$('#resultOrgFourth').html(fourthOrganization);
	 		$('.btn_for_accept_work div').css('display','none');
	 		$('.btn_edit_work').css('display','block');
	 		$('.position').css('display','none');
	 		$('.organization').css('display','none');
	 		$('.resultPosition').css('display','block');
	 		$('.resultOrganization').css('display','block');
	 		$.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{firstPosition:firstPosition,
	 				  firstOrganization:firstOrganization,
	 					secondPosition:secondPosition,
	 					secondOrganization:secondOrganization,
	 						thirdPosition:thirdPosition,
							thirdOrganization:thirdOrganization,
	 							fourthPosition:fourthPosition,
	 							fourthOrganization:fourthOrganization
	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
	 	})
	 	$('.btn_cancel_work').click(function(){
	 		$('.btn_for_accept_work div').css('display','none');
	 		$('.btn_edit_work').css('display','block');
	 		$('.position').css('display','none');
	 		$('.organization').css('display','none');
	 		$('.resultPosition').css('display','block');
	 		$('.resultOrganization').css('display','block');
	 	})
	 	$('.btn_edit_education').click(function(){
	 		$('.btn_edit_education').css('display','none');
	 		$('.btn_acception_education div').css('display','block');
	 		$('#specFirst').css('display','block');
	 		$('#institFirst').css('display','block');
	 		$('#institSecond').css('display','block');
	 		$('#specSecond').css('display','block');
	 		$('#specThird').css('display','block');
	 		$('#institThird').css('display','block');
	 		$('#specFourth').css('display','block');
	 		$('#institFourth').css('display','block');
	 		$('.resSpec').css('display','none');
	 		$('.resInstit').css('display','none');
	 		
	 	})
	 	$('.btn_accept_education').click(function(){
	 		var firstSpec=$('#specFirst').val();
	 		var firstInstitution=$('#institFirst').val();
	 		var secondSpec=$('#specSecond').val();
	 		var secondInstitution=$('#institSecond').val();
	 		var thirdSpec=$('#specThird').val();
	 		var thirdInstitution=$('#institThird').val();
	 		var fourthSpec=$('#specFourth').val();
	 		var fourthInstitution=$('#institFourth').val();
	 		$('#specFirst').css('display','none');
	 		$('#institFirst').css('display','none');
	 		$('#institSecond').css('display','none');
	 		$('#specSecond').css('display','none');
	 		$('#specThird').css('display','none');
	 		$('#institThird').css('display','none');
	 		$('#specFourth').css('display','none');
	 		$('#institFourth').css('display','none');
	 		$('#resSpecFirst').css('display','block').html(firstSpec);
	 		$('#resInstitFirst').css('display','block').html(firstInstitution);
	 		$('#resInstitSecond').css('display','block').html(secondInstitution);
	 		$('#resSpecSecond').css('display','block').html(secondSpec);
	 		$('#resSpecThird').css('display','block').html(thirdSpec);
	 		$('#resInstitThird').css('display','block').html(thirdInstitution);
	 		$('#resSpecFourth').css('display','block').html(fourthSpec);
	 		$('#resInstitFourth').css('display','block').html(fourthInstitution);
	 		$('.btn_acception_education div').css('display','none');
	 		$('.btn_edit_education').css('display','block');
	 		alert("ok");
	 		$.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{firstSpec:firstSpec,
	 				  firstInstitution:firstInstitution,
	 					secondSpec:secondSpec,
	 					secondInstitution:secondInstitution,
	 						thirdSpec:thirdSpec,
							thirdInstitution:thirdInstitution,
	 							fourthSpec:fourthSpec,
	 							fourthInstitution:fourthInstitution
	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
	 	});
	 	$('.btn_cancel_education').click(function(){
	 		$('.btn_acception_education div').css('display','none');
	 		$('.btn_edit_education').css('display','block');
	 		$('#resSpecFirst').css('display','block');
	 		$('#resInstitFirst').css('display','block');
	 		$('#resInstitSecond').css('display','block');
	 		$('#resSpecSecond').css('display','block');
	 		$('#resSpecThird').css('display','block');
	 		$('#resInstitThird').css('display','block');
	 		$('#resSpecFourth').css('display','block');
	 		$('#resInstitFourth').css('display','block');
	 		$('#specFirst').css('display','none');
	 		$('#institFirst').css('display','none');
	 		$('#specSecond').css('display','none');
	 		$('#institSecond').css('display','none');
	 		$('#specThird').css('display','none');
	 		$('#institThird').css('display','none');
	 		$('#specFourth').css('display','none');
	 		$('#institFourth').css('display','none');
	 	})


	 	$('.userExperience1').dblclick(function(){
	 		$('.userExperience1').css('display','none');
	 		$('.nameExperience1').css('display','block');
	 	})
	 	$('.nameExperience1').keypress(function(e) {
		    if(e.which == 13) {
		       var skill_first=$('.nameExperience1').val();
		       $('.nameExperience1').css('display','none');
		       $('.userExperience1').html(skill_first).css('display','block').css('background-color','#1d1d24');
		    }
		})


	 	$('.userExperience2').dblclick(function(){
	 		$('.userExperience2').css('display','none');
	 		$('.nameExperience2').css('display','block');
	 	})
	 	$('.nameExperience2').keypress(function(e) {
		    if(e.which == 13) {
		       var skill_second=$('.nameExperience2').val();
		       $('.nameExperience2').css('display','none');
		       $('.userExperience2').html(skill_second).css('display','block').css('background-color','#1d1d24');
		    }
		})

		$('.userExperience3').dblclick(function(){
	 		$('.userExperience3').css('display','none');
	 		$('.nameExperience3').css('display','block');
	 	})
	 	$('.nameExperience3').keypress(function(e) {
		    if(e.which == 13) {
		       var skill_third=$('.nameExperience3').val();
		       $('.nameExperience3').css('display','none');
		       $('.userExperience3').html(skill_third).css('display','block').css('background-color','#1d1d24');
		    }
		})
		$('.userExperience4').dblclick(function(){
	 		$('.userExperience4').css('display','none');
	 		$('.nameExperience4').css('display','block');
	 	})
	 	$('.nameExperience4').keypress(function(e) {
		    if(e.which == 13) {
		       var skill_third=$('.nameExperience4').val();
		       $('.nameExperience4').css('display','none');
		       $('.userExperience4').html(skill_third).css('display','block').css('background-color','#1d1d24');
		    }
		})

		$('.userExperience5').dblclick(function(){
	 		$('.userExperience5').css('display','none');
	 		$('.nameExperience5').css('display','block');
	 	})
	 	$('.nameExperience5').keypress(function(e) {
		    if(e.which == 13) {
		       var skill_fifth=$('.nameExperience5').val();
		       $('.nameExperience5').css('display','none');
		       $('.userExperience5').html(skill_fifth).css('display','block').css('background-color','#1d1d24');
		    }
		})
		$('.userExperience6').dblclick(function(){
	 		$('.userExperience6').css('display','none');
	 		$('.nameExperience6').css('display','block');
	 	})
	 	$('.nameExperience6').keypress(function(e) {
		    if(e.which == 13) {
		       var skill_sixth=$('.nameExperience6').val();
		       $('.nameExperience6').css('display','none');
		       $('.userExperience6').html(skill_sixth).css('display','block').css('background-color','#1d1d24');
		    }
		})
		var files;
	 	$('.uplPhoto input[type=file]').change(function(){
	 		files=this.files;
	 	})
	 	$('.submit.button').click(function( event ){
    		event.stopPropagation(); // Остановка происходящего
    		event.preventDefault();  // Полная остановка происходящего
    		 var data = new FormData();
    		 $.each( files, function( key, value ){
        	 data.append( key, value );
    		});
    		 $.ajax({
	        url: './submit.php?uploadfiles',
	        type: 'POST',
	        data: data,
	        cache: false,
	        dataType: 'json',
	        processData: false, // Не обрабатываем файлы (Don't process the files)
	        contentType: false, // Так jQuery скажет серверу что это строковой запрос
	        success: function(data){
	 			alert("ok");
	            $('.photo').css('background-image',data);
	        },
	        error: function( jqXHR, textStatus, errorThrown ){
	            console.log('ОШИБКИ AJAX запроса: ' + textStatus );
	        }
	    	});
	 
		});










		$('.nameExperience1').keypress(function(e) {
		    if(e.which == 13) {
		        var nameSkillFirst=$('.nameExperience1').val();
		       
		       $.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{nameSkillFirst:nameSkillFirst,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
		    }
		});
		$('#number1').mouseup(function(){
			var valueSkillFirst;
			setTimeout(function(){
				valueSkill=$('#firstRange').val();
				$.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{valueSkillFirst:valueSkillFirst,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
			},1000);
			

		})

		$('.nameExperience2').keypress(function(e) {
		    if(e.which == 13) {
		        var nameSkillSecond=$('.nameExperience2').val();
		       
		       $.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{nameSkillSecond:nameSkillSecond,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
		    }
		});
		$('#number2').mouseup(function(){
			var valueSkillSecond;
			setTimeout(function(){
				valueSkillSecond=$('#secondRange').val();
				$.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{valueSkillSecond:valueSkillSecond,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
			},1000);
			

		})
		
		$('.nameExperience3').keypress(function(e) {
		    if(e.which == 13) {
		        var nameSkillThird=$('.nameExperience3').val();
		       
		       $.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{nameSkillThird:nameSkillThird,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
		    }
		});
		$('#number3').mouseup(function(){
			var valueSkillThird;
			setTimeout(function(){
				valueSkillThird=$('#thirdRange').val();
				$.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{valueSkillThird:valueSkillThird,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
			},1000);
			

		})
			$('.nameExperience4').keypress(function(e) {
		    if(e.which == 13) {
		        var nameSkillFourth=$('.nameExperience4').val();
		       
		       $.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{nameSkillFourth:nameSkillFourth,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
		    }
		});
		$('#number4').mouseup(function(){
			var valueSkillFourth;
			setTimeout(function(){
				valueSkillFourth=$('#fourthRange').val();
				$.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{valueSkillFourth:valueSkillFourth,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
			},1000);
			

		})

		$('.nameExperience5').keypress(function(e) {
		    if(e.which == 13) {
		        var nameSkillFifth=$('.nameExperience5').val();
		       
		       $.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{nameSkillFifth:nameSkillFifth,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
		    }
		});
		$('#number5').mouseup(function(){
			var valueSkillFifth;
			setTimeout(function(){
				valueSkillFifth=$('#fifthRange').val();
				$.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{valueSkillFifth:valueSkillFifth,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
			},1000);
			

		})

			$('.nameExperience6').keypress(function(e) {
		    if(e.which == 13) {
		        var nameSkillSixth=$('.nameExperience6').val();
		       
		       $.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{nameSkillSixth:nameSkillSixth,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
		    }
		});
		$('#number6').mouseup(function(){
			var valueSkillSixth;
			setTimeout(function(){
				valueSkillSixth=$('#sixthRange').val();
				$.ajax({
	 			url:'../php/auth_page.php',
	 			type:'POST',
	 			data:{valueSkillSixth:valueSkillSixth,

	 				},
	 			success:function(data){
	 				if (data=="ok") {
	 					alert('ok');
	 				}
	 			}
	 		})
			},1000);
			

		})
	});