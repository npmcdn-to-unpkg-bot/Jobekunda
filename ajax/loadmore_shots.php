<?php
require_once '../../config/setup.php';

	if(isset($_POST['offset']) ){

	 	$offset = $_POST['offset'];
	 	$slug = $_POST['slug'];
	 	$limit = 10;

	 	$query_string = generate_query($slug, $limit, $offset);
		$stmt = $dbc->prepare("$query_string");
		$stmt->execute();
		$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($data);
	}


?>