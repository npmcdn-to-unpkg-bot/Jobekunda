<?php
require_once '../config/setup.php';

	if(isset($_POST['offset']) ){

	 	$offset = $_POST['offset'];
	 	$slug = $_POST['slug'];
	 	$limit = 10;

	$data = mt\shots::get($slug, $category, $limit, $offset);
	
			echo json_encode($data);
	}


?>