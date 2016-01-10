
// Mytailor.me compyright

      var $body = $('body');

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
    

    // Sigin Overlay

      var _overlay = $(
          '<div id="overlay">' +
            '<div class="signin-wrapper">' +
              '<div id="header-form">' +
              '<div id = "form-logo"> ' +
                '<span style="margin:0;">' +
                '<img src="images/logo.png" style="width: 200px;">' +
                  ' </span> </div> </div>' +
                  '<div id="body-form">' +
                '<div id="social-sign">' +
            '<div class="panel-sn" >' +
              '<div  class="social-connets facebook-p">' +
              '<a href="#">' +
               '<img src="images/icons/fb-art.png">' +
                '<span style="margin: 1em;">Login with Facebook</span></a>' +
            '</div></div></div> ' +

        '<form id="signin-form" method="post" action="login.php">' +

        '<input type="text" name="username" Placeholder="username or Email" required title="Invalid characters">' +
        '<input type="password" name="passwd" id="password" placeholder="Password" required>' +


        '<input type="submit" value="Log In" class="sg-but" />' +
      '</form>' +
          '</div>' +

         '<div id = "footer-form">' +
                     '<span class="links-sign" id="lgin"><a href="#">Sign Up</a></span>' +
                      '<span class="links-sign" id="fpass"><a href="#">Forgot my Password</a></span>' +
            
                      '</div></div></div>' 
    
        ),

      _overlay_modal = _overlay.find('.signin-wrapper'),
        _dialog_timeout, _dialog_locked = false;
              _overlay
        .hide()
        .appendTo($body)
        .click(function() {
          _overlay.h5u_close();
          return true;
        });

      _overlay_modal
        .click(function(e) {
          e.stopPropagation();
        });


      _overlay.h5u_open = function() {
        window.clearTimeout(_dialog_timeout);
        _dialog_locked = true;
        _overlay
          .fadeTo('fast', 1.0, function() {
            if (typeof FB !== 'undefined'
            &&  typeof FB.XFBML !== 'undefined')
              FB.XFBML.parse();
            _dialog_locked = false;
          });
      };

      _overlay.h5u_close = function() {
        if (!_overlay.is(':visible'))
          return false;

        window.clearTimeout(_dialog_timeout);
        _dialog_locked = true;
        _overlay
          .fadeTo('fast', 0, function() {
            _overlay.hide();
            _dialog_locked = false;
          });
      };

        $('.login').on('click', function() {

        var t = $(this);
        _overlay.h5u_open();

        return false;

      });