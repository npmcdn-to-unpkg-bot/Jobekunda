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



