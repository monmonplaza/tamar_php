<?php 
/*
    Template Name: Wedding Template
*/
?>

<?php get_header(); ?>
    <div class="banner-content">
    <?php global $post;
        $parentId = $post->post_parent;
        $linkToParent = get_permalink($parentId);
    ?>
        <a href="<?php echo esc_url(site_url('/'))?>" class="go-back"><i class="fas fa-angle-left"></i> Back</a>
        <h1 class=""><?php the_field('page_header')?></h1>
    </div>
</div>


<section class="wedding">
    <div class="wedding__welcome">
        <h2>Welcome</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique, repellendus id perspiciatis labore autem! Totam porro nesciunt cumque magnam qui accusamus, eius distinctio.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, impedit?</p>
    </div>
</section>

<section class="ceremony">
    <div class="container">
        <div class="ceremony__header">
            <h2>Venues</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium voluptates distinctio, dignissimos commodi minus eveniet?</p>
        </div>
        <div class="ceremony__wrapper">
            <div class="ceremony__slider">
            <?php 
            $venue = new WP_query(array (
                'post_type' => 'wedding',
                'meta_key' => 'wedding_category',
                'meta_value' => 'venue'
            ));


            if($venue->have_posts()) : while($venue->have_posts()) : $venue->the_post();

          ?>

                <div class="ceremony__slider__item">
                    <div class="wrapper">
                        <?php if(has_post_thumbnail()) {
                            the_post_thumbnail('wedding-venue', array('class'=>'venue_img'));
                        }?>
                        <div class="ceremony-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/wedding_vector.png" alt="">
                            <h3><?php the_title(); ?></h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icon_down.png" alt=""  class="arrow-down">
                            <?php the_content(); ?>
                        </div>
                        <div class="overlay"></div>
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
    </div>
</section>



<?php 

$query = new WP_query(array (
        'post_type' => 'wedding',
        'meta_key' => 'wedding_category',
        'meta_value' => 'reception'
  ));

  if($query->have_posts()) : while($query->have_posts()) : $query->the_post();

  if (get_field('orientation') == 'image-content') {
    $orientation = 'image-content';
  } else {
    $orientation = 'content-image';
  }  

?>
<section class="index__services wedding__template  <?php echo $orientation; ?> child">
    <div class="container">
        <div class="row">
            <div class="col-md-6 no-padding">
                <div class="index__services__wrapper" >
                    <div class="service__content__wrapper">
                        <span class="block-tag">Reception</span>
                        <h2  class="block-header " ><?php the_title();?></h2>
                        <div class="main-text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 no-padding">
                <div class="index__services__wrapper  bg-tertiary">
                    <div class="slider__wrapper">
                        <div  id="slick__slider" class="slick__slider">
                            <?php 
                              $galleryArr = get_field('gallery');    
                              $arr =  explode(',' , $galleryArr);
                               foreach($arr as $img) {
                                    echo "<div class='slick__item'><img src=". $img . "></div>" ;
                               }
                           ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>




<?php 
    endwhile;
    else :
        echo esc_html('No more information to load');
    endif;
    wp_reset_postdata();
?>


<?php
    if(!empty(get_field('cta'))) {
        echo do_shortcode(get_field('cta'));
    }
    
?>


<?php get_footer(); ?>