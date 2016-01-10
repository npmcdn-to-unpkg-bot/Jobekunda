<?php
include 'config/setup.php';


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
		elseif(ctype_alnum($_POST['username']) != true){
			return false;
	}
		elseif (ctype_alnum($_POST['passwd']) != true){
			return false;
	}
	else{
			return true;
		}
	}