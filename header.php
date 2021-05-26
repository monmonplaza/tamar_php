<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <?php wp_head();?>
    
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
    />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"> -->

  </head>
  <body>

  <?php
  $bgi= esc_attr(get_option('bg_image_path'));
  $page_banner = isset(get_field('page_banner')['url']) ? get_field('page_banner')['url'] : null;
  // $service_banner = get_field('service_banner')['url'];

  if(is_front_page()) {
      echo '<div class="banner" style="background-image: url('. $bgi . ')">';
  } else {
     echo '<div class="banner-page" style="background-image: url('. $page_banner .')">';
  }

    $landline= esc_attr(get_option('tmr_landline'));
    $address= esc_attr(get_option('tmr_address'));
    $email= esc_attr(get_option('tmr_email'));
    $logo = esc_attr(get_option('tmr_logo'));
    $facebook= esc_attr(get_option('tmr_facebook'));
    $twitter= esc_attr(get_option('tmr_twitter'));
  ?>
      <header>
        <div class="header-wrapper">
          <div class="header-wrapper-info">
            <ul class="social-media"> 
              <li>
                <a href="<?php echo  $facebook; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
              </li>
              <li>
                <a href="<?php echo  $twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
              </li>
              <p>Follow us </p>
            </ul>

            <ul>
              <li>
                <i class="fas fa-map-marker"></i> <?php echo  $address; ?>
              </li>
              <li>
                <i class="fas fa-envelope"></i>
                <?php echo  $email; ?>
              </li>
              <li><i class="fas fa-phone"></i>   <?php echo  $landline; ?></li>
            </ul>
          </div>
          <div class="toggle-menu"><span></span></div>

          <div class="branding">
             <a href="<?php echo esc_url(site_url('/')) ?>"> <img src="<?php echo $logo; ?>" alt="Tamar Logo" /></a>
          </div>
        </div>
      </header>

      <div class="main-menu ">
        <a id="close-menu"><i class="fas fa-plus"></i> close</a>
        <nav>  
         
          <?php
            wp_nav_menu(array(
              'theme_location' => 'primary_menu',
              'walker' => new Walker_Nav_Primary()
            ))
        ?>

        </nav> 
        

        <ul class="social-media-menu lg-only"> 
             
          <li>
            <a href="<?php echo  $facebook; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
          </li>
          <li>
            <a href="<?php echo  $twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
          </li>
          
        </ul>


        <ul class="contact-info-menu"> 
          <li>
            <i class="fas fa-map-marker"></i> <?php echo  $address; ?>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <?php echo  $email; ?>
          </li>
          <li><i class="fas fa-phone"></i><?php echo  $landline; ?></li>
        </ul>
      </div>

    

    