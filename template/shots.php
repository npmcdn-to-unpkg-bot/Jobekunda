<?php
/**
* Template Name: Shots Page
* Info: Pretty straight forward..
*
*/

// Get URL variables and send to our Engine

 $slug = $path['call_parts'][1];
 $category = null;

     if($slug == ''){
        $slug = 'latest';

      }

     if(isset($path['ct'])){

             $category = $_path['ct'];
         }
     
     
$image_path = 'images/shots/large/';



$shots = mt\shots::get($slug, $category );

// echo json_encode();
// echo VAR_DUMP($shots);
?> 
    <section class="main-feed-header clearfix">
    

      <?php
      //<div class="mt-breadcrump-wrapper">
     // <ul class="breadcrump">
     //   <li><a href=" base($path);/home" title="home">Mytailor</a></li>
     //   <li id="bread"><$page['pageLabel']</li>
     // </ul>
      //</div>
     ?>
    
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

    <div class="mt-shots-nav-actions">
            <button class="icon-round mdl-button btn" id="dropdown">
            <i class="icon-center mdi mdi-dots-vertical" data-type="hidden"></i>
            </button>

      <div class="mt-menu-container" style="visibility:hidden;" id="m9menu">
          <ul>
            <li class="mt-list-btn btn" style="transition-delay: 0.012s;"><a href="?ct=ma" class="m-0">Male</a></li>
            <li class="mt-list-btn btn" style="transition-delay: 0.084s;"><a href="?ct=fm" class="m-0">Female</a></li>
            <li class="mt-list-btn btn" style="transition-delay: 0.156s;"><a href="?ct=ki" class="m-0">Kids</a></li>
            <li class="mt-list-btn btn" style="transition-delay: 0.156s;"><a href="?ct=ac" class="m-0">Accessories</a></li>
          </ul></div>

    </div>
    </section>
    <div class = "pageContainer">
            <div class="clearfix mt-product-wrapper transit-3 grid">

             <?php  foreach ($shots as $shot) : ?>

                        <div class="product-item grid-item grid-item">
                          <figure class="product-thumb-image">
                            <a href="<?=base($path).'/shot/'. $shot->shotfilename.'/'?>" class="sp-view">
                            <div class="image-holder">
                                <img src="<?=base($path).'/'.$image_path . $shot->shotfilename . '.' . $shot->shotfiletype ?>">
                            </div>
                            <div class="dimOverlay"></div>
                            <figcaption>
                                <span><img src="<?=base($path)?>/images/icons/search67.svg"></span>
                            </figcaption>
                            </a>
                          </figure>
                        </div>

                <?php endforeach; ?>
                     
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
              url: "<?=base($path);?>/ajax/more_shots/",
              type: "post",
              data: {"offset": $offset, "slug": $slug},
              dataType: "json",
              success:function(response){

                // console.log(response);
                // return;
                  var $grid = $('.grid').masonry({
                      columnWidth: '.grid-item',
                      itemSelector: '.grid-item'
                      });


                    $(response).each(function(index, value){

                      var $items = $("<div class='product-item grid-item grid-item'><figure class='product-thumb-image'><a href='"
                        +'<?= base($path);?>/shot/'
                        +value.shotfilename+'/'
                        +"' class='sp-view'><div class='image-holder'><img src='"
                        +'<?= base($path);?>/'
                        +$image_path+value.shotfilename
                        +'.'+value.shotfiletype
                        +"'></div><div class='dimOverlay'></div><figcaption><span><img src='<?= base($path);?>/images/icons/search67.svg'></span></figcaption></a></figure></div>")

                            $('.grid').imagesLoaded(function(){

                                  $grid.append($items).masonry( 'appended', $items, 'reloadItems');
                                  $(".mt-load-more-wrapper").hide();
                                  $busy = false;

                                
                            });
                                      
                  });
                                      
              },
              error:function(err, msg){
                console.log(err);
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
