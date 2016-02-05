<?php

function nav_main($dbc, $pageid){
	 $stmt = $dbc->prepare("SELECT * FROM pages WHERE pageLabel <> '' ");
          $stmt->execute();
             while ($nav = $stmt -> fetch()) { ?>
                    <li<?php if ($nav['pageID'] == $pageid) {echo ' class="mt-list-active"' ;} ?>><a href="<?=$nav['pageLabel']; ?>" class="mt-sidebar-link btn"><?=$nav['pageLabel'];?></a></li><?php }        
}
