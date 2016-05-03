<?php

require_once '../config/setup.php';

echo "string";
var_dump($path);
if( isset($post['image'] ) &&  !empty( $post['image'] ) ){
	$image = $post['image'];

	$stmt = $dbc->prepare("UPDATE shots SET views = views +1 WHERE shotFileName = 7207214dca7708d88e0f300a3eacca33 ");
	// $stmt->bindpram(':image', $image, PDO::PARAM_STR);
	$stmt->execute();

}

