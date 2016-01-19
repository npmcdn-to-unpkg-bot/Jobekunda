<?php
session_start();
include 'config/setup.php';
?>

<!DOCTYPE html>
<html>
<head>
   <title><?php echo $site_title .' | '. $page['pageTitle'];?></title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/css/Style.css" type="text/css"/>
   <link rel="shortcut icon" href="images/favicon.png" />
        

</head>

<body>

    <?php include D_TEMPLATE.'/sidebar.php'; 

          include D_TEMPLATE.'/header.php'; 

      include D_TEMPLATE.'/signin-form.php';

        switch($pageid){
            case 1:
             #code...
                include D_TEMPLATE.'/home.php';
                break;
            case 2:
                #code...
                include D_TEMPLATE.'/product.php';
                break;

            case 3:
                #code...
                include D_TEMPLATE.'/s_Product.php';
                break;
            DEFAULT:
                #code...
                include D_TEMPLATE.'/home.php';

        }

    ?>




  <?php include D_TEMPLATE.'/footer.php'; ?>
           <?php include D_TEMPLATE.'/single-product.php';?>
    <!-- Scripts -->



        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/jquery.royalslider.min.js"></script>
        <script src="assets/js/script.js"></script>
                <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>


</body>
</html>