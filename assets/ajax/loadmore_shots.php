<?php
require_once '../config/setup.php';

if(isset($_GET['recordsPerPage']) ){

 	$recordsPerPage = $_GET['recordsPerPage'];
 	//$lastID  = $_GET['lastID'];

	$stmt = $dbc->prepare("SELECT * FROM shots ORDER BY views DESC LIMIT $recordsPerPage");
	$stmt->execute();
	$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($data);
}

 //WHERE shotID < $lastID   && isset($_GET['lastID'])