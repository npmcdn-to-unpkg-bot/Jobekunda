<?php
require_once '../config/setup.php';

if(isset($_GET['recordsPerPage']) && isset($_GET['lastID'])){

 	$recordsPerPage = $_GET['recordsPerPage'];
 	$lastID  = $_GET['lastID'];

	$stmt = $dbc->prepare("SELECT * FROM shots  WHERE shotID < $lastID ORDER BY shotID DESC LIMIT $recordsPerPage");
	$stmt->execute();
	$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($data);
}

?>