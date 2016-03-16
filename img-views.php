<?php

require_once '../config/setup.php';

if( isset($_POST['image']) ){

	$url = $_POST['image'];
	$info = pathinfo($url);
	$image = $info['filename'];

			$stmt = $dbc->prepare("UPDATE shots SET views = views + 1 WHERE shotFileName = :image");
		$stmt->bindparam(':image', $image, PDO::PARAM_STR);
		$stmt->execute();

}