<?php
	

	if(isset($_POST['offset']) AND isset($_POST['slug']) ){

	 	$offset = $_POST['offset'];
	 	$slug = $_POST['slug'];
	 	$category = $_POST['category'];
	 	$limit = 10;

	 	$data = mt\shots::get($slug, $category, $limit, $offset);

	 	if (!empty($data)) {
	 		
	 		$results = [];
	 		 foreach($data as $key => $value){
	 		 		$results[] = $value->attributes;
	 		 }	

	 		ECHO json_encode($results);
	 		// header("content-type:application/json");

	 	


	 	}
			
	}


?>