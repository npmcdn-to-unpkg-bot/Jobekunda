<?php

	function data_page($dbc, $id){
	$stmt = $dbc->prepare("SELECT * FROM pages
    WHERE pageID = $id ");
        $stmt->execute();
        $data = $stmt -> fetch();
        	return $data;
	}

    function user_data($dbc, $id){
        $stmt = $dbc->prepare("SELECT * FROM members
        WHERE user_id = $id");
            $stmt->execute();
            $user_data = $stmt->fetch();
        $user_data['fullname'] = $user_data['firstname']. ' '.$user_data['lastname'];
                 return $user_data;
    }

//    function profile_pic($dbc, $id){
//    $stmt = $dbc->prepare("SELECT photo_name, photo_type FROM profile_photos
//        WHERE user_id = $id");
//    $stmt->execute();
//    $profile_pic = $stmt->fetch();
//    return $profile_pic;
//
//}

