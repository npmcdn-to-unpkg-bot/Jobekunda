<?php $image_path = "images/shots/large/"; ?>
        
        <div class = "pageContainer dark" id="landing" data-role="page">
          <section class="hero" style="margin-top:0px;">
            <div class="cover-container">
                <div class="hero-viewport">
                  <div class="hero-viewport-image">
                    <div class="hero-content" style="">
                    <div class="mt-hero-textwrap">
                        <h1 class="mt-heading-text">MYTAILOR AFRICA</h1>
                        <h2 class="mt-subheading-text">GET INSPIRED BY TALENTED AFRICAN FASHION DESIGNERS.</h2>
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
                      <a class="_kilama 057_f" href="<?=base($path)?>/shots/trending" title="Trending">
                          <div class="kilama-div">
                            <div class="kilalma-ico">
                              <img class="kilama-img"  style="height:6.25rem;" src="images/icons/t-deals.svg" alt>
                            </div>
                            <div class="kilama-tit">Trending Shots</div>
                            <div class="kilama-inf">See what's trending<br>special pick for you.</div>
                          </div>
                      </a>


                      <a class="_kilama 057_f" href="<?=base($path)?>/brands/local" title="Local-designers">
                          <div class="kilama-div">
                            <div class="kilalma-ico">
                              <img class="kilama-img"  style="height:6.25rem;" src="images/icons/local.svg" alt>
                            </div>
                            <div class="kilama-tit">Local Designers</div>
                            <div class="kilama-inf">Learn about designers<br>from your area</div>
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
                      
                         <a class="_kilama 057_f" href="<?=base($path)?>/partners" title="Partners">
                          <div class="kilama-div">
                            <div class="kilalma-ico">
                              <img class="kilama-img"  style="height:6.25rem;" src="images/icons/partner.svg" alt>
                            </div>
                            <div class="kilama-tit">Become a Partner</div>
                            <div class="kilama-inf">great opportunities<br>for young businesses.</div>
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

            <?php

            $shots = mt\shots::get('featured', '', 21 );


                    foreach ($shots as $shot) :  
    ?>

    <div class ="lth-col-1 ht-col-1 all-container">
          <figure class="lth-wrapper" style="background:url('<?=base($path).'/'.$image_path . $shot->shotfilename . '.' . $shot->shotfiletype ?>');background-size: cover;">
            <a href="<?=base($path).'/shot/'. $shot->shotfilename?>" class="sp-view">
              <img src="<?=base($path).'/'.$image_path . $shot->shotfilename . '.' . $shot->shotfiletype ?>" alt="" style="display: none;">
              <div class="grid-item overlay-items">
              <figcaption>
              <span><img src="<?=base($path)?>/images/icons/search67.svg"></span>
              </figcaption>
              </div>
            </a>
          </figure>
      </div>

        <?php endforeach; ?>


                 
                
  </div>
      
            <div style="text-align: center;padding-bottom: 4em;">
              <a href="<?=base($path)?>/shots/trending" class="norm-text"><span class="button_09 special" id="sn-button">Show me more</span></a>
            </div>
        
    </div>

    <section class="mt-content-section-wrapper">
      <div class="mt-wrap-ptb clearfix">
        <div class="mt-2cols-wrap">
          <div class="mt-info-box">
            <div style="padding:2em 0;">
                <h2 class="bold-title">Designs Inspire !</h2>
            </div>

            <p class="attract-me">Inspiration comes in many ways. What you wear tells alot about you. On your next meeting, interview, every part of the Uber experience has been designed around your safety and security.</p>

            <div class="mt-call-text">
              <a href="" id="buzzle">See Classic wears <i class="mdi mdi-arrow-right-bold hvr-buzz-out" aria-hidden="true"></i></a>
            </div>
          </div>
          <div>

          </div>
        </div>

        <div class="mt-2cols-wrap mdl-cards">
          <div class="mt-small-banner-wrapper">
            <ul>
              <li>
                <div class="mt-small-banner"></div>
              </li>
              <li>
                <div class="mt-small-banner"></div>
              </li>
            </ul>
            
          </div>
        </div>
      </div>


    </section>
                
        <div class="mt-1col-wrap">
          <section class="mt-large-info-box">
            <h3 class="mt-title-white">what you like, is for you</h3>
            <p class="mt-sm-cont-text">Put the stuff that you care about right on your home screen: the latest news, the weather or a stream of your recent photos. </p>

            <a href="" style="color: #03A9F4;">check out cool stuff</a>

          </section>

          <section style="height:30em;background: #eee;">


          </section>
         
        </div>

        <div class="mt-2cols-wrap" style="height:40em;">

        </div>
      </div>