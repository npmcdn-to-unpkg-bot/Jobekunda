<?php
session_start();
if(session_destroy()); // Destroying All Sessions

$_SESSION = [];
{
header("Location: portal.php"); // Redirecting To Home Page
}
