
// jQuery for ACF block FAQ SECTION ---------------------------------
// This jQuery code provides functionality for the FAQ section created with an ACF block. When a user clicks on a FAQ header, it toggles the visibility of its corresponding answer. If the FAQ is already active (expanded), clicking it again collapses it.
jQuery( document ).ready(function($) {
		jQuery(".faq-header").on("click", function(){
			if( jQuery(this).parent().hasClass("active") ){
				jQuery(this).next().slideUp();
				jQuery(this).parent().removeClass("active");
			}
			else{
				jQuery(".faq-contentbox").slideUp();
				jQuery(".faq-section").removeClass("active");
				jQuery(this).parent().addClass("active");
				jQuery(this).next().slideDown();
			}
			});
	});
	
