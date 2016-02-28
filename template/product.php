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
var ready=!0;$(document).ready(function(){function e(e,a){ready=!1,$.ajax({url:"loadmore_shots.php",type:"get",data:{recordsPerPage:e,lastID:a},dataType:"json",beforeSend:function(){$(".grid").append("<span class='load'>loading..</span>")},success:function(e){var a=$(".grid").masonry({columnWidth:".grid-item",itemSelector:".grid-item"});$(".load").hide(1e3).remove(),$(e).each(function(r){var t=$("<div class='product-item grid-item grid-item'><figure class='product-thumb-image'><a href='"+$image_path+e[r].shotFileName+"."+e[r].shotFileType+"' class='sp-view'><div class='image-holder'><img src='"+$image_path+e[r].shotFileName+"."+e[r].shotFileType+"'></div><div class='dimOverlay'></div><figcaption><span><img src='images/icons/search67.svg'></span></figcaption></a></figure></div>");$("#lastID").html(e[r].shotID),a.append(t).masonry("appended",t),setTimeout("ready=true;",1e3)})}})}var a=$(".lastID").html();$totalRecords="<?php echo $row_count; ?>",$currentPage=1,$recordsPerPage=10,$numberOfPages=Math.ceil(($totalRecords-20)/$recordsPerPage),$image_path="images/shots/",function(r){r(window).scroll(function(){r(window).scrollTop()>=r(document).height()-1500&1==ready&&$currentPage<=$numberOfPages&&(a=r("#lastID").html(),e($recordsPerPage,a),$currentPage++)})}(jQuery)});
</script>