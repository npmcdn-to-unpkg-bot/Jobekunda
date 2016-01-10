<?php
include 'functions/function.php';

session_start();

if (!logged_in()){

	header('Location: index.php');
	die();
}
