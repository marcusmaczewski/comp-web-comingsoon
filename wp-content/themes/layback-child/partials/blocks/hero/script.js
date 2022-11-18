jQuery(document).ready(function ($){

	/* Start your javascript here
	-------------------------------------------------- */
	let headerHeight =  jQuery('#header').height();
	
	jQuery('a[href="#hero-scroll"]').on('click', function (ev, el) {
	    ev.preventDefault();
	    var $ele = jQuery('.block-hero').next('div');
	    // console.log($ele);
	    jQuery('html, body').animate({
	        scrollTop: $ele.offset().top - headerHeight
	    }, 1300, 'easeInOutExpo');
	});

	// Slider
	jQuery('.block-hero').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: true,
	    dots: true,
	});
	
	jQuery('.block-hero .slick-prev').html('<i class="far fa-arrow-left"></i>');
	jQuery('.block-hero .slick-next').html('<i class="far fa-arrow-right"></i>');
});