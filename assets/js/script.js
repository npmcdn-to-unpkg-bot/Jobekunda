
// Mytailor.me compyright

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


jQuery(document).ready(function($) {
  jQuery.rsCSS3Easing.easeOutBack = 'cubic-bezier(0.175, 0.885, 0.320, 1.275)';
  $('#slider-cover1').royalSlider({
    arrowsNav: true,
    arrowsNavAutoHide: false,
    fadeinLoadedSlide: false,
    controlNavigationSpacing: 0,
    controlNavigation: 'bullets',
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


    //Signup Box function

function toggleOverlay(){
  var overlay = document.getElementById('overlay');

  if(overlay.style.visibility == "visible"){
    overlay.style.visibility = "hidden";

  } else {
    overlay.style.visibility = "visible";

  }
}

      // Notification drawer

    $(document).ready(function(){
      $("#notificationLink").click(function(){
        $("#notificationContainer").fadeToggle(300);
        $("#notification_count").fadeOut("slow");
        return false;
    });

    //Document Click

      $(document).click(function(){
        $("#notificationContainer").hide();
      });
          //Popup Click
      $("#notificationContainer").click(function(){
        return false
    });

    });
    