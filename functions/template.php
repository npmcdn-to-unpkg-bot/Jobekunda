<?php


function nav_main($dbc, $pageid){

	 $stmt = $dbc->prepare("SELECT * FROM pages");
          $stmt->execute();
             while ($nav = $stmt -> fetch()) { ?>
          		 <li><a href="?page=<?=$nav['pageID']; ?>" class="nav-option"><?=$nav['pageLabel'];?></a></li>     
         <?php }        

}