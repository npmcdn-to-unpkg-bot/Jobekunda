<?php

	function data_page($dbc, $id){
	$stmt = $dbc->prepare('SELECT * FROM pages WHERE pageID = :id');
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt -> fetch();
        
        	return $data;
	}

	function get_featured_shots($dbc){
		  $stmt = $dbc->prepare("SELECT * FROM shots WHERE featured = 1 ORDER BY RAND() LIMIT 12");
        $stmt->execute();
        $images = $stmt -> fetchAll();
        	return $images;
	}

	function get_shots($dbc){
		$stmt = $dbc->prepare("SELECT * FROM shots ORDER BY RAND() LIMIT 25");
        $stmt->execute();
        $images = $stmt -> fetchAll();
        	return $images;
	}