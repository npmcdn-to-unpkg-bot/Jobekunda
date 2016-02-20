
 var $body = $('body');

$('.mt-search-box > input[type="search"]').keyup(function() {
	 if( $(this).val() ) {
	 	$('#search-form').delay(200).submit();
	$('.mt-search-result-wrapper').show();
	$('.pageContainer').hide();

} else{
		$('.mt-search-result-wrapper').hide();
	$('.pageContainer').show();
}

});

$("#search-form").submit(function (event) {
    event.preventDefault();

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


      sp_overlay.h5u_open = function(image) {
        $('.sp-cover>img').attr('src', image);
         offsetY = window.pageYOffset;
               // sp_overlay_box.css({'min-height': (offsetY / 2) + 'px'});
          $body.css({'position': 'fixed','top': -offsetY + 'px'});

//
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

