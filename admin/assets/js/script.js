
// Mytailor.me compyright

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
            '<input type="text" id="username" name="username" Placeholder="username or Email" required title="Invalid characters">' +
            '<input type="password" name="passwd" id="password" placeholder="Password" required>' +
            '<input type="submit" value="Log In" class="sg-but" style disabled />' +
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

        // Single Product



  var sp_overlay = $('.sp-overlay'),
        sp_overlay_box = sp_overlay.find('.sp-content-box'),
        offsetY = window.pageYOffset,
        _dialog_timeout, _dialog_locked = false;

        sp_overlay.hide().appendTo($body).click(function() {
          sp_overlay.h5u_close();
          return true;
        });

      sp_overlay_box
        .click(function(e) {
          e.stopPropagation();
        });


      sp_overlay.h5u_open = function() {
         offsetY = window.pageYOffset;
          $body.css({'position': 'fixed','top': -offsetY + 'px'
        });


        window.clearTimeout(_dialog_timeout);
        _dialog_locked = true;
        sp_overlay
          .fadeTo('fast', 1.0, function() {
            if (typeof FB !== 'undefined'
            &&  typeof FB.XFBML !== 'undefined')
              FB.XFBML.parse();
            _dialog_locked = false;
          });
      };

      sp_overlay.h5u_close = function() {
         $body.css({'position': 'static'});
         $(window).scrollTop(offsetY);

        if (!sp_overlay.is(':visible'))
          return false;
        window.clearTimeout(_dialog_timeout);
        _dialog_locked = true;
        sp_overlay
          .fadeTo('fast', 0, function() {
            sp_overlay.hide();
            _dialog_locked = false;
          });
      };

        $('.sp-view').on('click', function() {

        var t = $(this);
        sp_overlay.h5u_open();

        return false;

      });





Waves.attach('.btn', ['waves-button', 'waves-float']);
Waves.init();

  //Side Bar Scroller

    (function($){
    $(window).load(function(){
        $(".mt-sidebar").mCustomScrollbar();
    });
})(jQuery);




// Content Loader
$(document).ready(function(){

//set trigger and content variable
    var trigger = $('.snd-navigation a'),
        container = $('#_5h60');

        //Fire on click

        trigger.on('click', function(){

          //set $this for re-use. Set trigger from data attribute

          var $this = $(this),
            target = $this.data('target');
          if (!$(this).hasClass("n-active")) {
            // Remove the class from anything that is active
            $("a.n-active").removeClass("n-active");
            // And make this active
            $(this).addClass("n-active");
  }

        $('#bread').text(target);

            //Load target page into container

            container.load('template/user/' + target + '.php');

            //stop link
            return false;
        });

});


//Login effect

(function($){

    var Login =  {

        init: function(){
            var self = this;

            this.eventHandling.sopie.call(self);
        },

        eventHandling: {
            sopie: function(){
              'use strict';
              
              var self = this;

              $('#username')
                  .on('input',this.checker)
                  .next()
                  .on('input', this.checker);
              
            },

        },


        checker: function(){

        
  var input=$('#username');
  var is_name=input.val();
    var input=$('#password');
  var is_pass=input.val();

  if(is_name){

    if (is_pass) {
            $(".sg-but")
              .css({"border":"2px solid #F23054","color":"#F23054"})

              .prop( "disabled", false);
           
      }else{
    
              $(".sg-but")
              .attr('style', '')
              .prop( "disabled", true);
           };

  }else{
                    $(".sg-but")
              .attr('style', '')
              .prop( "disabled", true);

  }


  }
}
    Login.init();


})(jQuery)