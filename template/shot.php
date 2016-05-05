<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/5/2016
 * Time: 12:06 AM

 */

if (isset($path['call_parts'][1]) AND !empty($path['call_parts'][1])) {

    $image = $path['call_parts'][1];
    $shotData = getShot_data($dbc, $image);

    if ($shotData) {
        $shot_name = $shotData['shotFileName'];
        inc_view( $shot_name, $dbc);
    }else{

        header("Location:http://mytailor.me");
    }

}else{

    header("Location:http://mytailor.me");

}

?>

<div class="pageContainer">

<div class="mt-shot-wrapper">

	<div class="mt-shot-call-more-wrapper">

		<a href="#" class="mt-more-anchor" id="see-more">
			<span class="mt-shot-call-more">See More</span>
		</a>

	</div>
	<div class="clearfix mt-product-wrapper transit-3 grid">
	</div>

	    <section class="mt-load-more-wrapper">
        <div class="mt-load-bar" style="display:none">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        </section>
</div>
