<!DOCTYPE html>
<html>
<head>
   <title><?php echo $title; ?></title>
   <link rel="stylesheet" href="assets/css/Style.css" type="text/css"/>

   <meta charset="UTF-8">

   <script src="assets/jquery/jquery-2.1.4.min.js"></script>
   <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<div id="page">
    <div class="SideMenu">

     <nav id="main-nav">
              <ul>
                <div class="actionsMain">
                  <a href="#" class="closeTrigger"><span class="icon-close">X</span></a>
               <a href="#" class="signupSideM">Sign up</a>
               <a href="#" class="signinSideM">Member</a>

                </div>
                
                  <li><a href="#" id="nav-home" class="nav-option">Home</a></li>
                  <li><a href="#" class="nav-option">Products</a></li>
                  <li><a href="#" class="nav-option">Features</a></li>
                  <li><a href="#" class="nav-option">Tracking</a></li>
                  <li><a href="#" class="nav-option">Help Center</a></li>
                  
                  <div class="Navlow-panel">
                    <p><a href="#">Shipment</a></p>
                    <p><a href="">Business</a></p>
                    <p><a href="">Be a partner</a></p>
                    <p><a href="">African Fashion</a></p>
                       <div class="companycall">
                            <span ><img src="images/phone.png" width="40px" height="30px" id="cbutton"></span><p>(+44 756 8221 532)</p>
                        </div>

                  </div>

              </ul>
              
          </nav></div>

                <!-- Header -->

  <header class = "headerContainerWrapper">

      <!-- VIDEO CAROUSEL
    ======================================================= -->
    <div class="header-container">
      <div class="video-container">
        <video preload="true" autoplay="autoplay" loop="loop" screen="fullscreen" muted>
          <source src="video/video.mp4" type="video/mp4">
          <source src="" type="video/webm">
          <source src="" type="video/mov">
          <source src="" type="video/3gp">
        </video>
      </div>


        <div class = "Bar-main">
                 <div class = "pull-left">
                     <a href = "#" class = "sideTrigger">
                      <span class = "menu-icon">
                        <img src = "images/Men.png" id = "ico-menu">
                      </span>
                      <span class = "menu-text">Menu</span>
                     </a>
                 </div>

                <!--  <h3> Best African fashion Designers</h3> -->
                  <div class="box-search">
                                     
                      <div class = "container-1">
                      <input type = "search" id = "search" placeholder = "" />
                      </div>

                      <div class="hu904">
                                   <button class = "helo6" value = "Search" name = "btgg" type = "submit">
                                    <span class = "icon"><i class ="fa fa-search"></i></span>
                                  </button>

                            </div>
                      </div>
                 </div>   <!-- Main bar -->

 </header>
   
 <!--  <div class = "pagewrapper"> 
        <div class = "pagewrapper">
         
                <div class = "content-Section">
  

                Hi everyone



                </div>   

                </div> 

  </div>     
 -->

                        <script type="text/javascript">
            // Side Menu Trigger Function
            $('a.sideTrigger').click(function() {
            $('body').toggleClass('sideOpen');
               return false;
            });

            // Close Menu Trigger Function
            $('a.closeTrigger').click(function() {
            $('body').removeClass('sideOpen');
            return false;
             });
                        </script>

</body>


</html>