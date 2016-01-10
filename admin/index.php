<?php include 'config/setup.php';
include('session.php');

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

      include D_TEMPLATE.'/signin-form.php';?>

                      <!-- Hero cover -->

  <div class = "pagewrapper"> 
        <div class = "pageContainer">


   </div>   <!--Page Container  -->
  </div>   <!-- page wrapper  -->

  <?php include D_TEMPLATE.'/footer.php'; ?>
           
    <!-- Scripts -->


        <script src="assets/js/jquery-2.1.4.min.js"></script>
                <script src="assets/js/jquery.royalslider.min.js"></script>
        <script src="assets/js/script.js"></script>

</body>
</html>