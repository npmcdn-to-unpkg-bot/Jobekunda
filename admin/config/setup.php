<?php

     $site_title = 'MyTailor';

    #Database Conncection
     include 'connection.php';

        # Constaints :
        define('D_TEMPLATE', 'template');
         define('U_TEMPLATE', 'template/user');

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

#Image setup

  $images_dir = 'images/shots'; 