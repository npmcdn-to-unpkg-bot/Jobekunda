<?php //require_once '../config/setup.php';


session_start();

//Form Tokken
$form_token = md5( uniqid('auth', true) );

//session form token
$_SESSION['form_token'] = $form_token;

?>
<!DOCTYPE html>
<html>
<head>
   <title>MyTailor | Creat Account</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="../assets/css/Style.css" type="text/css"/>
   <link rel="stylesheet" href="assets/css/main.css" type="text/css"/>
   <link rel="shortcut icon" href="../images/favicon.png" />
   <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

                <!-- Header -->
  <header class = "headerContainerWrapper wrap" role='banner' itemscope itemtype='https://schema.org/WPHeader'>

        <div class = "Bar-main" style="background-color: #FFFFFF;">

                 	<div class="logo-pane-bar">
                 		<a href ="../index.php" title="MyTailor Home">
                 		<img src="../images/logo.png" width="200px">
                 	</a>
                 	</div>

                 	 <div class="avatar-pane">
                 	 	<h3>Hi, Jobizzness</h3>
                 		<img src="../images/profilepix/11698517_10205466839968531_5750592294516276713_n.jpg" style="width: 40px;">

                </div>

            </div>
        </div>   <!-- Main bar ends -->

 </header>

  <div id="s-page">
  		<div class="_s7u wizard-wrapper">
  			<header class="wizard-header">

  			</header>
        
  		</div>

  </div>


</body>
</html>