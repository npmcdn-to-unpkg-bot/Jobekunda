<?php

include '../../config/setup.php';


/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Handle the incoming request
| through our class, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

    $path = mt\Http\Requests::get_path();


  $requestURL = $path['call_parts'][0];

  switch ($requestURL) {
  	case 'more_shots':
  		include 'more_shots.php';
  		break;
  	
  	default:
  		# code...
  		break;
  }