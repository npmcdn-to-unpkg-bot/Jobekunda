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


/* -------------------------------------------------------------------------------- */
/* Display all shots
/* -------------------------------------------------------------------------------- */

function load_shots($dbc, $image_path, $path, $query)
{
    $images = get_shots($dbc, $query);
    foreach ($images as $image) {
        ?>
        <div class="mt-shot-card">
            <div class="mt-shot-image">
                <a href="?id=<?=$image['shotID'];?>" style="margin:0;">
                <img src="<?=base($path).'../../'.'/'.$image_path . $image['shotFileName'] . '.' . $image['shotFileType'] ?>">
                </a>
            </div>
        </div>

    <?php }

}