<?php $image_path = "images/shots/large/"; ?>
        
        <div class = "pageContainer dark" id="landing" data-role="page">
          <section class="hero" style="margin-top:0px;">
            <div class="cover-container">
                <div class="hero-viewport">
                  <div class="hero-viewport-image">
                    <div class="hero-content" style="">
                    <div class="mt-hero-textwrap">
                        <h1 class="mt-heading-text">MYTAILOR AFRICA</h1>
                        <h2 class="mt-subheading-text">FIND THE BEST AFRICAN DRESSES HERE.</h2>
                    </div>
                    <div class="mt-hero-button">
                    <a href="<?=base($path)?>/shots" class="norm-text"><span class="button_09 special" id="sn-button">Explore</span></a>
                  </div>
                  </div>
                </div>
                </div>
            </div>
          </section>
                <div>
                <div class="mt-row-wrapper clearfix">
            <?php
                  /**Load featured shots**/
                  load_featured_shots($dbc, $image_path, $path, $query = 'features', $limit = 21);

                ?>
  </div>
    </div>
                
        <div id="lst-section">
          <section>
              <span class="lp-text">
                <img src="<?=base($path)?>/images/icons/agreement2.svg" style="height:6.25rem;">
              </span>
                <h2>DESIGNER ! LOOKING TO ADVERTISE YOUR PRODUCTS TO THE WORLD ? WE CAN HELP. CONTACT US TODAY.</h2>
                <p>MyTailor allows users to make a wardrope collection of latest trendy African Fashion dresses. We feature latest clothing from designers all around africa. Discover style & beauty with MyTailor.</p>
          </section>
        </div>
      </div>
<!--     <div class="mt-transit-loader">
      <div class="mt-page-loader-icon">
          <div id="preloader_3"></div>
      </div>
    </div> -->