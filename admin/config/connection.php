<?php
/**
 * Created by PhpStorm.
 * User: Jobizzness
 * Date: 1/13/2016
 * Time: 2:09 PM
 */

#Database Conncection
$hostname = 'localhost';$username = 'developer';$password = '';$DB_name = "mytailor";

try {
    $dbc = new PDO("mysql:host=$hostname;dbname=$DB_name", $username, $password);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}