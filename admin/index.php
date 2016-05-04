<?php


/** Define CONFIG as our main config directory */
define( 'CONFIG', dirname(dirname(dirname(__FILE__))) . '/CONFIG/' );

  require_once CONFIG . 'setup.php';

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

/*
* If we have the users URL ? 
* we can now load the right page for our friend
*
*/


       if (isset($path)) {

          $page = mt\pages::loadPage($path, 'admin');


      }



// session_start();

// if(!logged_in()){ 
  
//   header("Location: portal.php");
// }
//print_r($path);
 ?>
<!DOCTYPE html>
<html>
<head>
   <title><?php echo $site_title .' | '. $page->pagetitle?></title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="<?=$page->metadesc?>">
   <link rel="stylesheet" href="<?= base($path);?>/assets/css/Style.css" type="text/css"/>
   <link rel="shortcut icon" href="<?= base($path);?>/images/favicon.png" />
   <link rel="stylesheet" href="<?= base($path);?>/assets/css/jquery.mCustomScrollbar.min.css" />
   <script src="<?= base($path);?>/assets/js/jquery-2.1.4.min.js"></script>
</head>
<body class="mt-layout">


<?php include 'page.php';?>

<!-- Transfer later -->
    <div class="mt-layout-black__cover"></div>


    <!-- Apps Script -->

    <script src="<?= base($path);?>/assets/js/plugins.js"></script>
    <script src="<?= base($path);?>/assets/js/script.js"></script>


</body>
</html>