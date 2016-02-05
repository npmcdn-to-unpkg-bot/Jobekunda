<?php
session_start();
include 'config/setup.php';
?>

<!DOCTYPE html>
<html>
<head>
   <title><?php echo $site_title .' | Admin';?></title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../assets/css/Style.css" type="text/css"/>
      <link rel="stylesheet" href="assets/css/Style.css" type="text/css"/>
   <link rel="shortcut icon" href="images/favicon.png" />
   <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" />
</head>

<body class="mt-layout">

<?php
include 'config/page.php';

?>

<div class="mt-layout-black__cover"></div>
          <!-- Scripts -->
          
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/jquery.royalslider.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
             <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="assets/js/script.js"></script>
   <script src="assets/js/masonry.pkgd.min.js"></script>

                <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56825866-2', 'auto');
  ga('send', 'pageview');

$(window).on('load', function(){


$('.grid').masonry({
  // options
    columnWidth: '.grid-item',
  itemSelector: '.grid-item'

});

});

</script>
  

</body>
</html>