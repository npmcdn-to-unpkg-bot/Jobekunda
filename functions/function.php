<?php

/* -------------------------------------------------------------------------------- */
/* Icrement a shot view by 1
/* -------------------------------------------------------------------------------- */
function inc_view($image, $dbc){

		$stmt = $dbc->prepare("UPDATE shots SET views = views + 1 WHERE shotFileName = :image");
		$stmt->bindparam(':image', $image, PDO::PARAM_STR);
		$stmt->execute();
}


function activateButton($var1, $var2, $active){
        if ($var1 == $var2) {

          echo "$active";
        }
}

function mtToJson($data, $options = null) {

	return $data;
		// //$out = "[";
		// 	foreach( $data as $row) {

		// 		if ($options != null)
		// 		$out .= $row->to_json($options);

		// 		else 
		// 		$out .= $row->to_json();
		// 		$out .= ",";
		// 	}

		// 	$out = rtrim($out, ',');
		// 	//$out .= "]";
		// return $out;
}