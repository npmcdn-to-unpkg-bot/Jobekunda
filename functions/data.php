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
/* gets all shots with limit 20
/* -------------------------------------------------------------------------------- */
	function get_shots($dbc, $slug){

        $queryString = generate_query($slug, 20, 0);
        $stmt = $dbc->prepare("$queryString");
        $stmt->execute();
        $data = $stmt -> fetchAll();
        	return $data;
	}
/* -------------------------------------------------------------------------------- */
/* tells you how many shots you have
/* -------------------------------------------------------------------------------- */
	function row_count($dbc){
 			$results = $dbc->query( "SELECT * FROM shots");
 		 $row_count= $results->rowCount();
 			return $row_count;
 	}


/* -------------------------------------------------------------------------------- */
/* Gets all data about a single shot
/*
/* -------------------------------------------------------------------------------- */

    function getShot_Data($dbc, $image){

        $stmt = $dbc->prepare("SELECT * FROM shots WHERE shotFileName = :image");
    $stmt->bindParam(':image', $image, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch();
        return $data;
}

/* -------------------------------------------------------------------------------- */
/* Returns a tailor who did a particular product
/*
/* -------------------------------------------------------------------------------- */
    function getTailors_Data($dbc ,$userID){

        $stmt = $dbc->prepare("select users.userName, users.firstName,users.lastName, profiles.* 
        from users inner join profiles on users.userID=profiles.userID
        where users.userID = $userID;");

    $stmt->execute();
    $data = $stmt->fetch();
        return $data;
    }
