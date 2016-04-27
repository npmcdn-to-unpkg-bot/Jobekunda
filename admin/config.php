<?php
    //setup
    error_reporting(0);
    $site_title = 'MyTailor';

 require_once '../../config/connection.php';
    # Constants :
    define('D_TEMPLATE', 'template');
    define('A_TEMPLATE', 'includes/template');

    #function files:
    include ('functions/sandbox.php');
    include ('functions/data.php');
    include ('functions/template.php');
    include ('functions/function.php');


        #Url Path
        $path = get_path();
            #page Setup
        if (! isset($path['call_parts'][0]) || $path['call_parts'][0] == '' ) {
            $path['call_parts'][0] = 'dashboard';

        }


    $page = data_page($dbc, $path['call_parts'][0], 'admin');
    if(!$page){
        $page = data_page($dbc, 'dashboard', 'admin');
    }

    