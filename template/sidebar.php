<div class="mt-sidebar transit-4">
  <nav id="mt-nav-main" class="mt-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
      <h1 class="hidden">Main Navigation</h1>
        <div class="mt-navAction-wrapper">
          <a class="closeTrigger"><span class="icon-close">X</span></a>
          <?php sidebar_data($user_data); ?>

      <ul class="mt-sidebar-list">
          <?php nav_main($dbc, $pageid); ?>
          <li><a href="#" class="mt-sidebar-link btn">Brands</a></li>
          <li><a href="#" class="mt-sidebar-link btn">Trending</a></li>
          <li><a href="#" class="mt-sidebar-link btn">Help Center</a></li>
      </ul>
      <div class="mt-smallnav-wrapper">
        <p><a href="#" class="mt-smallnav-link">Shipment</a></p>
        <p><a href="#" class="mt-smallnav-link">Business</a></p>
        <p><a href="#" class="mt-smallnav-link">Be a partner</a></p>
        <p><a href="#" class="mt-smallnav-link">African Fashion</a></p>
        <p><a href="#" class="mt-smallnav-link">Career</a></p>
        <p><a href="#" class="mt-smallnav-link">Partenrs</a></p>
      </div>             

 </nav>
</div>