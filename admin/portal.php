<?php
include '../../config/setup.php';
session_start();

if(!empty($_SESSION['message'])) {

   $message = $_SESSION['message'];
}else{$message = "";}

if (!validate_userinput() ){

        login_fail($message = 'The username or password you’ve entered doesn’t match any account. Sign up for an account.'); 


} else{

    // filter data
    $usern = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $passwd = filter_var($_POST['passwd'], FILTER_SANITIZE_STRING);

    #encrypt password 
    $passwd = sha1($passwd);
    $timestamp = date('Y-m-d h:i:s');

    try
        {
            /*** set the error mode to excptions ***/
            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //select statement
            $stmt = $dbc->prepare("SELECT member_id, username, password FROM members 
                WHERE username = :username or email = :username AND password = :password AND status = 1");



                #bind parameters 

            $stmt->bindParam(':username', $usern );
            $stmt->bindParam(':password', $passwd ); 

                $stmt->execute();

           // result 
            $user_id = $stmt->fetchColumn();

            // no result then fail
            if($user_id == false)
            {
                login_fail($message = 'The username or password you’ve entered doesn’t match any account. Sign up for an account.');
            }
        
            else
            {

            $stmt = $dbc->prepare("UPDATE members SET last_logged_in = :time WHERE member_id = $user_id");
            $stmt->bindParam(':time', $timestamp );
            $stmt->execute();

                    //set the session user_id variable
                    $_SESSION['user_id'] = $user_id;

                    //select statement
               header("location: index.php"); // Redirecting To home Page

            }
        }          

    catch(Exception $e)
    {
         #database error
        login_fail($message = 'We are unable to process your request. Please try again later');

    }

}


?>


<!DOCTYPE html>
<html>
<head>
<head>
   <title><?php echo $site_title .' | Portal'?></title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="<?=$page['metaDesc'];?>">
   <link rel="stylesheet" href="<?= base($path);?>/assets/css/Style.css" type="text/css"/>
   <link rel="shortcut icon" href="<?= base($path);?>/images/favicon.png" />
   <link rel="stylesheet" href="<?= base($path);?>/assets/css/jquery.mCustomScrollbar.min.css" />
   <script src="<?= base($path);?>/assets/js/jquery-2.1.4.min.js"></script>
</head>
</head>

<body style="background: #202024;">

    <div id="page signup-page" >

          <div id="overlay">
            <div class="signin-wrapper">
              <div id="header-form">
              <div id = "form-logo"> 
                <span style="margin:0;">
                  <a href="http://mytailor.me" class="m-0"><img src="<?= base($path);?>/images/logo.png" style="width: 200px;"></a>
                </span>
                 </div>
               </div>
                  <div id="body-form">
                <div id="social-sign">
            <div class="panel-sn" >
              <div  class="social-connets facebook-p">
              <a href="#">
               <img src="<?= base($path);?>/images/icons/fb-art.png">
                <span style="margin: 1em;">Login with Facebook</span></a>
            </div></div></div> 

        <form id="signin-form" method="post" action="portal.php">

        <input type="text" name="username" Placeholder="username or Email" required title="Invalid characters" autofocus>
        <input type="password" name="passwd" id="password" placeholder="Password" required>
        <input type="submit" value="Log In" class="sg-but" >
      </form>
          </div>

         <div id = "footer-form">
                     <span class="links-sign" id="lgin"><a href="signup.php">Sign Up</a></span>
                      <span class="links-sign" id="fpass"><a href="#">Forgot my Password</a></span>
            
                      </div></div></div>

                                <!-- Scripts -->
          
    <script src="<?= base($path);?>/assets/js/plugins.js"></script>
    <script src="<?= base($path);?>/assets/js/script.js"></script>
    <script src="<?= base($path);?>/assets/js/overlay-js.js"></script>
       </body>
       </html>               