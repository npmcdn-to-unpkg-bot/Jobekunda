<?php

/* -------------------------------------------------------------------------------- */
/* Icrement a shot view by 1
/* -------------------------------------------------------------------------------- */
function inc_view($image, $dbc){

		$stmt = $dbc->prepare("UPDATE shots SET views = views + 1 WHERE shotFileName = :image");
		$stmt->bindparam(':image', $image, PDO::PARAM_STR);
		$stmt->execute();
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
                      ORDER BY RAND() LIMIT 21";

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