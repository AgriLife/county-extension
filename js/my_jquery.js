jQuery(document).ready(function($) {

	// remove all height attributes from images for flexibility	
	$('img').removeAttr('height');
	
	$(function() {
		$( "#tabs" ).tabs();
	});

    var Revealer = function(relativeParent,absoluteChild,speed) {
        var revealHeight = absoluteChild.height();
        relativeParent.height(revealHeight);
        relativeParent.addClass('hidden');
        this.toggleReveal = function() {
            if (!relativeParent.parent().find(':animated').length) {
                if (relativeParent.css('display')!='none' ) {
                    relativeParent.animate({height:0}, speed, function() {
                        relativeParent.hide();
                    });
                } else {
                    relativeParent.height(0).show().animate({height: revealHeight}, speed);
                }
            }
        };
    };
    
    jQuery('#extension-section').after(jQuery('#contact-form'));
    
    var contactForm = new Revealer(
        jQuery('#extension-section .flow'),               // the relatively positioned container
        jQuery('#extension-section .flow .contents'),     // the absolutely positioned child
        300                                     // the speed of the animation
    );
    
    jQuery('.ext-link').live('click',function(){
        jQuery('html, body').animate({scrollTop:0}, 'fast');
        contactForm.toggleReveal();
        return false;
    });
    jQuery('#extension-section button[type="reset"]').live('click',function(){
        contactForm.toggleReveal();
        return false;
    });

    jQuery('#extension-section form').live('submit',function(){
        var values = $(this).serialize();
        jQuery.post('',values,function(markup) {
            jQuery('#extension-section .contents').html(markup);
        },'html');
        return false;
    });
});