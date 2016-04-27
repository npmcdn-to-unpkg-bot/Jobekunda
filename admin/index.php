<?php   
include "config.php";
session_start();



if(!logged_in()){ 
  
  header("Location: portal.php");
}



//print_r($path);
 ?>
<!DOCTYPE html>
<html>
<head>
   <title><?php echo $page['pageTitle'] .' | '.$site_title ;?></title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="<?=$page['metaDesc'];?>">
   <link rel="stylesheet" href="<?= base($path);?>/assets/css/Style.css" type="text/css"/>
   <link rel="shortcut icon" href="<?= base($path);?>/images/favicon.png" />
   <link rel="stylesheet" href="<?= base($path);?>/assets/css/jquery.mCustomScrollbar.min.css" />
   <script src="<?= base($path);?>/assets/js/jquery-2.1.4.min.js"></script>
</head>
<body class="mt-layout">


<?php include 'page.php'; ?>
<!-- Transfer later -->
    <div class="mt-layout-black__cover"></div>


    <!-- Apps Script -->

    <script src="<?= base($path);?>/assets/js/plugins.js"></script>
    <script src="<?= base($path);?>/assets/js/script.js"></script>


</body>
</html>