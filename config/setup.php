<?php

     $site_title = 'MyTailor';
                                            #Database Conncection
        $hostname = 'localhost';$username = 'developer';$password = '';$DB_name = "mytailor";

    try {
            $dbc = new PDO("mysql:host=$hostname;dbname=$DB_name", $username, $password);
    }
    catch(PDOException $e)
        {
            echo $e->getMessage();
    }

        # Constaints :
        define('D_TEMPLATE', 'template');

        #function files:
    include ('functions/data.php');
    include ('functions/template.php');
    include 'functions/function.php';

if (isset($_GET['page']) ) {
    # code...
    $pageid = $_GET['page'];

} else {$pageid = 1;

}



    #page Setup
$page = data_page($dbc, $pageid);

#User Setup

if (isset ($_SESSION['user_id']) ){
    $user_data = user_data($dbc, $_SESSION['user_id']);
}else {$user_data= [];}