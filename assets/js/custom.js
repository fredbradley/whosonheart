var $ = jQuery.noConflict();


function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}


function image_preload(selector, parameters) {
	var params = {
		delay: 250,
		transition: 400,
		easing: 'linear'
	};
	$.extend(params, parameters);
		
	$(selector).each(function() {
		var image = $(this);
		image.css({visibility:'hidden', opacity: 0, display:'block'});
		image.wrap('<span class="preloader" />');
		image.one("load", function(evt) {
			$(this).delay(params.delay).css({visibility:'visible'}).animate({opacity: 1}, params.transition, params.easing, function() {
				$(this).unwrap('<span class="preloader" />');
			});
		}).each(function() {
			if(this.complete) $(this).trigger("load");
		});
	});
}


$(document).ready(function() {
    
        
        $('.testimonials').cycle({ 
            fx: 'fade',
            delay: -1000,
	        cleartypeNoBg: true
        });
        
        
        $('#offerslider-items').cycle({ 
        	fx: 'scrollUp,scrollDown',
			timeout: 3000,
			easing: 'easeInOutBack',
	        prev: '#slider-prev',
	        next: '#slider-next',
	        pause: 1,
	        cleartypeNoBg: true
    	});
        
        
        image_preload('#offerslider-items img,.gallery img');
        
        
        $('#offerslider-items').hover(function() { 
    		$(this).cycle('pause');
		}, function() { 
    		$(this).cycle('resume'); 
		});
        
        
        $('#gallery ul').jcarousel({
			scroll: 3,
            wrap: 'circular'
		});
        
        
        $('#subscription').validate({
    		submitHandler: function(form) {
    			$(form).ajaxSubmit({
    				target: '#subscription-result',
                    success: function() {
                        $('#subscription').fadeOut('500');
                        $('#subscription-result').fadeIn('slow');
                    },
                    error: function() {
                        $('#subscription-result').fadeIn('slow');
                    }
    			});
    		}
    	});
        
	
		$('.fade').hover(function(){
			$(this).animate({opacity: 0.7}, 300);
		}, function () {
			$(this).animate({opacity: 1}, 300);
		});
        
		
		$('#gallery ul li a').hover(function(){
			$(this).children('span.hoverlay').filter(':not(:animated)').animate({opacity: 'show'}, 400);
            $(this).children('span.hoverzoom').filter(':not(:animated)').animate({opacity: 'show'});
		}, function () {
		    $(this).children('span.hoverzoom').animate({opacity: 'hide'});
			$(this).children('span.hoverlay').animate({opacity: 'hide'}, 400);
		});
		
		
		$('.ntip').tipsy({gravity: 's', fade:true});
		$('.stip').tipsy({gravity: 'n', fade:true});
		$('.etip').tipsy({gravity: 'w', fade:true});
		$('.wtip').tipsy({gravity: 'e', fade:true});
		
			
		$("a[rel^='prettyPhoto']").prettyPhoto({
			animation_speed: 'normal',
			theme: 'dark_rounded'
		});
        
        
        $(".togglec").hide();
        
    	$(".togglet").click(function(){
    	   $(this).toggleClass("toggleta").next(".togglec").slideToggle("normal");
    	   return true;
    	});        
        
			
});