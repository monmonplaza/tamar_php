<?php wp_footer(); ?>

<?php 
    $landline= esc_attr(get_option('tmr_landline'));
    $address= esc_attr(get_option('tmr_address'));
    $email= esc_attr(get_option('tmr_email'));
    $logo = esc_attr(get_option('tmr_logo'));
    $facebook= esc_attr(get_option('tmr_facebook'));
    $twitter= esc_attr(get_option('tmr_twitter'));
  ?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="footer-box clearfix">
          <img src="<?php echo $logo; ?>" alt="" class="float-left"/>
          <p>
            Set on over 150 magnificent acres amid numerous spectacular lakes with breathtaking views, the resort boasts World Class facilities in arguably Tasmania's most exclusive and exotic suburb. Aspect Tamar Valley Resort is perfectly located 15 minutes drive north of Launceston, and is ideally positioned to use as a base whilst exploring all that Northern Tasmania has to offer.

          </p>
          
        </div>
      </div>

      <div class="col-md-2">
        <div class="footer-box ">
          <h3>Navigation</h3>
          <nav>
            <?php 
                wp_nav_menu( array(
                  'theme_location' => 'footer_menu',
                    )
                );
            ?>
          </nav>
        </div>
      </div>

      <div class="col-md-3">
        <div class="footer-box">
          <h3>Visit Us</h3>
          <ul>
            <li>
              <h5><i class="fas fa-map-marker"></i> Address</h5>
              <span><?php echo $address; ?></span>
            </li>

            <li>
              <h5> <i class="fas fa-envelope"></i> Email</h5>
              <span><?php echo $email; ?></span>
            </li>

            <li>
              <h5><i class="fas fa-phone"></i> Contact</h5>
              <span> <?php echo $landline; ?></span>
            </li>

          </ul>
        
        </div>
      </div>

      <div class="col-md-3">
        <div class="footer-box">
          <div class="newsletter">
          <h3>NewsLetter</h3>
          <form action="" class="">
            <input type="email" placeholder="Enter Email" />
            <button>Subscribe Newsletter</button>
          </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</footer>

<section class="copyright">
  <div class="container">
    <div class="copyright-wrapper">
      <p>©<?php the_date('Y');?> Tamar Valley Resort</p>
      <ul>
        <li>Follow Us: </li>
        <li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook"></i></a></li>
        <li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a></li>
      </ul>
    </div>
  </div>
</section>
