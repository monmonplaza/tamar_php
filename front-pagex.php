<?php get_header(); ?>

    <div class="banner-content  ">
        <!-- <img src="./images/vector.png" alt="" /> -->
    <h1 class="">Tasmania's <br>most exclusive <br>and exotic suburb.</h1>
    <!-- <p>
        Set on over numerous spectacular lakes with breathtaking views, the
        resort boasts World Class facilities in arguably Tasmania's most
        exclusive and exotic suburb.
    </p> -->
    <a href="#" class="btn">Book Now</a>
    </div>
</div>


<?php 
    $services = new WP_Query(array(
      'post_type'         =>  'service',
      'posts _per_page'   =>  1,
      'meta_key'          =>  'services_category',
      'meta_value'        =>  'accommodations'

      
    ))
?>
<section class="index-accomodation">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            
            <div class="block-content py-7 pr-7 wow slideInUp" >
            <?php if($services->have_posts()) : while($services->have_posts()) : $services->the_post(); ?>

              <?php 
                  $obj = get_post_type_object( 'tamar_accommodation' ); //use to get the label of the post type
                  echo $obj->labels->singular_name; // output nito e yung sa label na singular
           
              ?>
              <h2  class="block-header " ><?php the_title(); ?></h2>
                <?php the_content();?>

              <ul>
       
                
                <?php $relatedAccommodations = get_field('services_sub_category'); 
                  
                foreach($relatedAccommodations as $accommodation) : ?>

                  <li><a href="<?php echo get_the_permalink($accommodation) ?>"><i class="fas fa-angle-right"></i> <?php echo get_the_title($accommodation) ?></a>  </li>
                
                <?php endforeach; ?>
              </ul>

              <a href="<?php echo get_post_type_archive_link('accommodation'); ?>" class="btn-book"> Learn More</a>

              <?php endwhile;
                  else: echo esc_html('No More Services');
                endif;
              wp_reset_postdata();
          ?> 
            </div>
          </div>
          <div class="col-md-5 no-padding">
            <div class="block-img bg-tertiary py-10">
              <div class="slider-accomodation slider">

              <?php 
                $accommodationSlider = new WP_Query(array(
                  'post_type'         =>  'accommodation',
                  'posts _per_page'   =>  -1,
                ));
              ?>

            <?php if($accommodationSlider->have_posts()) : while($accommodationSlider->have_posts()) : $accommodationSlider->the_post(); ?>

              <figure >
                <img src=" <?php echo get_field('slider_image')['url']?>" alt="" />
                <figcaption>
                  <h3><?php the_title(); ?></h3 >
                  <p>
                  <?php the_field('slider_description')?>
                  </p>
                 
                </figcaption>
              </figure>

           
              <?php endwhile;
                  else: echo esc_html('No more accommodation type');
                endif;
              wp_reset_postdata();
          ?> 
            </div>
            </div>
          </div>
          <div class="col-md-1 bg-tertiary no-padding"></div>
        </div>
      </div>
</section>




<section class="index-swiss">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1 bg-tertiary no-padding"></div>
          <div class="col-md-5 no-padding order-2 bg-tertiary">
            <div class="block-img  py-10">
              <div class="slider-swiss slider">
              <?php 
                $ssSlider = new WP_Query(array(
                  'post_type'         =>  'swiss',
                  'posts _per_page'   =>  -1,
                ));
              ?>

            <?php if($ssSlider->have_posts()) : while($ssSlider->have_posts()) : $ssSlider->the_post(); ?>

              <figure >
                <img src=" <?php echo get_field('slider_image')['url']?>" alt="" />
                <figcaption>
                  <h3><?php the_title(); ?></h3 >
                  <p>
                  <?php the_field('slider_description')?>
                  </p>
                 
                </figcaption>
              </figure>

           
              <?php endwhile;
                  else: echo esc_html('No more accommodation type');
                endif;
              wp_reset_postdata();
          ?> 
            </div>
            </div>
          </div>

          <div class="col-md-5 order-1">
          <?php 
              $swiss_args = new WP_Query(array(
                'post_type'         =>  'service',
                'posts _per_page'   =>  1,
                'meta_key'          =>  'services_category',
                'meta_value'        =>  'swiss_village'

                
              ))
          ?>
            <div class="block-content py-7 pr-7  wow slideInUp">
            <?php if($swiss_args->have_posts()) : while($swiss_args->have_posts()) : $swiss_args->the_post(); ?>

              <h2  class="block-header " ><?php the_title(); ?></h2>
                <?php the_content();?>

              <ul>
              <?php $relatedSwiss = get_field('services_sub_category'); 
                  if ($relatedSwiss) {
                    foreach($relatedSwiss as $swiss) : ?>
  
                      <li><a href="<?php echo get_the_permalink($swiss) ?>"><i class="fas fa-angle-right"></i> <?php echo get_the_title($swiss) ?></a>  </li>
                    
                    <?php endforeach; 
                   
                  }
                    ?>
                  
                
              </ul>

              <a href="#" class="btn-visit"> Visit us</a>

              <?php endwhile;
                  else: echo esc_html('No More swiss village');
                endif;
              wp_reset_postdata();
          ?> 
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
    </div>
</section>

<section class="index-accomodation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
            <?php 
              $activity_args = new WP_Query(array(
                'post_type'         =>  'service',
                'posts _per_page'   =>  1,
                'meta_key'          =>  'services_category',
                'meta_value'        =>  'activities'

                
              ))
          ?>
            <div class="block-content py-7 pr-7 wow slideInUp">
            <?php if($activity_args->have_posts()) : while($activity_args->have_posts()) : $activity_args->the_post(); ?>

                <h2  class="block-header " ><?php the_title(); ?></h2>
                <?php the_content();?>

              <ul>
              <?php $relatedActivity = get_field('services_sub_category'); 
                  if ($relatedActivity) {
                    foreach($relatedActivity as $activity) : ?>
  
                      <li><a href="<?php echo get_the_permalink($activity) ?>"><i class="fas fa-angle-right"></i> <?php echo get_the_title($activity) ?></a>  </li>
                    
                    <?php endforeach; 
                   
                  }
                    ?>
                  
                
              </ul>

                

                <a href="#" class="btn-book"> Visit Us</a>

                <?php endwhile;
                  else: echo esc_html('No More swiss village');
                endif;
              wp_reset_postdata();
          ?> 
            </div>
            </div>
            <div class="col-md-5 no-padding">
            <div class="block-img bg-tertiary py-10">
                <div class="slider-activities slider" >
                <?php 
                $activitySlider = new WP_Query(array(
                  'post_type'         =>  'activity',
                  'posts _per_page'   =>  -1,
                ));
              ?>

                <?php if($activitySlider->have_posts()) : while($activitySlider->have_posts()) : $activitySlider->the_post(); ?>

                  <figure >
                    <img src=" <?php echo get_field('slider_image')['url']?>" alt="" />
                    <figcaption>
                      <h3><?php the_title(); ?></h3 >
                      <p>
                      <?php the_field('slider_description')?>
                      </p>
                    
                    </figcaption>
                  </figure>

              
                  <?php endwhile;
                      else: echo esc_html('No more activity type');
                    endif;
                  wp_reset_postdata();
              ?> 

            </div>
            </div>
            </div>
            <div class="col-md-1 bg-tertiary no-padding"></div>
        </div>
    </div>
</section>


<section class="other-services">


<!-- LUMA TO -->

<!-- <section class="index-accomodation ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5 <?php echo $orientation; ?>">
            
            <div class="block-content py-7 pr-7 wow slideInUp" >

            <?php 
              $metaValue = get_field('services_category');
                if($metaValue == 'accommodations') {
                  $postType = 'accommodation'  ;
                } elseif ($metaValue == 'swiss_village') {
                  $postType = 'swiss' ;
                } elseif ($metaValue == 'activities') {
                  $postType = 'activity';
                }
            ?>
     

              <?php 
                  $obj = get_post_type_object( 'tamar_accommodation' ); //use to get the label of the post type
                  echo $obj->labels->singular_name; // output nito e yung sa label na singular
           
              ?>
              <h2  class="block-header " ><?php the_title(); ?></h2>
                <?php the_content();?>
              <ul>
                <?php $relatedAccommodations = get_field('services_sub_category'); 
                       foreach($relatedAccommodations as $accommodation) : ?>
                  <li><a href="<?php echo get_the_permalink($accommodation) ?>"><i class="fas fa-angle-right"></i> <?php echo get_the_title($accommodation) ?></a>  </li>
                <?php endforeach; ?>
              </ul>

              <a href="<?php echo get_post_type_archive_link($postType) ?>" class="btn-book"> Learn More</a>

            
            </div>
          </div>
          <div class="col-md-5 no-padding">
            <div class="block-img bg-tertiary py-10">

              <div class="slider-accomodation slider">

              <?php 
                $slider = new WP_Query(array(
                  'post_type'         =>   $postType,
                  'posts _per_page'   =>  -1,
                ));
              ?>

            <?php if($slider->have_posts()) : while($slider->have_posts()) : $slider->the_post(); ?>

              <figure >
                <img src=" <?php echo get_field('slider_image')['url']?>" alt="" />
                <figcaption>
                  <h3><?php the_title(); ?></h3 >
                  <p>
                  <?php the_field('slider_description')?>
                  </p>
                 
                </figcaption>
              </figure>

           
              <?php endwhile;
                  else: echo esc_html('No more accommodation type');
                endif;
              wp_reset_postdata();
          ?> 
            </div>
            </div>
          </div>
          <div class="col-md-1 bg-tertiary no-padding"></div>
        </div>
      </div>
</section>
<?php endwhile;
                  else: echo esc_html('No More Services');
                endif;
              wp_reset_postdata();
          ?>  -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 no-padding">
            <div class="other-services-box">
              <div class="other-services-box-overlay"></div>
              <div class="other-services-box-img">
                <img src="./images/other-wedding.jpg" alt="" />
              </div>
              <div class="other-services-box-content text-center">
                <div class="text-wrapper-header">
                  <span>Event</span>
                  <h3>Weddings</h3>
                </div>
                <div class="text-wrapper">
                  <p>
                    This is a very exciting time, and our passionate, dedicated
                    team are here and ready to work closely with you to create
                    an unforgettable celebration.
                  </p>
                  <a href="#" class="btn-other-services">Learn More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 no-padding">
            <div class="other-services-box">
              <div class="other-services-box-overlay"></div>
              <div class="other-services-box-img">
                <img src="./images/other-conference.jpg" alt="" />
              </div>
              <div class="other-services-box-content text-center">
                <div class="text-wrapper-header">
                  <span>Meeting</span>
                  <h3>Confenrence</h3>
                </div>
                <div class="text-wrapper">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo eius molestias provident inventore dolor libero
                    aperiam perferendis totam a. Libero.
                  </p>
                  <a href="#" class="btn-other-services">Learn More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 no-padding">
            <div class="other-services-box">
              <div class="other-services-box-overlay"></div>
              <div class="other-services-box-img">
                <img src="./images/other-dining.jpg" alt="" />
              </div>
              <div class="other-services-box-content text-center">
                <div class="text-wrapper-header">
                  <span>Restaurant</span>
                  <h3>Dining</h3>
                </div>
                <div class="text-wrapper">
                  <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Consequatur expedita. Vitae obcaecati odio ex ut placeat
                    autem voluptatum sequi dolores optio!
                  </p>
                  <a href="#" class="btn-other-services">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="testimonial py-7">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="testimonial-wrapper">
              <h3 class="text-center primary-header">Testimonial</h3>
              <div class="testimonial-slider">
                <div class="testimonial-slider-item bg-testimonial-view">
                  <div class="testimonial-slider-item-box ">
                    <h3>"Amazing Room View"</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Praesentium autem voluptatem harum, eligendi voluptas
                      dolores veniam atque! Aspernatur, eum exercitationem!
                    </p>
                    <ul>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                    <img src="./images/thumbnail.jpg" alt="" />
                    <h4>Jane Doe</h4>
                  </div>
                </div>
                <div class="testimonial-slider-item bg-testimonial-dining">
                  <div class="testimonial-slider-item-box ">
                    <h3>"Amazing food, I love it!!"</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Praesentium autem voluptatem harum, eligendi voluptas
                      dolores veniam atque! Aspernatur, eum exercitationem!
                    </p>
                    <ul>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                    <img src="./images/thumbnail.jpg" alt="" />
                    <h4>Jane Doe</h4>
                  </div>
                </div>
                <div class="testimonial-slider-item bg-testimonial-conference">
                  <div class="testimonial-slider-item-box ">
                    <h3>"Amazing Room View"</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Praesentium autem voluptatem harum, eligendi voluptas
                      dolores veniam atque! Aspernatur, eum exercitationem!
                    </p>
                    <ul>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                    </ul>
                    <img src="./images/thumbnail.jpg" alt="" />
                    <h4>Jane Doe</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </section>


    <section class="offer-special py-7">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="offer-special-wrapper">
            <h3 class="primary-header text-center">Offers & Specials</h3>
            <div class="row">
              <div class="col-md-4">
                <div class="news-box">
                  <div class="news-box-img">
                    <img src="./images/news-1.jpg" alt="" />
                  </div>
                  <div class="news-box-content text-center">
                  <div>
                    <h3>Wicked Wednesday Deals</h3>
                    <p class="text-left">
                      Watch out for our Wicked Wednesday’s. Each Wednesday
                      morning at 8am we release a sale, via email to our
                      subscribers. We will have great offers coming your way on
                      accommodation....
                    </p>
                  </div>
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="news-box">
                  <div class="news-box-img">
                    <img src="./images/news-2.jpg" alt="" />
                  </div>
                  <div class="news-box-content text-center">
                   <div>
                    <h3>Deal Thief</h3>
                    <p class="text-left">
                      We have partnered with Deal Thief to bring their members
                      the very best deals. Simply sign up to one of their
                      membership packages and enjoy heavily discounted rates.
                    </p>
                  </div>
                    <a href="#">Read More</a>
                  </div>
                </div>  
              </div>
              <div class="col-md-4">
             
                <div class="news-box">
                  <div class="news-box-img">
                    <img src="./images/news-3.jpg" alt="" />
                  </div>
                  <div class="news-box-content text-center">  
                    <div>
                    <h3>Grindelwald Christmas Spectacular</h3>  
                    <p class="text-left">
                      The Grindelwald Twilight Market has been put on steroids
                      and is now being hailed as the Grindelwald Christmas  
                      Spectacular!
                    </p>
                  </div>
                    <a href="#">Read More</a>
                  </div>
                </div>


              
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </section>



    <?php get_footer(); ?>          