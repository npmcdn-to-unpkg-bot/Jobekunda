<?php   session_start();  require_once '../config/setup.php';  ?>

<!DOCTYPE html>
<html>
<head>
   <title><?php echo $site_title .' | '. $page['pageTitle'];?></title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="<?=$page['metaDesc'];?>">
   <link rel="stylesheet" href="assets/css/Style.css" type="text/css"/>
   <link rel="shortcut icon" href="images/favicon.png" />
   <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" />
   <script src="assets/js/jquery-2.1.4.min.js"></script>
</head>

<body class="mt-layout">

<?php  require_once '../config/page.php';   ?>

    <div class="mt-layout-black__cover"></div>

    <div class="mt-transit-loader">
      <div class="mt-page-loader-icon">
          <div id="preloader_3"></div>
      </div>
    </div>

    <!-- Apps Script -->

    <script src="assets/js/apps/waves.min.js"></script>
    <script src="assets/js/apps/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/apps/js.cookie.js"></script>
    <script src="assets/js/apps/masonry.pkgd.min.js"></script>
      <script src="assets/js/jquery.poptrox.min.js"></script>
    <script src="assets/js/script.js"></script>
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