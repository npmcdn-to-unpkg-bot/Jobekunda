<?php   
/**
 * 
 *
 * @package  MyTailor
 * @author   Matarr Jobe <Jobizzness@gmail.com>
 */


/** Define CONFIG as our main setup directory */
define( 'CONFIG', dirname(dirname(__FILE__)) . '/config/' );


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

          $page = mt\pages::loadPage($path, 'public');


      }


$row_count = row_count($dbc);


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
   <link rel="stylesheet" href="http://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css">
   <script src="<?= base($path);?>/assets/js/jquery-2.1.4.min.js"></script>
   <script src="<?= base($path);?>/assets/apps/algoliasearch-client-js-master/dist/algoliasearch.min.js"></script>
   <script src="//cdn.jsdelivr.net/algoliasearch/3/algoliasearch.jquery.min.js"></script>
   <script src="http://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script>
</head>
<body class="mt-layout">
    <?php  require_once CONFIG . 'page.php';   ?>

      <!-- Transfer later -->
    <div class="mt-layout-black__cover"></div>

    <!-- Apps Script -->
    <script src="<?= base($path);?>/assets/js/plugins.js"></script>
    <script src="<?= base($path);?>/assets/js/script.js"></script>

     <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-56825866-2', 'auto');
      ga('send', 'pageview');
     </script>
</body>
</html>