<?php   
require_once '../../config/setup.php'; 

$images = glob('qm/*.jpg');
// print_r($images);
foreach ($images as $image) {
    $info = pathinfo($image);
    echo $info['filename'];
    echo "\r";
    $name = $info['filename'];
    $ext = $info['extension'];

          $stmt = $dbc->prepare('INSERT INTO shots (shotFileName, shotFileType) VALUES (:name, :ext)');
          $stmt->bindParam(':name', $name, PDO::PARAM_STR);
           $stmt->bindParam(':ext', $ext, PDO::PARAM_STR);
        $stmt->execute();
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

<div class="pagewrapper" style="top: 3.7em;min-height: 40em;">







</div>
      <!-- Transfer later -->
    <div class="mt-layout-black__cover"></div>

<?php include D_TEMPLATE.'/footer.php'; ?>


    <!-- Apps Script -->

    <script src="<?= base($path);?>/assets/js/plugins.js"></script>
    <script src="<?= base($path);?>/assets/js/script.js"></script>


</body>
</html>