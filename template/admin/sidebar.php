    <div class="mt-sidebar transit-4">
      <nav id="mt-nav-main" class="mt-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <h1 class="hidden">Main Navigation</h1>
          <div class="actionsMain">
            <a class="closeTrigger"><span class="icon-close">X</span></a>
            <a href="logout.php" class="signupSideM">Log out</a>
          </div>

          <section class="nav-profile">
            <a href="#" class="nav-pro-elemnts">
            <img src="images/profilepix/11698517_10205466839968531_5750592294516276713_n.jpg">
            <h3>Jobizzness Watumad</h3>
            </a>
          </section>
          <ul class="mt-sidebar-list">
          <?php
          $owner= 'admin';
          main_nav($dbc, $path, $owner); ?>
              </ul>
              
     </nav>
   </div>