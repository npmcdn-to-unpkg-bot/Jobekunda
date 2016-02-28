<?php
/**
* Template Name: SideBar
* Info: This is side menu plus main navigation...
*
*/
?> 
<div class="mt-sidebar transit-4">
  <nav id="mt-nav-main" class="mt-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
      <h1 class="hidden">Main Navigation</h1>
      <div class="mt-navAction-wrapper">
      <a class="closeTrigger"><span class="icon-close">X</span></a>
      </div>
  <ul class="mt-sidebar-list">
  <?php main_nav($dbc, $path); ?>
</ul>
  <div class="mt-smallnav-wrapper">
    <p><a href="#" class="mt-smallnav-link">MEN</a></p>
    <p><a href="#" class="mt-smallnav-link">WOMEN</a></p>
    <p><a href="#" class="mt-smallnav-link">KIDS</a></p>
    <p><a href="#" class="mt-smallnav-link">HOTTEST</a></p>
    <p><a href="#" class="mt-smallnav-link">Career</a></p>
    <p><a href="#" class="mt-smallnav-link">Partenrs</a></p>
  </div>             
  </nav>
  </div>
