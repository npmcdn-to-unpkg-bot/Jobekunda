<?php

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
	<header class="mt-shot-header clearfix mt-card-light">
		<section class="mt-shot-actions">
			<div class="mt-shot-actions-back-btn">
				<a href="<?=base($path)?>/shots" title="Shots">
					<i class="mt-back-btn"></i>
				</a>
			</div>
		</section>
		<section class="mt-shot-avatar-wrapper">
			<?php
				$shotOwner = $shotData['userID'];

				$tailors_info = getTailors_Data($dbc, $shotOwner);


			?>
			<a href="#" class="mt-shot-avatar" title="<?= $tailors_info['userName']; ?>">
				<img src="<?=base($path)?>/images/profilepix/<?= $tailors_info['avatar'] .'.'. $tailors_info['avatarExt']; ?>" style="width:30px;">
				<h2 class="mt-avatar-name"><?= $tailors_info['userName']; ?></h2>
			</a>
		</section>
	</header>

	<section class="mt-shot-viewer mt-card-light">
		<div class="mt-shot-cover">
			<img src="<?=base($path)?>/images/shots/large/<?= $shotData['shotFileName']?>.jpg">
		</div>
		<div class="shot-info" style="
    padding: 1em 3em;
    min-height: 20px;
    background: #F8F8F8;
">
				<div class="shot-title" style="
    padding: 1em 0;
"><a href="#" style="
    font-size: larger;
    text-decoration: underline;
    /* font-weight: 600; */
    /* color: #795548; */
">African Skirts &amp; tops</a></div>
				<div class="shot-description"><p style="
    font-size: 14px;
    letter-spacing: 1px;
    color: #646464;
">This is just something i've been working on, i hope its dope and yall like it and all you knoe how posts can get. something i've been working on, i hope its dope and yall like it and all you knoe how posts can get.</p></div>
			</div>
	</section>

	<div class="mt-shots-info-wrap mt-card-light">
		<div class="mt-shot-info-head">
			<div class="mt-shot-user-actions-wrap">
				<ul class="mt-shot-user-actions">

				<li class="each-action">
					<a href="#" class="">
						<i class="mdi mdi-heart-outline" style="font-size: 2em;color: #F23054;"></i>
						<span>2k</span>
					</a>
				</li>
				<li class="each-action">
						<a>
							<i class="mdi mdi-eye" style="font-size: 2em;"></i>
							<span>5k</span>
						</a>
					</li>


				</ul>
			</div>
			<div class="mt-shot-utility-icons">
				<ul>
					<li class="util-list-surcelink m-0">
						<a class="btn mt-btn-circle m-0" href="#" title="source URL">
                              <i class="mdi mdi-link-variant"></i>
                              </a>
					</li>
				</ul>
			</div>
		</div>

		<div class="mt-shot-comments-wrapper scroller hidden">

			<div class="mt-shot-comment-cont">
			
			</div>

		</div>
		<div class="comment-form-wrapper">
			<div class="input-cont">
				<input class="form-control" type="text" placeholder="Write your comment here ...">
			</div>
		</div>
			<div class="btn-cont">
				<span class="arrow">
				</span>
				<a href="" class="btn blue icn-only">
				<i class="fa fa-check icon-white"></i>
				</a>
			</div>

		</div>

	</div>

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
