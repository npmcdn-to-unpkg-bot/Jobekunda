<?php

$image_path = 'images/shots/thumb/'
 
?>

<div class = "pagewrapper">
    <div class = "pageContainer">

            <div class="clearfix mt-product-wrapper transit-3 grid">

            <?php   load_shots($dbc, $image_path);  ?>

        </div>
    </div> <!-- Product wrapper -->

</div>     <!-- Page wrapper -->

</div>