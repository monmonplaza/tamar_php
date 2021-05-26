<?php get_header(); ?>


<?php
    $isVideoBg= esc_attr(get_option('video_background'));
    $tour= esc_attr(get_option('video_tour_path'));
    $vbgp= esc_attr(get_option('video_background_path'));
    
    if(@$isVideoBg == 1) { ?>
    <div class="video-overlay"></div>
    <video id="bg-video" width="100%" autoplay loop muted plays-inline>
      <source src="<?php echo $vbgp; ?>" type="video/mp4">
    </video>
<?php } ?>

        <div class="banner-content  ">
          <h1 class="">Tasmania's <br>most exclusive <br>and exotic suburb.</h1>
          <ul>
            <li><a href="#" class="btn-book">Book Now</a></li>
            <li><a href="#" class="btn-tour" id="btn-tour"> <span><i class="fas fa-play"></i></span> Watch Tour  </a></li>
          </ul>
        </div>
    <div class="video__tour resort__tour">
      <iframe 
        src="https://www.youtube.com/embed/<?php echo $tour; ?>?controls=1"
        frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
      </iframe>    
    </div>
  
</div>

<?php 
 

    $metaArgs = array(
              'relation' => 'OR',
              array(
                  'key' => 'services_category',
                  'value' => 'accommodations',
                  'compare' => '='
              ),

                array(
                  'key' => 'services_category',
                  'value' => 'swiss-village',
                  'compare' => '='
              ),

              array(
                'key' => 'services_category',
                'value' => 'facilities',
                'compare' => '='
            ),
          );

    $services = new WP_Query(array(
      'post_type'         =>  'service',
      'posts _per_page'   =>  1,
      'meta_key'          =>  'services_category',
      'meta_query'        =>  $metaArgs
    ))
?>

<?php if($services->have_posts()) : while($services->have_posts()) : $services->the_post(); 

      if(get_field('orientation') == 'image-content') {
        $orientation = 'image-content';
      } else {
        $orientation = 'content-image';
      }


?>
<section class="index__services  <?php echo $orientation; ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-6 no-padding">

          <?php 
              $metaValue = get_field('services_category');
                if($metaValue == 'accommodations') {
                  $postType = 'accommodation'  ;
                } elseif ($metaValue == 'swiss-village') {
                  $postType = 'swiss' ;
                } elseif ($metaValue == 'facilities') {
                  $postType = 'facility';
                }
            ?>


            <div class="index__services__wrapper" >
              <div class="service__content__wrapper">
               <span class="block-tag">We Offer</span>
               <h2  class="block-header "><?php the_title(); ?></h2>
               <div class="main-text"><?php echo get_the_content();?></div>
                
              <ul>
                <?php $relatedAccommodations = get_field('services_sub_category'); 
                       foreach($relatedAccommodations as $accommodation) : ?>
                  <li><a href="<?php echo get_the_permalink($accommodation) ?>"><i class="fas fa-angle-right"></i> <?php echo get_the_title($accommodation) ?></a>  </li>
                <?php endforeach; ?>
              </ul>
                
            

              <a href="<?php echo site_url($metaValue) ?>" class="btn-book"> Learn More</a>
          
            </div>
            </div>
          </div>
          <div class="col-md-6 no-padding">
            <div class="index__services__wrapper  bg-tertiary">
              <div class="slider__wrapper index">
                <div class="service__slider slider">
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
        </div>
      </div>
    </div>
  </section>

  <?php endwhile;
                  else: echo esc_html('No More Services');
                endif;
              wp_reset_postdata();
          ?> 


<section class="other-services">
  <div class="container-fluid">
    <div class="row">
<?php
    $events = new WP_Query(array(
      'post_type'         =>  'event',
      'posts _per_page'   =>  3,
    

      
    )) ?>
    <?php if($events->have_posts()) : while($events->have_posts()) : $events->the_post(); ?>


      <div class="col-md-4 no-padding">
        <div class="other-services-box">
          <div class="other-services-box-overlay"></div>
          <div class="other-services-box-img">
              <?php the_post_thumbnail( 'index-thumbnail' ); ?>
          </div>
          <div class="other-services-box-content text-center">
            <div class="text-wrapper-header">
              <span><?php the_field('event_sub_header')?></span>
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="text-wrapper">
              <p>
              <?php the_field('event_description')?>
              </p>
              <a href="<?php echo esc_url(site_url()) . '/' .  $post->post_name;
  ?>" class="btn-other-services">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile;
                  else: echo esc_html('No More Services');
                endif;
              wp_reset_postdata();
          ?> 

    
    </div>
  </div>
</section>          


    <section class="testimonial py-7 ">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12">
            <div class="testimonial-wrapper">
              <h3 class="text-center primary-header">Testimonial</h3>
              <div class="testimonial-slider bg-testimonial-view">

              <?php 
                $testimonial = new WP_query(
                  [
                    'post_type'     =>  'testimonial'
                  ]
                )
              ?>

              <?php if($testimonial->have_posts()) : while($testimonial->have_posts()) : $testimonial->the_post() ?>
                <div class="testimonial-slider-item ">   
                  <div class="testimonial-slider-item-box ">
                      <h3><?php the_field('highlight_text')?></h3>
                      <p>
                        <?php the_content();?>
                      </p>
                      <ul>
                     <?php 
                      $rating = get_field('rating') ;
                          for($i = 1; $i <= $rating; $i++) {
                            echo('<li><i class="fas fa-star"></i></li>');
                          }
                      ?>
                        
                        
                      </ul>
                      <?php if(has_post_thumbnail()) {
                        the_post_thumbnail('testimonial-thumbnail');
                      }
                      ?>
                      <h4><?php the_title();?></h4>
                  </div>
                </div>
              <?php endwhile;
                else : 
                  echo esc_html('No more testimonials');
                endif;

                wp_reset_postdata()
              ?>
           

              </div>
            </div>
          </div>
 
        </div>
      </div>
    </section>



    <?php
      $offer = new WP_Query(array(
        'pagename' => 'offers'
      )); ?>
 <?php if($offer->have_posts()) : while($offer->have_posts()) : $offer->the_post(); ?>

    <section class="offers">
      <div class="container">
        <div class="row">
            <div class="col-md-8 no-padding">
                <div class="offers__img">
                 <?php if(has_post_thumbnail()) {
                   the_post_thumbnail();
                 }?> 
                </div>
            </div>

            <div class="col-md-4  no-padding">
                <div class="offers__content">
                  <div class="offers__content__wrapper">
                    <?php the_content();?>
                    <a href="<?php echo esc_url(site_url('/offers')); ?>"> View Offers</a>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <?php endwhile;
                  else: echo esc_html('No More Offerings');
                endif;
              wp_reset_postdata();
          ?> 





    <?php get_footer(); ?>          