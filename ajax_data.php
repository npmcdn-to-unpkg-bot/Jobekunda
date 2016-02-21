<?php
require_once '../config/setup.php';
if(isset($_GET['recordsPerPage']) && isset($_GET['start'])){

 	$recordsPerPage = $_GET['recordsPerPage'];
 	$start = $_GET['start'];

 	try{
 		$stmt = $dbc->prepare("SELECT * FROM shots ORDER BY shotID DESC LIMIT $recordsPerPage");
 		$stmt->execute();
 		$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
 		echo json_encode($data);
 	}catch(PDOException $e){
 		echo $e->getMessage();
 	}
}

// where shotID < $lastID

?>