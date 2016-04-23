<?php
include '../../../config/setup.php';

if (isset($_GET['image_name']) AND $_GET['image_name'] != '') {

	$img_url = $_POST['image_name'];
	$image = basename($img_url);
	echo "$image";
	$shotData = getShot_data($dbc, $image);

	if ($shotData) {
			$shot_name = $shotData['shotFileName'];
			inc_view( $shot_name, $dbc);
			echo json_encode($shotData);
	}

}

