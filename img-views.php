<?php

require_once '../config/setup.php';

if( isset($_POST['image']) ){

	$url = $_POST['image'];
	$info = pathinfo($url);
	$image = $info['filename'];

	inc_view($image, $dbc);

}