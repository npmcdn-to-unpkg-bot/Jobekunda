/*********************************************************************************************

Mytailor.me

*********************************************************************************************/

(function($) {

    // Global variables

        var $body = $('body'),
            $window = $(window);
            id = $('.pageContainer').attr('id');
            $header = $('.mt-header'),
           $banner = $('.hero-viewport');

  $(function() {

          //Animation Loader

                $(window).on('load', function(){
                $('.mt-transit-loader').fadeOut('fast');

            });


      	// Side Bar

          //Open
        	$('a.sideTrigger').click(function() {
            	$('body').toggleClass('sideOpen');
              $('.mt-layout-black__cover').addClass('is-visible');
      		
      	});

      	// Close
      	    $('a.closeTrigger'),
            $('.mt-layout-black__cover')
                .click(function() {
      		          $('body').removeClass('sideOpen');
                    $('.mt-layout-black__cover').removeClass('is-visible'); 
      		
      	 });

          $('.sp-view').on('click', function() {
              var shot_img = $(this).find('img').first().attr('src');
                  sp_overlay.h5u_open(shot_img);
                     // $window.navigator(shot_img);
                    return false;


        });


              // Page
      switch (id) {

        default:
          break;

        case 'landing':

          var $bar = $('my-header'),
            $items = $('#items');

      }



  });

      if ($header.hasClass('normal')
      &&  $banner.length > 0) {

        $window.on('load', function() {

          $banner.scrollwatch({
            delay:    0,
            range:    0.5,
            anchor:   'top',
            on:     function() { $header.addClass('mt-header show').removeClass('mt-header-animate'); },
            off:    function() { $header.removeClass('show').addClass('mt-header-animate'); }
          });

        });

      }

       


            //Initializa all plugins
                 $window.on('load', function(){
                  //Waves Buttons
                    Waves.attach('.btn', ['waves-button', 'waves-float']);
                    Waves.init();
                  //Scroller
                    $(".mt-sidebar").mCustomScrollbar();

                    var $grid = $('.grid').masonry({
                  // options
                    columnWidth: '.grid-item',
                    itemSelector: '.grid-item'

                    });

                  });
})(jQuery);