<?php

function nav_main($dbc, $pageid){
	 $stmt = $dbc->prepare("SELECT * FROM pages WHERE pageLabel <> '' ");
          $stmt->execute();
             while ($nav = $stmt -> fetch()) { ?>
                    <li<?php if ($nav['pageID'] == $pageid) {echo ' class="mt-list-active"' ;} ?>><a href="<?=$nav['pageLabel']; ?>" class="mt-sidebar-link btn"><?=$nav['pageLabel'];?></a></li><?php }        
}


   function sidebar_data($user_data){
        if(!isset($_SESSION['user_id'])){ ?>
                    <a href="signup.php" class="signupSideM">Sign up</a>
                    <a href="login.php" class="signinSideM login">Member</a>
                </div>
       <?php }else{ ?>
             <a href="logout.php" class="signupSideM">Log out</a>
         </div>
             <section class="nav-profile">
             <a href="#" class="nav-pro-elemnts">
             <img src="images/profilepix/place-holder.png">
             <h3><?=$user_data['fullname'];?></h3></a>
            </section>
                        <?php }
}


       function header_data(){
            if(isset($_SESSION['user_id'])){?> 

             <section class="header-notification-wrapper">
                <ul class="header-notification">
                    <li   id="notification_li">
                        <a href="#" class="notification-items" id="notificationLink">
                            <i class="fa fa-bell fa-2x"></i>
                            <span id="notification_count">3</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="notification-items">
                            <i class="fa fa-comment fa-2x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="notification-items">
                            <i class="fa fa-shopping-cart fa-2x"></i>
                        </a>
                    </li>
                </ul>
                <div class="bar-profile-image">
                    <a href="#"><img src="images/profilepix/11698517_10205466839968531_5750592294516276713_n.jpg" style="width: 40px;"></a>
                </div>
            </section>

        <?php }
   }