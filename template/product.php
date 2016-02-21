<?php

$image_path = 'images/shots/thumb/'
 
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

             <?php   load_shots($dbc, $image_path);  ?>

        </div>
    </div> <!-- Product wrapper -->



<script type="text/javascript">

 $(document).ready(function(){
      function load_data($recordsPerPage,$start){
          $.ajax({
              url: "ajax_data.php",
              type: "get",
              data: {"recordsPerPage": $recordsPerPage, "start": $start},
              dataType: "json",
              beforeSend:function(){
                  $(".grid").append("<span class='load'>loading..</span>");
              },
              complete:function(){
                $(".load").remove();
              },
               success:function(response){
                 var $grid = $('.grid').masonry({
                  // options
                    columnWidth: '.grid-item',
                    itemSelector: '.grid-item'

                    });
                $(response).each(function(index){
                  var $items = $("<div class='product-item grid-item grid-item'><figure class='product-thumb-image'><a href='"+$image_path+response[index].shotFileName+'.'+response[index].shotFileType+"' class='sp-view'><div class='image-holder'><img src='"+$image_path+response[index].shotFileName+'.'+response[index].shotFileType+"'></div><div class='dimOverlay'></div><figcaption><span><img src='images/icons/search67.svg'></span></figcaption></a></figure></div>")
                  $last_ID = response[index].shotID;
                  $grid.append($items).masonry( 'appended', $items);
                });
                
              }
          });
      }
      $totalRecords = "<?php echo $row_count; ?>";
      $currentPage = 2;  
      $recordsPerPage = 10;
      $numberOfPages = Math.ceil($totalRecords / $recordsPerPage);
      $start = ($currentPage * $recordsPerPage - $recordsPerPage) ;
      $image_path = 'images/shots/thumb/';


      $(window).scroll(function(){
          if($(window).scrollTop() >= $(document).height() - 1000){
            console.log($numberOfPages);
            $start = ($currentPage * $recordsPerPage);
            if($currentPage <= $numberOfPages){
            load_data($recordsPerPage,$start);
            $currentPage++;
         }
          }
      });
  });


  </script> 