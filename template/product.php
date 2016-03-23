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
       <li><a href="<?= base($path);?>" title="home">Mytailor</a></li>
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
                    load_shots($dbc, $image_path, $path);

          
                     

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
$(document).ready(function(){function e(e){$.ajax({url:"<?= base($path);?>/loadmore_shots.php",type:"post",data:{offset:e},dataType:"json",success:function(e){var a=$(".grid").masonry({columnWidth:".grid-item",itemSelector:".grid-item"});$(e).each(function(i){var o=$("<div class='product-item grid-item grid-item'><figure class='product-thumb-image'><a href='<?= base($path);?>/shot/"+e[i].shotFileName+"/' class='sp-view'><div class='image-holder'><img src='<?= base($path);?>/"+t+e[i].shotFileName+"."+e[i].shotFileType+"'></div><div class='dimOverlay'></div><figcaption><span><img src='<?= base($path);?>/images/icons/search67.svg'></span></figcaption></a></figure></div>");$(".grid").imagesLoaded(function(){a.append(o).masonry("appended",o,"reloadItems"),$(".mt-load-more-wrapper").hide(),r=!1})})}})}var a="<?php echo $row_count; ?>",i=3,o=10,s=Math.ceil((a-20)/o),t="images/shots/",r=!1,d=20;!function(a){a(window).scroll(function(){a(window).scrollTop()>=a(document).height()-1500&&!r&&(r=!0,s>=i&&(a(".mt-load-more-wrapper").show(),e(d),i++,d=10*i))})}(jQuery)});
</script>
