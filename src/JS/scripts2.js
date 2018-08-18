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
	 		alert(aboutMeText);
	 		$('.btn_edit_about_me').css('display','block');
	 		$('.btn_accept_about_me').css('display','none');
	 		$('.edit_textarea_about_me').css('display','none');
	 		$('.edition_about_me').css('display','block').html(aboutMeText);

	 	})
	 	$('.btn_cancel').click(function(){
	 		
	 		$('.btn_edit_about_me').css('display','block');
	 		$('.btn_accept_about_me').css('display','none');
	 		$('.edit_textarea_about_me').css('display','none');
	 		$('.edition_about_me').css('display','block');
	 	})





	 	$('.btn_edit_about_me_pd').click(function(){
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
	 	})
	 	$('.btn_cancel_pd').click(function(){
	 		$('.btn_edit_about_me_pd').css('display','block');
	 		$('.btn_accept_about_me_pd').css('display','none');
	 		$('.personal_data ul li textarea').css('display','none');
	 		$('.personal_data ul li div').css('display','block');
	 	})
	 	$('.btn_edit_about_work').click(function(){
	 		alert('sssa');
	 		$('.btn_edit_about_work').css('display','none');
	 	})
	 	
	});
	

