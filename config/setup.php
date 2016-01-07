<?php

/**
    Setup file
 * User: Jobizzness
 * Date: 12/31/2015
 * Time: 12:21 PM
 */

     $site_title = 'MyTailor';
     $page_title = "Home";

    # Database Connection...
    $dbc =  mysqli_connect('localhost', 'developer', '', 'mytailor') OR die('Ooops ! theres a problem:' .mysqli_connect_error());