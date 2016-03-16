<?php
/**
* Template Name: Shots Page
* Info: Pretty straight forward..
*
*/


// switch($path['call_parts'][1]) {
//   case 'trending': echo "string";
//     break;
//   }
?> 
    <section class="main-feed-header clearfix">
    <div class="mt-breadcrump-wrapper">
     <ul class="breadcrump">
       <li><a href="http://www.mytailor.me" title="home">Mytailor</a></li>
       <li id="bread"><?=$page['pageLabel']?></li>
     </ul>
    </div>
    <div class="mt-shots-nav-wrapper">
      <ul class="mt-shots-nav clearfix">
        <li class="mt-list-item">
          <a href="<?= base($path);?>/shots/trending"><span>Trending</span></a>
        </li>
        <li class="mt-list-item __active">
          <a href="<?= base($path);?>/shots/latest"><span>Latest</span></a>
        </li>
        <li class="mt-list-item">
          <a href="<?= base($path);?>/shots/featured"><span>Featured</span></a>
        </li>
      </ul>
    </div>
    </section>
    <div class = "pageContainer">
            <div class="clearfix mt-product-wrapper transit-3 grid">
             <?php

                       /***** Load shots !! */

                    $image_path = 'images/shots/';
                    $last_ID = load_shots($dbc, $image_path, $path);
                     

             ?>
        </div>
        <div class="loadmore-wrapper" style="display:none">

          <span class="mt-loadmore"></span>

             </div>
    </div>
<?php
/* -------------------------------------------------------------------------------- */
/* Load more shots with ajax on scroll...
/* -------------------------------------------------------------------------------- */
?>
<script type="text/javascript">

 $(document).ready(function(){


  // Global Variables
      var $lastID = $('.lastID').html(),
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
              beforeSend:function(){

                
                $(".loadmore-wrapper").show();
              },

              success:function(response){

                  var $grid = $('.grid').masonry({
                      columnWidth: '.grid-item',
                      itemSelector: '.grid-item'
                      });


                    $(response).each(function(index){
                      var $items = $("<div class='product-item grid-item grid-item'><figure class='product-thumb-image'><a href='"+'<?= base($path);?>/shot/'+response[index].shotFileName+'/'+"' class='sp-view'><div class='image-holder'><img src='"+'<?= base($path);?>/'+$image_path+response[index].shotFileName+'.'+response[index].shotFileType+"'></div><div class='dimOverlay'></div><figcaption><span><img src='<?= base($path);?>/images/icons/search67.svg'></span></figcaption></a></figure></div>")

                              //Set the last id
                            $('#lastID').html(response[index].shotID);

                            $('.grid').imagesLoaded(function(){

                                  $grid.append($items).masonry( 'appended', $items, 'reloadItems');
                                  // $items.appendTo($grid) 
                                  // console.log($grid);
                                      
                                
                            });
                                      
                  });
                                      $busy=false;

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



            load_data($offset);

            $currentPage++;

            $offset = $currentPage * 10;
            
         }
          }

      });



})(jQuery);

  });
</script>
