<?php
/**
* Template Name: Shots Page
* Info: Pretty straight forward..
*
*/

 $slug = $path['call_parts'][1];
 
     if($slug == ''){
        $slug = 'latest';
     }
?> 
    <section class="main-feed-header clearfix">
    <div class="mt-breadcrump-wrapper">

      <?php
     // <ul class="breadcrump">
     //   <li><a href=" base($path);/home" title="home">Mytailor</a></li>
     //   <li id="bread"><$page['pageLabel']</li>
     // </ul>
     ?>
    </div>
    <div class="mt-shots-nav-wrapper">
      <ul class="mt-shots-nav clearfix">
        <li class="mt-list-item <?php activateButton($slug, 'trending', '__active'); ?>">
          <a href="<?= base($path);?>/shots/trending"><span>Trending</span></a>
        </li>
        <li class="mt-list-item <?php activateButton($slug, 'latest' , '__active'); ?>">
          <a href="<?= base($path);?>/shots/latest"><span>Latest</span></a>
        </li>
        <li class="mt-list-item <?php activateButton($slug, 'featured', '__active'); ?>">
          <a href="<?= base($path);?>/shots/featured"><span>Featured</span></a>
        </li>
      </ul>
    </div>
    </section>
    <div class = "pageContainer">
            <div class="clearfix mt-product-wrapper transit-3 grid">
             <?php

                       /***** Load shots !! */

                    $image_path = 'images/shots/large/';
                    load_shots($dbc, $image_path, $path, $slug);

          
                     

             ?>
        </div>
        
        <section class="mt-load-more-wrapper" style="display:none">
        <div class="mt-load-bar">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        </section>

    </div>
<?php
/* -------------------------------------------------------------------------------- */
/* Load more shots with ajax on scroll...
/* -------------------------------------------------------------------------------- */
?>
<script type="text/javascript">
 $(document).ready(function(){

  // Global Variables
      var
      $totalRecords = "<?php echo $row_count; ?>",
      $currentPage = 3,  
      $recordsPerPage = 10,
      $numberOfPages = Math.ceil(($totalRecords - 20) / $recordsPerPage),
      $image_path = 'images/shots/large/',
      $busy = false,
      $offset = 20;
      $slug = "<?php echo $slug; ?>"

    // fetch images function...
      function load_data($offset){
          $.ajax({
              url: "<?= base($path);?>/loadmore_shots.php",
              type: "post",
              data: {"offset": $offset, "slug": $slug},
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
</script>