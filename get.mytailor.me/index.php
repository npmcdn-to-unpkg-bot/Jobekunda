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
   <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
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

        </div>   <!-- Main bar ends -->

 </header>

  <div id="s-page">

    <div class="_s7u wizard-wrapper">
      <section>
        <div class="content1">
          <header class="wizard-header">
              <h4>We have been waiting for you !</h4>
          </header>

          <main class="wizard-main">

            <section class="ab-info-wrap">
                <div>
                  <ul class="kilama-01 clearfix">

                      <li>
                      <div class="circular-div">
                        <span class="small-circle">
                          <img src="images/icons/user146.svg">
                        </span>
                      </div>
                      <div class="kilama-cont">
                        <span>Customers</span>
                        Earn discounts from your next shopping
                      </div>
                    </li>

                    <li>
                      <div class="circular-div">
                        <span class="small-circle">
                          <img src="images/icons/share15.svg">
                        </span>
                      </div>
                      <div class="kilama-cont">
                        <span>Share</span>
                        Share your favorite deigns with your friends.
                      </div>
                    </li>

                    <li>
                      <div class="circular-div">
                        <span class="small-circle">
                          <img src="images/icons/hand132.svg">
                        </span>
                      </div>
                      <div class="kilama-cont">
                        <span>Designer ?</span>
                        Earn money by selling your products with us.
                      </div>
                    </li>
                    <div style="clear:both;"></div>

                  </ul>

                </div>
            </section>

            <div  class="social-connets facebook-p">
            <a href="#">
             <img src="../images/icons/fb-art.png">
              <span style="margin: 1em;">Connect with Facebook</span></a>
            </div>
            <div class="block-border">
              <h2><span>or</span></h2>
            </div>
            <div style="text-align:center;">
              <a href="#" class="link-text" data-target="div2">Signup with email</a>
            </div>
          </main>
      </div>

      <div id="div2" class="hvr-bounce-to-top mt_bg" style="display:none;height: 31em;">
                <section id="ui-head">
        <legend>Sign Up</legend>
      </section>  
      <div id="social-sign">
            <div class="panel-sn" >
              <div  class="social-connets facebook-p">
              <a href="#">
               <img src="../images/icons/fb-art.png">
                <span style="margin: 1em;">Connect with Facebook</span></a>
              </div>
            </div>
      </div> 
                <form id="signup-form" style="text-align: center;" method="post" action="reg.php">
                  <input type="text" name="firstname" placeholder="First-Name" style="width: 45%;float: left;">
                  <input type="text" name="lastname" placeholder="Last-Name" style="width: 45%;float: right;">
                  <input type="email" name="email" placeholder="Email Address">
                  <input type="password" name="password" placeholder="Password" autocomplete="off">
                  <input type="password" name="re-password" placeholder="Re-type Password" autocomplete="off">
                  <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
                  <input type="submit" name="signup" value="Sign up">
                </form> 

      </div>
      </section>

<!--       <section class="sig_">
          <div class="mt_bg hvr-bounce-to-top">bg</div>

      </section> -->

    </div>
  </div>

        <script src="../assets/js/jquery-2.1.4.min.js"></script>
        <script src="../assets/js/jquery.royalslider.min.js"></script>
        <script src="../assets/js/script.js"></script>


  <script >
$(function(){

   $('.link-text').click(function(){

         var target = $('#' + $(this).attr('data-target'));
         $('.content1').hide();
         target.show();
   });
});
  </script>

</body>
</html>
