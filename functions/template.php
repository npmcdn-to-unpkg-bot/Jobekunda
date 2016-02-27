<?php
/**
* This file Holds all the template function for loading dynamic content...
*-----------------------------------------------------------------------------------*/


/* -------------------------------------------------------------------------------- */
/* Dynamic Navigation
/* -------------------------------------------------------------------------------- */
function main_nav($dbc, $pageid){
	 $stmt = $dbc->prepare("SELECT * FROM pages WHERE pageLabel <> '' ");
          $stmt->execute();
             while ($nav = $stmt -> fetch()) { ?>
  <li<?php if ($nav['slug'] == $pageid) {echo ' class="mt-list-active"' ;} ?>><a href="<?='?page='.$nav['slug'] ?>" class="mt-sidebar-link btn"><?=$nav['pageLabel'];?></a></li>
  <?php }        
}

/* -------------------------------------------------------------------------------- */
/* Featured Shots
/* -------------------------------------------------------------------------------- */
function load_featured_shots($dbc, $image_path){
	 $images = get_featured_shots($dbc); 
    foreach ($images as $image) { 
    ?><div class ="lth-col-1 ht-col-1 all-container">
          <figure class="lth-wrapper" style="background:url('<?=$image_path  . $image['shotFileName'] . '.' . $image['shotFileType'] ?>');background-size: cover;">
            <a href="<?=$image_path . $image['shotFileName'] . '.' . $image['shotFileType'] ?>" class="sp-view">
              <img src="<?=$image_path . $image['shotFileName'] . '.' . $image['shotFileType'] ?>" alt="" style="display: none;">
              <div class="overlay-items">
              <figcaption>
              <span><img src="images/icons/search67.svg"></span>
              </figcaption>
              </div>
            </a>
          </figure>
      </div>
    <?php  }
}

/* -------------------------------------------------------------------------------- */
/* Load Shots Function
/* -------------------------------------------------------------------------------- */

function load_shots($dbc, $image_path){
    $images = get_shots($dbc);
    foreach ($images as $image) { 
    ?><div class="product-item grid-item grid-item">
      <figure class="product-thumb-image">
        <a href="<?=$image_path . $image['shotFileName'] . '.' . $image['shotFileType'] ?>" class="sp-view">
        <div class="image-holder">
            <img src="<?=$image_path . $image['shotFileName'] . '.' . $image['shotFileType'] ?>">
        </div>
        <div class="dimOverlay"></div>
        <figcaption>
            <span><img src="images/icons/search67.svg"></span>
        </figcaption>
        </a>
      </figure>
    </div>

    <?php $lastID = $image['shotID'];

  }
      echo "<span class='lastID hidden' id='lastID'>$lastID</span>";
}