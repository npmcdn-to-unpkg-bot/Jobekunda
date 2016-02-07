<?php

$images = glob('images/shots/thumb{/*jpg,jpeg,png}', GLOB_BRACE)
 



 ?>

<div class = "pagewrapper">
    <div class = "pageContainer">

<div class="clearfix mt-product-wrapper transit-3 grid">

            <?php
                foreach ($images as $image) { ?>


                      <div class="product-item grid-item grid-item">
                <figure class="product-thumb-image">
                    <a href="<?=$image?>" class="sp-view">
                        <div class="image-holder">
                            <img src="<?=$image?>">
                        </div>
                        <div class="dimOverlay"></div>

                        <figcaption>
                            <span><img src="images/icons/search67.svg"></span>

                    </figcaption>
                    </a>
                </figure>

            </div>
              <?php  }


            ?>


    </div> <!-- Product wrapper -->


    <!-- Load More -->
<!-- 
    <div class="load-wrapper">
        <div id="load-more-button">
            <a href="#">
                More
            </a>

        </div>
    </div>

</div> -->
</div>     <!-- Page wrapper -->

