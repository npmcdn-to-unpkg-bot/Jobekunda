<?php   

session_start();

require_once '../../config/setup.php'; 

if(!logged_in()){ 
  
  header("Location: portal.php");
}



// print_r($path);
 ?>
<!DOCTYPE html>
<html>
<head>
   <title><?php echo $site_title .' | Admin'?></title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="<?=$page['metaDesc'];?>">
   <link rel="stylesheet" href="<?= base($path);?>/assets/css/Style.css" type="text/css"/>
   <link rel="shortcut icon" href="<?= base($path);?>/images/favicon.png" />
   <link rel="stylesheet" href="<?= base($path);?>/assets/css/jquery.mCustomScrollbar.min.css" />
   <script src="<?= base($path);?>/assets/js/jquery-2.1.4.min.js"></script>
</head>
<body class="mt-layout">


<?php include D_TEMPLATE.'/sidebar.php';

include D_TEMPLATE.'/header.php';
?>

<div class="pageContainer">



        Welcom to Admin
</div>
      <!-- Transfer later -->
    <div class="mt-layout-black__cover"></div>

<?php include D_TEMPLATE.'/footer.php'; ?>


    <!-- Apps Script -->

    <script src="<?= base($path);?>/assets/js/plugins.js"></script>
    <script src="<?= base($path);?>/assets/js/script.js"></script>
    <script src="<?= base($path);?>/assets/js/overlay-js.js"></script>
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