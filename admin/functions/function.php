<?php


function logged_in(){
	return isset ($_SESSION['user_id']);
}


function validate_userinput(){
		if(!isset( $_POST['username'], $_POST['passwd'])){
			return false;
	}
		elseif(strlen( $_POST['username']) > 20 || strlen($_POST['username']) < 4){
			return false;
	}
		elseif(strlen( $_POST['passwd']) > 20 || strlen($_POST['passwd']) < 4){
			return false;
	}
		elseif (ctype_alnum($_POST['passwd']) != true){
			return false;
	}
	else{
			return true;
		}
	}

function login_fail($message){
		$_SESSION['message'] = $message;
		
}

/* -------------------------------------------------------------------------------- */
/* Generate Query String from url
/* -------------------------------------------------------------------------------- */
function generate_query($slug, $limit, $offset){

	switch ($slug) {
		case 'latest':
			$queryString = "SELECT * FROM shots
                    ORDER BY uploadDate DESC,
                    views DESC,
                    shotID DESC
                    LIMIT $limit offset $offset";

			break;

		case 'trending':
			$queryString = "SELECT AVG(views/DATEDIFF(NOW(), uploadDate))
                    as Popularity, shots.*
                    FROM shots GROUP BY shotID
                    ORDER by popularity DESC LIMIT $limit offset $offset";
			break;

		case 'featured':
			$queryString = "SELECT * FROM shots
                      WHERE featured = 1
                      ORDER BY views DESC,
                      shotID DESC LIMIT $limit offset $offset";

			break;

		case 'features':
			$queryString = "SELECT * FROM shots
                      WHERE featured = 1
                      ORDER BY RAND() LIMIT 9";

			break;

		default:
			$queryString = "SELECT * FROM shots
                      ORDER BY uploadDate DESC,
                      views DESC,
                      shotID DESC LIMIT $limit offset $offset";

			break;

	}

	return $queryString;
}