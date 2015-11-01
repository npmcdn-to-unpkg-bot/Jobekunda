





	// Side Menu Trigger Function
	$('a.sideTrigger').click(function() {
		$('body').toggleClass('sideOpen');
		return false;
	});

	// Close Menu Trigger Function
	$('a.closeTrigger').click(function() {
		$('body').removeClass('sideOpen');
		return false;
	});


//Slider


 (function($){
        $(window).load(function(){
            $("#prodrow1").mThumbnailScroller({
              axis:"x", //change to "y" for vertical scroller
              	theme:"buttons-out"
           
            });
        });
    })(jQuery);