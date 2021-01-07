<?php get_header(); ?>
 <div class="banner-content">
     <a href="<?php echo esc_url(site_url('/')) ?>" class="go-back"><i class="fas fa-angle-left"></i> Back</a>
        <h1 class=""><?php the_field('page_header')?></h1>
    </div>
</div> 


<section class="conference__slider">
    <div class="container">
        <div id="conference-slider">
        <?php 
                $galleryArr = get_field('slider');    
                $arr =  explode(',' , $galleryArr);
                foreach($arr as $img) {
                    echo "<div class='conference__slider__item'><img src=". $img . "></div>" ;
                }
            ?>
          
        </div>
    </div>
</section>

<div class="conference__contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="conference__contact__wrapper">
                    <div class="conference__contact__content">
                        <span class="block-tag">Welcome</span>
                        <h2  class="block-header ">Conferences</h2>
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                </div>
            </div>  

            <div class="col-md-6">
                <div class="conference__contact__wrapper">
                    <div class="conference__contact__info">
                        <h3>Appointments and Enquiries</h3>
                        <ul>
                            <li>Tel: +331 58 12 66 97 / +331 58 12 66 37 </li>
                            <li>Email: info@tamar.com</li>
                        </ul>
                        <a href="#">Contact An Event Planner</a>
                        <a href="#">Download Brochure</a>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</div>

<section class="template_two_col image-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 no-padding">
                <div class="template_two_col__wrapper img-left">
                <?php 
                    $image = get_field('event_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-6 no-padding">
                <div class="template_two_col__wrapper">
                   <div class="template_two_col__content">
                   <span class="block-tag">Planning</span>
                    <h2  class="block-header ">Events</h2>
                    <p><?php echo get_field('events')?></p> 
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="conference__packages content-image">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="conference__packages__wrapper">
                <div class="conference__packages__content">
                    <span class="block-tag">Meeting and Event</span>
                    <h2  class="block-header ">Packages</h2>
                   <?php echo get_field('package')?>

                </div>
            </div>
        </div>
        
        <div class="col-md-6 no-padding">
            <div class="conference__packages__wrapper img-right">
            <?php 
                $image = get_field('package_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="conference__venue">
    <div class="container">
        <span class="block-tag">Rooms</span>
        <h2  class="block-header ">Venues</h2>
        <div class="row">

        <?php 
            $conference_query = new WP_Query(
                array(
                    'post_type' => 'wedding',
                    'meta_key' => 'wedding_category',
                    'meta_value' => 'reception'
                )
            )
        ?>

        <?php  if($conference_query->have_posts()) : while($conference_query->have_posts()) : $conference_query->the_post(); ?>

            <div class="col-md-4">
                <div class="venue__wrapper">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail( 'conference-venue', array(
                            'alt' => get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)
                        ) );
                    }?>
                    <div class="venue__content">
                        <h3><?php the_title()?></h3>
                        <ul>
                            <li> Guest Capacity: <span><?php the_field('capacity')?></span> </li>
                            <li>Floor Area: <?php the_field('floor_area')?></span></li>
                        </ul>
                        <p><?php echo the_field('conference_description'); ?></p>
                        <a href="<?php echo esc_url(site_url('contact'))?>">Make a Reservation</a>
                    </div>
                </div>
            </div>

        <?php 
            endwhile;
            else :
                echo esc_html('No more information to load');
            endif;
            wp_reset_postdata();
        ?>




        </div>
    </div>
</section>



<?php get_footer(); ?>
