<?php
include 'config/setup.php';
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
                WHERE username = :username or email = :username AND password = :password");



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
   <title>MyTailor | Login</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="assets/css/Style.css" type="text/css"/>
   <link rel="shortcut icon" href="images/favicon.png" />
   <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <div id="page signup-page" >

          <div id="overlay">
            <div class="signin-wrapper">
              <div id="header-form">
              <div id = "form-logo"> 
                <span style="margin:0;">
                  <a href="index.php" class="m-0"><img src="images/logo.png" style="width: 200px;"></a>
                </span>
                 </div>
               </div>
                  <div id="body-form">
                <div id="social-sign">
            <div class="panel-sn" >
              <div  class="social-connets facebook-p">
              <a href="#">
               <img src="images/icons/fb-art.png">
                <span style="margin: 1em;">Login with Facebook</span></a>
            </div></div></div> 

        <form id="signin-form" method="post" action="login.php">

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
          
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/jquery.royalslider.min.js"></script>
        <script src="assets/js/script.js"></script>

       </body>
       </html>               