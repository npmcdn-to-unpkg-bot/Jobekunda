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

                       <div class="link-02-rt">

                  <section class="kilama-01">
                      <a class="_kilama 057_f" href="#" title="Top Collections">
                          <div class="kilama-div">
                            <div class="kilalma-ico">
                              <img class="kilama-img"  style="height:6.25rem;" src="images/icons/t-deals.svg" alt>
                            </div>
                            <div class="kilama-tit">Top Collections</div>
                            <div class="kilama-inf">Shop today's Deals.<br> Affordable limited offer</div>
                          </div>
                      </a>


                      <a class="_kilama 057_f" href="#" title="Local-designers">
                          <div class="kilama-div">
                            <div class="kilalma-ico">
                              <img class="kilama-img"  style="height:6.25rem;" src="images/icons/local.svg" alt>
                            </div>
                            <div class="kilama-tit">Local Designers</div>
                            <div class="kilama-inf">Learn about designers<br>from your area</div>
                          </div>
                      </a>

                         <a class="_kilama 057_f" href="#" title="Partner">
                          <div class="kilama-div">
                            <div class="kilalma-ico">
                              <img class="kilama-img"  style="height:6.25rem;" src="images/icons/partner.svg" alt>
                            </div>
                            <div class="kilama-tit">Become a Partner</div>
                            <div class="kilama-inf">great opportunities<br>for young businesses.</div>
                          </div>
                      </a>

                         <a class="_kilama 057_f" href="#" title="Community">
                          <div class="kilama-div">
                            <div class="kilalma-ico">
                              <img class="kilama-img"  style="height:6.25rem;" src="images/icons/community.svg" alt>
                            </div>
                            <div class="kilama-tit">Community</div>
                            <div class="kilama-inf">wide network of tailors<br>all around Africa</div>
                          </div>
                      </a>

                    <div style="clear: both;"></div>
                  </section>


                      <div class="v-090">
                      <a href="<?=base($path)?>/shots" class="norm-text"><span class="button_09" id="vp-but0">View Shots</span></a>
                      </div>

              </div><!-- short banner -->

                <div>
                <div class="mt-row-wrapper clearfix">
                <!--   <div>
                    <h1>Featured Shots</h1>
                  </div> -->
            <?php
                  /**Load featured shots**/
                  load_featured_shots($dbc, $image_path, $path, $query = 'features', $limit = 21);

                ?>
  </div>
    </div>

    <section class="mt-content-section-wrapper">
      <div class="mt-wrap-ptb clearfix">
        <div class="mt-2cols-wrap">

        </div>

        <div class="mt-2cols-wrap">
          <div class="mt-small-banner-wrapper">
            <div class="mt-small-banner"></div>
          </div>
        </div>
      </div>


    </section>
                
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