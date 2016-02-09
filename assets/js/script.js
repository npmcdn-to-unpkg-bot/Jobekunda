
/*********************************************************************************************

Mytailor.me

*********************************************************************************************/

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
