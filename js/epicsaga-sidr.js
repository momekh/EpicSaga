jQuery(document).ready(function() {
	"use strict";
	 
	//INITIALIZE THE SIDR
	jQuery('#or').sidr({
		source: '#sidr',
		side: 'right'
		
	});
	
	jQuery("#container").on("click",function(e) {
        jQuery.sidr('close');
    });
    
    jQuery("#sidr").on("click",function(e) {
        e.stopPropagation();
    });
    
    ///
    
    
	///
	
    //add img-responsive to all images under sidr
    jQuery('#sidr img').addClass('img-responsive');
    
});