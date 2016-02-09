
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



Waves.attach('.btn', ['waves-button', 'waves-float']);
Waves.init();

  //Side Bar Scroller

    (function($){
    $(window).load(function(){
        $(".mt-sidebar").mCustomScrollbar();
    });
})(jQuery);


//Respomsive shots
$(window).on('load', function(){


$('.grid').masonry({
  // options
    columnWidth: '.grid-item',
  itemSelector: '.grid-item'

});

});