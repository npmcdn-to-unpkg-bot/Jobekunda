<?php
/**
* Template Name: Shots Page
* Info: Pretty straight forward..
*
*/
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
          <a href="#"><span>Trending</span></a>
        </li>
        <li class="mt-list-item __active">
          <a href="#"><span>Latest</span></a>
        </li>
        <li class="mt-list-item">
          <a href="#"><span>Featured</span></a>
        </li>
      </ul>
    </div>
    </section>
    <div class = "pageContainer">
            <div class="clearfix mt-product-wrapper transit-3 grid">
             <?php

                       /***** Load shots !! */

                    $image_path = 'images/shots/';
                    $last_ID = load_shots($dbc, $image_path);
                     

             ?>
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
      var $lastID = $('.lastID').html();
      $totalRecords = "<?php echo $row_count; ?>";
      $currentPage = 1;  
      $recordsPerPage = 10;
      $numberOfPages = Math.ceil(($totalRecords - 20) / $recordsPerPage) ;
      $image_path = 'images/shots/';

    // fetch images function...
      function load_data($recordsPerPage, $lastID){
          $.ajax({
              url: "loadmore_shots.php",
              type: "get",
              data: {"recordsPerPage": $recordsPerPage, "lastID": $lastID},
              dataType: "json",
              beforeSend:function(){
                $(".grid").append("<span class='load'>loading..</span>");
            },
              complete:function(){
                $(".load").remove();
            },
               success:function(response){
                 var $grid = $('.grid').masonry({
                    columnWidth: '.grid-item',
                    itemSelector: '.grid-item'
                    });
                 //Append newly added shots...
                $(response).each(function(index){
                  var $items = $("<div class='product-item grid-item grid-item'><figure class='product-thumb-image'><a href='"+$image_path+response[index].shotFileName+'.'+response[index].shotFileType+"' class='sp-view'><div class='image-holder'><img src='"+$image_path+response[index].shotFileName+'.'+response[index].shotFileType+"'></div><div class='dimOverlay'></div><figcaption><span><img src='images/icons/search67.svg'></span></figcaption></a></figure></div>")
                $('#lastID').html(response[index].shotID);
                  $grid.append($items).masonry( 'appended', $items);

                });


                
              }
          });
      }
     
      
      $(window).scroll(function(){
          if($(window).scrollTop() >= $(document).height() - 1000){
            if($currentPage <= $numberOfPages){
              $lastID = $('#lastID').html();
            load_data($recordsPerPage, $lastID);
            $currentPage++;
            
         }
          }
      });
  });


  </script> 