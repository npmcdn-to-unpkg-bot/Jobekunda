<?php $image_path = "images/shots/thumb/"; ?>

        <div class = "pageContainer dark" id="landing">
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
                    <a href="shots" class="norm-text"><span class="button_09 special" id="sn-button">Explore</span></a>
                  </div>
                  </div>
                </div>
                </div>

            </div>
          </section>


                <div>
                <div class="mt-row-wrapper clearfix">
            <?php
                  featured_images($dbc, $image_path);

                ?>
                 
              </div>   <!-- Feature Products Ends -->
              </div>


              <!-- <div class="about-container">
                  <div class="wrap">
                    <span class="lp-text"><h1>About MyTailor</h1></span>

                    <div class="text-09kl">
                          <p>MyTailor is a place where users can access quality designer African clothes, share with their friends and buy the products directly from the designers.</p>
                    </div>
                  </div>  
              </div> --> <!-- About Container ended -->
                
        <div id="lst-section">
          <section>
              <span class="lp-text">
                <img src="images/icons/agreement2.svg" style="height:6.25rem;">
              </span>
                <h2>DESIGNER ! LOOKING TO ADVERTISE YOUR PEODUCTS TO THE WORLD ? WE CAN HELP. CONTACT US TODAY.</h2>
                <p>MyTailor allows users to make a wardrope collection of latest trendy African Fashion dresses. Designs on this site will inspire your life. We feature latest clothing from designers all around africa. Discover style & beauty with MyTailor.</p>
          </section>

        </div>
   </div>   <!--Page Container  -->
