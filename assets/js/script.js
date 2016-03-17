/*********************************************************************************************

Mytailor.me

*********************************************************************************************/

(function($) {

    // Global variables

        var $body = $('body'),
            $window = $(window),
            id = $('.pageContainer').attr('id'),
            $header = $('.mt-header'),
            $banner = $('.hero-viewport');

        $(function() {

                //========== Animation Loader ==========

                      $(window).on('load', function(){

                          $('.mt-transit-loader').fadeOut('fast');

                    });


              	//=========== Side Bar ==========

                    //Open
                  	  $('a.sideTrigger').click(function() {

                          	$('body').toggleClass('sideOpen');

                            $('.mt-layout-black__cover').addClass('is-visible');

                	    });

                	  // Close
                	    $('a.closeTrigger'),$('.mt-layout-black__cover').click(function() {

          		              $('body').removeClass('sideOpen');

                            $('.mt-layout-black__cover').removeClass('is-visible'); 
                	    });

                //========== sp Overlay ==========


                      $(document).on('click', '.sp-view', function() {
                              var shot_img = $(this)
                                    .parent()
                                    .find('a')
                                    .attr('href'),

                                  shot_img_location = $(this)
                                    .first()
                                    .find('img')
                                    .attr('src');

                                  incr_view(shot_img);

                                  $sp_overlay.mt_OpenOval(shot_img_location, shot_img);
                                    return false;

                            });



                          //vars
                            var $sp_overlay = $('.sp-overlay'),
                                $sp_overlay_box = $sp_overlay.find('.sp-content-box'),
                                offsetY = window.pageYOffset;
                            
                            // Close overlay on click
                                $sp_overlay
                                    .hide()
                                    .appendTo($body)
                                    .click(function() {
                                        $sp_overlay.mt_CloseOval();
                                        return true;

                                    });

                            // stop box click from closing overlay
                                $sp_overlay_box
                                    .click(function(e){ 
                                      e.stopPropagation(); 
                                    });
                            // Esc to close overlay
                            $(document).keyup(function(e) {
                                  if (e.keyCode == 27){
                                    $sp_overlay.mt_CloseOval();
                                        return true;
                                  };
                                });


                            //=====Open Overlay
                            $sp_overlay.mt_OpenOval = function(image, name) {
                                      $('.sp-cover>img').attr('src', image);
                                      $body.css({'position': 'static','top': -offsetY + 'px', 'overflow-y': 'hidden'});
                                          $sp_overlay
                                          .fadeTo('fast', 1.0, function() {
                                                $sp_overlay.show();
                                                history.pushState({}, '', name);
                                            });

                                      //listen for back button
                                          window.addEventListener('popstate', function(event) {
                                                $sp_overlay.mt_CloseOval(false);

                                          });
                            };

                            //=====Close Overlay
                            $sp_overlay.mt_CloseOval = function(bTrigger) {
                                       $body.css({'position': 'static', 'overflow-y': 'auto'});
                                       $(window).scrollTop(offsetY);

                                       if (bTrigger != false) {
                                              history.back();
                                          };
                                          if (!$sp_overlay.is(':visible'))
                                              return false;
                                                $sp_overlay.fadeTo('fast', 0, function() {
                                                    $sp_overlay.hide();
                                            });
                            };

                            function incr_view (image) {
                              $.ajax({ url: 'img-views.php',
                                     data: {"image": image},
                                     type: 'post',
                                     success: function() {
                              
                                    }
                                  });
                            }





                  //========== Page ==========

                      switch (id) {
                          
                        case 'landing':

                          var $bar = $('my-header'),
                            $items = $('#items');

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

                              break;
                      }


        });
      
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