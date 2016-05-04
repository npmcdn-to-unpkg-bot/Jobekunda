<?php
/**
* This file Holds all the template function for loading dynamic content...
*-----------------------------------------------------------------------------------*/


/* -------------------------------------------------------------------------------- */
/* Dynamic Navigation
/* -------------------------------------------------------------------------------- */
function main_nav($dbc, $path, $group){
	 $stmt = $dbc->prepare('SELECT * FROM pages WHERE mt_group = :group');
    $stmt->bindParam(':group', $group, PDO::PARAM_STR);
          $stmt->execute();
             while ($nav = $stmt -> fetch()) { ?>
  <li<?php selected_page($path['call_parts'][0], $nav['slug'], ' class="mt-list-active"') ?>><a href="<?=base($path).'/'.$nav['slug']?>" class="mt-sidebar-link btn"><i class="mt-icon mt-<?=$nav['slug'];?>"></i><?=$nav['pageLabel'];?></a></li>
  <?php }
}

