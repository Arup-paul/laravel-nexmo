(function ($) {
  "use strict";

  

	
   

// main slider

 $('.image-active').owlCarousel({
	loop:true,
	margin:10,
	nav:true,
	autoplay:true,
	
	responsive:{
		0:{
			items:1,
			nav:false
		},

		600:{
			items:1
		},
		1000:{
			items:1
		}
	}
}); 






}(jQuery)); 

