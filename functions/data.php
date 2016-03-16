<?php
/**
* This file Holds all the function that fetch data from our database
*-----------------------------------------------------------------------------------*/


/* -------------------------------------------------------------------------------- */
/* gets all data about a page
/* -------------------------------------------------------------------------------- */
	function data_page($dbc, $slug){
			$stmt = $dbc->prepare("SELECT * FROM pages WHERE slug = :slug");
		$stmt->bindParam(':slug', $slug, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt -> fetch();
            if ($data) {
                return $data;
            }
        return false;

	}
/* -------------------------------------------------------------------------------- */
/* gets featured shots randomly
/* -------------------------------------------------------------------------------- */
	function get_featured_shots($dbc){
		  $stmt = $dbc->prepare("SELECT * FROM shots WHERE featured = 1 ORDER BY RAND() LIMIT 12");
        $stmt->execute();
        $images = $stmt -> fetchAll();
        	return $images;
	}
/* -------------------------------------------------------------------------------- */
/* gets all shots with limit 20
/* -------------------------------------------------------------------------------- */
	function get_shots($dbc){
			$stmt = $dbc->prepare("SELECT * FROM shots ORDER BY views DESC LIMIT 20");
        $stmt->execute();
        $images = $stmt -> fetchAll();
        	return $images;
	}
/* -------------------------------------------------------------------------------- */
/* tells you how many shots you have
/* -------------------------------------------------------------------------------- */
	function row_count($dbc){
 			$results = $dbc->query( "SELECT * FROM shots");
 		 $row_count= $results->rowCount();
 			return $row_count;
 	}
