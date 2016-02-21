
<?php
//loadmore configuration
 function row_count($dbc){
 	try{
 		 $results = $dbc->query( "SELECT * FROM shots");
 		 $row_count= $results->rowCount();

 		if($row_count){
 			return $row_count;
 		}else{
 			return false;
 		}
 	}catch(PDOException $e){
 		echo $e->getMessage();
 	}
 }
?>
