
// Mytailor.me copyright

      var $body = $('body');

	// Side Menu Trigger Function
	$('a.sideTrigger').click(function() {
		$('body').toggleClass('sideOpen');
    $('.mt-layout-black__cover').addClass('is-visible');
		
	});

	// Close Menu Trigger Function
	$('a.closeTrigger').click(function() {
		$('body').removeClass('sideOpen');
    $('.mt-layout-black__cover').removeClass('is-visible'); 
		
	});

  // Close Menu Trigger Function
  $('.mt-layout-black__cover').click(function() {
    $('.mt-layout-black__cover').removeClass('is-visible');
        $('body').removeClass('sideOpen');
    
  });  

              //Slider


jQuery(document).ready(function($) {
  jQuery.rsCSS3Easing.easeOutBack = 'cubic-bezier(0.175, 0.885, 0.320, 1.275)';
  $('#slider-cover1').royalSlider({
    arrowsNav: true,
    arrowsNavAutoHide: false,
    fadeinLoadedSlide: false,
    controlNavigationSpacing: 0,
    controlNavigation: 'none',
    imageScaleMode: 'none',
    imageAlignCenter:false,
    blockLoop: true,
    loop: true,
    numImagesToPreload: 6,
    transitionType: 'fade',
    keyboardNavEnabled: true,
    block: {
      delay: 400
    }
  });
});

$(document).ready(function(){
  $('.rsArrowRight .rsArrowIcn').html('<i class="fa fa-x3 fa-angle-right"></i>')
    $('.rsArrowLeft .rsArrowIcn').html('<i class="fa fa-x3 fa-angle-left"></i>')

});




Waves.attach('.btn', ['waves-button', 'waves-float']);
Waves.init();

  //Side Bar Scroller

    (function($){
    $(window).load(function(){
        $(".mt-sidebar").mCustomScrollbar();
    });
})(jQuery);

//Aleart Box
$(document).ready(function(){

if (!Cookies('alert')) {
        $('.mt-info-wrapper').show();
  $('#mt-header-close').click(function() {
    $( ".mt-info-wrapper" ).slideUp( "slow" );
     Cookies.set('alert', 'true', { expires: 1 });
});

};
  });

//Respomsive shots
$(window).on('load', function(){


$('.grid').masonry({
  // options
    columnWidth: '.grid-item',
  itemSelector: '.grid-item'

});

});