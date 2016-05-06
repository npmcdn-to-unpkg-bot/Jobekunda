<?php
/**
* Template Name: SideBar
* Info: This is side menu plus main navigation...
*
*/
?> 
<div class="mt-sidebar transit-4 --scroll">
  <div style="height:15em; background:#FB4164;">


  </div>
  <nav id="mt-nav-main" class="mt-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
      <h1 class="hidden">Main Navigation</h1>
      <ul class="mt-sidebar-list">

          <?php
          $group= 'public';
          main_nav($dbc, $path, $group); ?>
    </ul>            
  </nav>
  </div>
