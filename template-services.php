<?php 
/*
    Template Name: Services Template
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

<?php 
    if(is_page('accommodations')) {
        $post_type = 'accommodation';  
        $page = get_page_by_title( 'Accommodations' );
        $content_about = apply_filters('the_content', $page->post_content); 
    } elseif (is_page('swiss-village')) {
        $post_type = 'swiss'; 
        $page = get_page_by_title( 'Swiss Village' );
        $content_about = apply_filters('the_content', $page->post_content); 
    } elseif (is_page('facilities')) {
        $post_type = 'facility'; 
        $page = get_page_by_title( 'Facilities' );
        $content_about = apply_filters('the_content', $page->post_content); 
    }

    $query = new WP_query(array (
        'post_type' => $post_type
    ))
?>


<section class=" service__about">
        <div class="container">
            <div class="service__about-wrapper">
                <?php echo $content_about;?>
            </div>
        </div>
</section>


<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
      
      if (get_field('orientation') == 'image-content') {
        $orientation = 'image-content';
      } else {
        $orientation = 'content-image';
      }
?>



<section class="template__services  <?php echo $orientation; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6 no-padding section__image">
                <!-- <div class="index__services__wrapper" >
                    <div class="service__content__wrapper">
                        <h2  class="block-header " ></h2>
                        <p></p>
                        <a href="<?php the_permalink();?>" class="btn-book"> Learn More</a>
                    </div>
                </div> -->

                <div class="template__services__wrapper">
                    <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }?>
                </div>
            </div>
            <div class="col-md-6 no-padding section__content">
            
                <div class="template__services__wrapper">
                    <div class="template__services__content">
                        <span class="block-tag">About</span>
                        <h3 class="block-header"><?php the_title();?></h3>
                        <div class="main-text">
                            <?php echo get_the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink();?>" class="btn">Read More</a>

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