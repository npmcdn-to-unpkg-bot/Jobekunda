





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

function toggleOverlay(){
  var overlay = document.getElementById('overlay');
  var specialBox = document.getElementById('specialBox-008');
  overlay.style.opacity = .8;
  if(overlay.style.display == "block"){
    overlay.style.display = "none";
    specialBox.style.display = "none";
  } else {
    overlay.style.display = "block";
    specialBox.style.display = "block";
  }
}

    