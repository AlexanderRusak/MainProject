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
	 	})
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

	});
	

