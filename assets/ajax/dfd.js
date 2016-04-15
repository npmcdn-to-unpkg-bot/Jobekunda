 $(document).ready(function(){


  // Global Variables
      var
      $totalRecords = "<?php echo $row_count; ?>",
      $currentPage = 3,  
      $recordsPerPage = 10,
      $numberOfPages = Math.ceil(($totalRecords - 20) / $recordsPerPage),
      $image_path = 'images/shots/',
      $busy = false,
      $offset = 20;

    // fetch images function...
      function load_data($offset){
          $.ajax({
              url: "<?= base($path);?>/loadmore_shots.php",
              type: "post",
              data: {"offset": $offset},
              dataType: "json",
              success:function(response){

                  var $grid = $('.grid').masonry({
                      columnWidth: '.grid-item',
                      itemSelector: '.grid-item'
                      });

                    $(response).each(function(index){
                      var $items = $("<div class='product-item grid-item grid-item'><figure class='product-thumb-image'><a href='"+'<?= base($path);?>/shot/'+response[index].shotFileName+'/'+"' class='sp-view'><div class='image-holder'><img src='"+'<?= base($path);?>/'+$image_path+response[index].shotFileName+'.'+response[index].shotFileType+"'></div><div class='dimOverlay'></div><figcaption><span><img src='<?= base($path);?>/images/icons/search67.svg'></span></figcaption></a></figure></div>")

                            $('.grid').imagesLoaded(function(){

                                  $grid.append($items).masonry( 'appended', $items, 'reloadItems');
                                  $(".mt-load-more-wrapper").hide();
                                  $busy = false;

                                
                            });
                                      
                  });
                                      
              }
          });
      }
     
      //Listen for scrolls
      (function($){

      $(window).scroll(function(){
          if($(window).scrollTop() >= $(document).height() - 1500 && !$busy){

            $busy = true;
            //We can tell browser we are working here..

            if($currentPage <= $numberOfPages){

                $(".mt-load-more-wrapper").show();
                load_data($offset);

                $currentPage++;
                $offset = $currentPage * 10;
            
         }
          }

      });



})(jQuery);

  });