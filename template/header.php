<header class="mt-header" itemscope itemtype='https://schema.org/WPHeader'>

  <div class="mt-global-header">

     <div class="pull-left">
         <a class="sideTrigger">
            <span class="mt-menu-icon">
                <img src="images/icons/menu.svg"  style="width: 29px; height: 30px;">
            </span>
          <span class="mt-menu-text">Menu</span>
         </a>
     </div>


  </div><!-- Main bar ends -->  


              <?php

              if ($pageid == 2 ) {?>
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
             <?php } 


?>
                  </div>
               </section>
</header>

