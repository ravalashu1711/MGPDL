(function ($) {
	"use strict";

	// Page Loaded...
	$(document).ready(function () {

		/*==========  Tooltip  ==========*/
		$('.tool-tip').tooltip();
		
		/*==========  Progress Bars  ==========*/
		$('.progress-bar').on('inview', function (event, isInView) {
			if (isInView) {
				$(this).css('width',  function() {
					return ($(this).attr('aria-valuenow')+'%');
				});
			}
			return false;
		});

		/*==========  Alerts  ==========*/
		$('.alert').on('inview', function (event, isInView) {
			if (isInView) {
				$(this).addClass('in');
			}
			return false;
		});
		$(function() {
			$('[data-hide]').on('click', function() {
				$(this).closest('.' + $(this).attr('data-hide')).fadeOut();
			});
		});

		/*==========  Accordion  ==========*/
		$('.panel-heading a').on('click', function() {
			$('.panel-heading').removeClass('active');
			$(this).parents('.panel-heading').addClass('active');
		});

		/*==========  Responsive Navigation  ==========*/
		$('.responsive-nav').html($('.main-nav').children().clone());
		$('.responsive-menu-open').on('click', function(event) {
			event.preventDefault();
			$('body').addClass('no-scroll');
			$('.responsive-menu').addClass('open');
		});
		$('.responsive-menu-close').on('click', function(event) {
			event.preventDefault();
			$('body').removeClass('no-scroll');
			$('.responsive-menu').removeClass('open');
		});

		/*==========  Home Slider  ==========*/
		$('#homeslider').flexslider({
			selector: '.slides > div',
			animation: 'fade',
			controlNav: false,
			prevText: '',
			nextText: ''
		});
		
			
	
		/*-------------------------------------------------*/
		/* = ANIMATION
		/*-------------------------------------------------*/
		$('.animation').waypoint(function(direction) {
			  $(this).addClass('animation-active');
			}, { 	offset: '100%',
			triggerOnce: true });

		/*==========  Nivo Lightbox  ==========*/
		if ($('.popup-link').length) {
			$('.popup-link').nivoLightbox();
		}

	});
	
	/*==========  Validate Email  ==========*/
	function validateEmail($validate_email) {
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if( !emailReg.test( $validate_email ) ) {
			return false;
		} else {
			return true;
		}
		return false;
	}
	
	/*==========  Contact Form  ==========*/
	$('#contact-form').submit(function() {
		$('#contact-error').fadeOut();
		$('#contact-success').fadeOut();
		$('#contact-loading').fadeOut();
		$('#contact-loading').fadeIn();
		if (validateEmail($('#contact-email').val()) && $('#contact-email').val().length !== 0 && $('#contact-name').val().length !== 0 && $('#contact-message').val().length !== 0) {
			var action = $(this).attr('action');
			$.ajax({
				type: "POST",
				url : action,
				data: {
					contact_name: $('#contact-name').val(),
					contact_email: $('#contact-email').val(),
					contact_subject: $('#contact-subject').val(),
					contact_message: $('#contact-message').val()
				},
				success: function() {
					$('#contact-error').fadeOut();
					$('#contact-success').fadeOut();
					$('#contact-loading').fadeOut();
					$('#contact-success .message').html('Success! Thanks for contacting us!');
					$('#contact-success').fadeIn();
				},
				error: function() {
					$('#contact-error').fadeOut();
					$('#contact-success').fadeOut();
					$('#contact-loading').fadeOut();
					$('#contact-error .message').html('Sorry, an error occurred.');
					$('#contact-error').fadeIn();
				}
			});
		} else if (!validateEmail($('#contact-email').val()) && $('#contact-email').val().length !== 0 && $('#contact-name').val().length !== 0 && $('#contact-message').val().length !== 0) {
			$('#contact-error').fadeOut();
			$('#contact-success').fadeOut();
			$('#contact-loading').fadeOut();
			$('#contact-error .message').html('Please enter a valid email.');
			$('#contact-error').fadeIn();
		} else {
			$('#contact-error').fadeOut();
			$('#contact-success').fadeOut();
			$('#contact-loading').fadeOut();
			$('#contact-error .message').html('Please fill out all the fields.');
			$('#contact-error').fadeIn();
		}
		return false;
	});

	/*==========  Newsletter Form  ==========*/
	
	$('.eemail_textbox_button').click(function(){
		$('.eemail_msg').fadeIn();	
	});
	
	var $form = $('#mc-embedded-subscribe-form');
	$form.submit(function() {
		$('#newsletter-error').fadeOut();
		$('#newsletter-success').fadeOut();
		$('#newsletter-loading').fadeOut();
		$('#newsletter-loading').fadeIn();
		if (validateEmail($('#mce-EMAIL').val()) && $('#mce-EMAIL').val().length !== 0) {
			$.ajax({
				type: $form.attr('method'),
				url: $form.attr('action'),
				data: $form.serialize(),
				cache: false,
				dataType: 'json',
				contentType: 'application/json; charset=utf-8',
				error: function(err) {
					$('#newsletter-error').fadeOut();
					$('#newsletter-success').fadeOut();
					$('#newsletter-loading').fadeOut();
					$('#newsletter-error .message').html(err.msg);
					$('#newsletter-error').fadeIn();
				},
				success: function(data) {
					if (data.result !== 'success') {
						$('#newsletter-error').fadeOut();
						$('#newsletter-success').fadeOut();
						$('#newsletter-loading').fadeOut();
						$('#newsletter-info .message').html(data.msg);
						$('#newsletter-info').fadeIn();
					} else {
						$('#newsletter-error').fadeOut();
						$('#newsletter-success').fadeOut();
						$('#newsletter-loading').fadeOut();
						$('#newsletter-success .message').html(data.msg);
						$('#newsletter-success').fadeIn();
					}
				}
			});
		} else {
			$('#newsletter-error').fadeOut();
			$('#newsletter-success').fadeOut();
			$('#newsletter-loading').fadeOut();
			$('#newsletter-error .message').html('Please enter a valid email.');
			$('#newsletter-error').fadeIn();
		}
		return false;
	});


})(jQuery);

/**** NEW SCRIPT **************/
var $ = jQuery.noConflict();

$(document).ready(function(){
	
	/*post format gallery*/
	$('.flexpost').flexslider({
		animation: "slide",
        slideshow: true,
        smoothHeight: true,
        directionNav: true,
        slideshowSpeed: 3000,
        animationSpeed: 700,
		prevText: '',
		nextText: '',
        controlNav: false
	});
	
	$('.flexslider').flexslider({
		animation: "slide",
        slideshow: true,
        smoothHeight: true,
        directionNav: true,
        slideshowSpeed: 3000,
        animationSpeed: 700,
		prevText: '',
		nextText: '',
        controlNav: false
	});
/*-------------------------------------------------*/
/* = ANIMATION
/*-------------------------------------------------*/
$('.animation').waypoint(function(direction) {
	  $(this).addClass('animation-active');
	}, { 	offset: '100%',
	triggerOnce: true });
/*-------------------------------------------------*/
/* = Sticky Menu
/*-------------------------------------------------*/
$(document).scroll(function () {
    var y = $(document).scrollTop(),
        header = $(".fixed-top");

    if (y >= 120) {
        header.addClass('fixed');
    } else {
        header.removeClass('fixed');
    }
});
 /*-------------------------------------------------*/
/*  Prettyphoto
/*-------------------------------------------------*/ 
    "use strict";
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
        theme: 'pp_default'
    });
 /*-------------------------------------------------*/
/*  tag icons
/*-------------------------------------------------*/ 
	$('.wp-tag-cloud li a').prepend('<span class="badge"><i class="fa fa-check"></i></span>');
	
    (function($) {
        "use strict";
    /*PreLoader*/
        $(".loader-item").delay(700).fadeOut();
        $("#pageloader").delay(800).fadeOut("slow");
    
    
        
    /*NiceScroll*/
       /* $("html").niceScroll({
            cursorcolor: "#293133",
            cursorborderradius: "0",
            cursorborder: "0 solid #fff",
            cursorwidth: "10px",
            zindex: "999999",
            scrollspeed: 60
        });*/
    
    
    /*Go Top*/
        $('a[href="#top"]').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false
        });
    
    
    /*Project Filter*/
	
        $(".projects").mixItUp({
            animation: {
                effects: 'fade scale(0)'
            },
            layout: {},
            selectors: {
                target: ".project"
            },
            load: {
                filter: 'all',
                sort: 'random:asc'
            }
        });
    
    
        
    })(jQuery)    
});

/* ---------------------------------------------------
	Quick contact form widget
-------------------------------------------------- */

function checkemail(emailaddress){
	"use strict";
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i); 
	return pattern.test(emailaddress); 
}

jQuery(document).ready(function(){ 
	jQuery('.empty-widget-title').parent().parent('h4').css('display', 'none');
	jQuery('.empty-widget-title').parent('.footer-widget-title').css('display', 'none');
	jQuery('.sidebar-widget ul.drop-menu').removeClass('drop-menu').css('display', 'block');
	"use strict";
	jQuery('#registerErrors, .widgetinfo').hide();		
	var $messageshort = false;
	var $emailerror = false;
	var $nameshort = false;
	var $namelong = false;
	
	jQuery('#contactFormWidget input#wformsend').click(function(){ 
		var $name = jQuery('#wname').val();
		var $email = jQuery('#wemail').val();
		var $message = jQuery('#wmessage').val();
		var $contactemail = jQuery('#wcontactemail').val();
		var $contacturl = jQuery('#wcontacturl').val();
		var $subject = jQuery('#wsubject').val();
	
		if ($name !== '' && $name.length < 3){ $nameshort = true; } else { $nameshort = false; }
		if ($name !== '' && $name.length > 30){ $namelong = true; } else { $namelong = false; }
		if ($email !== '' && checkemail($email)){ $emailerror = true; } else { $emailerror = false; }
		if ($message !== '' && $message !== 'Message' && $message.length < 3){ $messageshort = true; } else { $messageshort = false; }
		
		jQuery('#contactFormWidget .loading').animate({opacity: 1}, 250);
		
		if ($name !== '' && $nameshort !== true && $namelong !== true && $email !== '' && $emailerror !== false && $message !== '' && $messageshort !== true && $contactemail !== ''){ 
			jQuery.post($contacturl, 
				{type: 'widget', contactemail: $contactemail, subject: $subject, name: $name, email: $email, message: $message}, 
				function(/*data*/){
					jQuery('#contactFormWidget .loading').animate({opacity: 0}, 250);
					jQuery('.form').fadeOut();
					jQuery('#bottom #wname, #bottom #wemail, #bottom #wmessage').css({'border':'0'});
					jQuery('.widgeterror').hide();
					jQuery('.widgetinfo').fadeIn('slow');
					jQuery('.widgetinfo').delay(2000).fadeOut(1000, function(){ 
						jQuery('#wname, #wemail, #wmessage').val('');
						jQuery('.form').fadeIn('slow');
					});
				}
			);
			
			return false;
		} else {
			jQuery('#contactFormWidget .loading').animate({opacity: 0}, 250);
			jQuery('.widgeterror').hide();
			jQuery('.widgeterror').fadeIn('fast');
			jQuery('.widgeterror').delay(3000).fadeOut(1000);
			
			if ($name === '' || $name === 'Name' || $nameshort === true || $namelong === true){ 
				jQuery('#wname').css({'border-left':'4px solid #red'}); 
			} else { 
				jQuery('#wname').css({'border-left':'4px solid #929DAC'}); 
			}
			
			if ($email === '' || $email === 'Email' || $emailerror === false){ 
				jQuery('#wemail').css({'border-left':'4px solid red'});
			} else { 
				jQuery('#wemail').css({'border-left':'4px solid #929DAC'}); 
			}
			
			if ($message === '' || $message === 'Message' || $messageshort === true){ 
				jQuery('#wmessage').css({'border-left':'4px solid red'}); 
			} else { 
				jQuery('#wmessage').css({'border-left':'4px solid #929DAC'}); 
			}
			
			return false;
		}
	});
});