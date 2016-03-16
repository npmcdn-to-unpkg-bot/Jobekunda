<?php
require_once '../config/setup.php';

if(isset($_POST['offset']) ){

 	$offset = $_POST['offset'];

	$stmt = $dbc->prepare("SELECT * FROM shots ORDER BY views DESC LIMIT 10 offset $offset");
	$stmt->execute();
	$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($data);
}

?>