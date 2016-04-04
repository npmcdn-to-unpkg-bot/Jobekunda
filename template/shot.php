<?php

if (isset($path['call_parts'][1]) AND $path['call_parts'][1] != '') {

	$image = $path['call_parts'][1];
	$shotData = getShot_data($dbc, $image);

	$shot_name = $shotData['shotFileName'];
	inc_view( $shot_name, $dbc);

} else{

	 header("Location:http://mytailor.me");

	}

?>


<div class="pageContainer">

<div class="mt-shot-wrapper">
	<header class="mt-shot-header clearfix">
		<section class="mt-shot-actions">
			<div class="mt-shot-actions-back-btn">
				<a href="<?=base($path)?>/shots" title="Shots">
					<i class="mt-back-btn"></i>
				</a>
			</div>
		</section>
		<section class="mt-shot-avatar-wrapper">
			<a href="#" class="mt-shot-avatar" title="Mytailor">
				<img src="<?=base($path)?>/images/profilepix/45863590_2149.jpg" style="width:30px;">
				<h2 class="mt-avatar-name">Mytailor Africa</h2>
			</a>
		</section>
	</header>
	<section class="mt-shot-viewer">
		<div class="mt-shot-cover">
			<img src="<?=base($path)?>/images/shots/large/<?= $shotData['shotFileName']?>.jpg">
		</div>
	</section>

</div>

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
