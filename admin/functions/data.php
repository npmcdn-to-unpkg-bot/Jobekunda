<?php

	function data_page($dbc, $id){
	$stmt = $dbc->prepare("SELECT * FROM pages
    WHERE pageID = $id ");
        $stmt->execute();
        $data = $stmt -> fetch();
        	return $data;
	}
