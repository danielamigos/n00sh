(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		setInterval(NextSlide,5000);
	
		$('.open-recipe').click(function(event){
			$(this).closest('.first-level-row').next('.recipe-details').slideDown();
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top-120
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
		$('.close-recipe').click(function(event){
			event.preventDefault();
			$(this).closest('.recipe-details').slideUp();
		});
				
	});	
	
	function NextSlide()
	{
		var $slideshows = $('.noosh-slide-wrapper');
		
		$.each($slideshows,function(index,slideWrapper){
			var currentSlideIndex = parseInt($(slideWrapper).attr('data-current-slide'));
			if(isNaN(currentSlideIndex))
				currentSlideIndex = 0;
			var $slides = $(slideWrapper).find('.noosh-slide');
			var numberOfSlides = $slides.length;			
			if (numberOfSlides <= 1){
				return true;
			}
			var currentSlide = $slides.get(currentSlideIndex);
			currentSlideIndex = currentSlideIndex+1;
			if(currentSlideIndex == numberOfSlides)
				currentSlideIndex = 0;
			var nextSlide = $slides.get(currentSlideIndex);
			
			$(currentSlide).hide("slide",  { direction: "up",easing: 'easeInOutExpo' }, function(){
				$(nextSlide).show("slide",  { direction: "down",easing: 'easeInOutExpo' }, function(){
					 $(slideWrapper).attr('data-current-slide',currentSlideIndex);
				});
			}); 	
			
		}); 
	}

})(jQuery, this);