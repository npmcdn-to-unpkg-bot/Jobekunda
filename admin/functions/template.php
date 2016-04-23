<?php


/* -------------------------------------------------------------------------------- */
/* Dynamic Navigation
/* -------------------------------------------------------------------------------- */
function main_nav($dbc, $path ){
    $stmt = $dbc->prepare("SELECT * FROM pages WHERE pageLabel <> '' AND mt_group = 'admin'");
    $stmt->execute();
    while ($nav = $stmt -> fetch()) { ?>
        <li<?php selected_page($path['call_parts'][0], $nav['slug'], ' class="mt-list-active"') ?>><a href="<?=base($path).'/'.$nav['slug']?>" class="mt-sidebar-link btn"><?=$nav['pageLabel'];?></a></li>
    <?php }
}

