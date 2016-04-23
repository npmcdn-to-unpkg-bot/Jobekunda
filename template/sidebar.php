<?php
/**
* Template Name: SideBar
* Info: This is side menu plus main navigation...
*
*/
?> 
<div class="mt-sidebar transit-4">
  <div style="height:15em; background:#30353A;">


  </div>
  <nav id="mt-nav-main" class="mt-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
      <h1 class="hidden">Main Navigation</h1>
      <ul class="mt-sidebar-list">

          <?php
          $owner= 'public';
          main_nav($dbc, $path, $owner); ?>
    </ul>            
  </nav>
  </div>
