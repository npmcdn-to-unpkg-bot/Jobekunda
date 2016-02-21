<?php
require_once '../config/setup.php';
if(isset($_GET['recordsPerPage']) && isset($_GET['start'])){

 	$recordsPerPage = $_GET['recordsPerPage'];
 	$start = $_GET['start'];
 	$lastID  = 20;

	$stmt = $dbc->prepare("SELECT * FROM shots  WHERE shotID > $lastID ORDER BY shotID DESC LIMIT $recordsPerPage");
	$stmt->execute();
	$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($data);
}

?>