$(document).ready(function(){
  //set menu active
  currentParentPage = $('.nmo-view').data('parentpage');
  if(currentParentPage != ''){
    $('header.nmo-sttc-header .header-elems .nmo-menu ul li a.'+currentParentPage).addClass('active');
  }

  $('.submit-contact-form').click(function(e){
    e.preventDefault();

    $('.nmo-cform .input-wrap .err').hide();
    var canProceed = 1;
    grecaptchaResp = grecaptcha.getResponse();

    if(!grecaptchaResp.length > 0){
      canProceed = 0;
      $('.nmo-cform .input-wrap.recaptcha .err').show();
    }

    if($('.nmo-cform .input-wrap.name input[name="fname"]').val() == ''){
      canProceed = 0;
      $('.nmo-cform .input-wrap.name .err').show();
    }

    if($('.nmo-cform .input-wrap.phone input[name="phone"]').val() == ''){
      canProceed = 0;
      $('.nmo-cform .input-wrap.phone .err').show();
    } else if(!validatePhoneNumber($('.nmo-cform .input-wrap.phone input[name="phone"]').val())){
      canProceed = 0;
      $('.nmo-cform .input-wrap.phone .err').show();
    }

    if($('.nmo-cform .input-wrap.email input[name="email"]').val() == ''){
      canProceed = 0;
      $('.nmo-cform .input-wrap.email .err').show();
    } else if(!validateEmail($('.nmo-cform .input-wrap.email input[name="email"]').val())){
      canProceed = 0;
      $('.nmo-cform .input-wrap.email .err').show();
    }

    if($('.nmo-cform .input-wrap.request select[name="reqtype"]').val() == ''){
      canProceed = 0;
      $('.nmo-cform .input-wrap.request .err').show();
    }

    if(!$('.input-wrap.terms .nmo-check input').is(':checked')){
      canProceed = 0;
      $('.nmo-cform .input-wrap.terms .err').show();
    }

    if(canProceed){
      //$('.nmo-cform form.contact-form').submit();
      console.log('can proceed');

      cformData = {
        name: $('.nmo-cform .input-wrap.name input[name="fname"]').val(),
        email: $('.nmo-cform .input-wrap.email input[name="email"]').val(),
        phone: $('.nmo-cform .input-wrap.phone input[name="phone"]').val(),
        reqtype: $('.nmo-cform .input-wrap.request select[name="reqtype"]').val(),
        cmsg: $('.nmo-cform .input-wrap.message textarea[name="msg"]').val()
      };

      jsonData = JSON.stringify(cformData);

      console.log(jsonData);

      $.ajax({
        type: 'POST',
        url: '/submitcontactform',
        data: 'formdata='+jsonData,
        //dataType: "json",
        //encode: true,
        success: function(res) {
          console.log(res);
          jres = JSON.parse(res);
          console.log(jres);
          if(jres.status == 0){
            myObjectArray = jres.error_list;
            $.each(myObjectArray, function(key, value) {
              $(value).show();
            });
          } else if(jres.status == 1){
            $('.nmo-cform .nmo-cform-wrap .success-send').fadeIn();
          }
        }
      });
    }
  });
});

$(window).on('scroll', function(){
  if($(window).scrollTop() > 0){
    $('body').addClass('scrolling');
  } else {
    $('body').removeClass('scrolling');
  }
});

function nmoReadMore(_this){
  $(_this).parents('.read-more-cotainer').find('.read-more-summary').hide();
  $(_this).parents('.read-more-cotainer').find('.read-more-txt').show();
  $(_this).parents('.read-more-cotainer').find('.nmo-read-more-wrap.rmore').hide();
  $(_this).parents('.read-more-cotainer').find('.nmo-read-more-wrap.rless').show();
}

function nmoReadLess(_this){
  $(_this).parents('.read-more-cotainer').find('.read-more-summary').show();
  $(_this).parents('.read-more-cotainer').find('.read-more-txt').hide();
  $(_this).parents('.read-more-cotainer').find('.nmo-read-more-wrap.rmore').show();
  $(_this).parents('.read-more-cotainer').find('.nmo-read-more-wrap.rless').hide();
}

function openMenu(){
  if($('.mobile_menu_cta').hasClass('open')){
		$('.mobile_menu_cta').removeClass('open');

    $('header.nmo-sttc-header .header-elems .header-elem.nmo-menu').slideUp();

	} else {
		$('.mobile_menu_cta').addClass('open');
		$('header.nmo-sttc-header .header-elems .header-elem.nmo-menu').slideDown();
	}
}

function validatePhoneNumber(phoneNumber) {
  var phoneNumberPattern = /^\d+$/;
  return phoneNumberPattern.test(phoneNumber);
}

function validateEmail(email) {
  var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  return emailPattern.test(email);
}

function resetCForm(){
  $('.nmo-cform .nmo-cform-wrap .success-send').fadeOut();
  $('.contact-form')[0].reset();
  grecaptcha.reset();
}