
<?php get_header(); ?>
    <div class="banner-content">
        <a href="<?php echo esc_url(site_url('/'))?>" class="go-back"><i class="fas fa-angle-left"></i> Back</a>
        <h1 class=""><?php the_field('page_header')?></h1>
    </div>
</div>

<?php 
    if(is_page('accommodations')) {
        $post_type = 'accommodation';  
    } elseif (is_page('swiss-village')) {
        $post_type = 'swiss'; 
    } elseif (is_page('activities')) {
        $post_type = 'activity'; 
    }

    $query = new WP_query(array (
        'post_type' => $post_type
    ))
?>


<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
      
      if (get_field('orientation') == 'image-content') {
        $orientation = 'image-content';
      } else {
        $orientation = 'content-image';
      }
?>

<section class="index__services  <?php echo $orientation; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6 no-padding">
                <div class="index__services__wrapper" >
                    <div class="service__content__wrapper">
                        <h2  class="block-header " ><?php the_title();?></h2>
                        <p><?php the_content(); ?></p>
                        <a href="<?php the_permalink();?>" class="btn-book"> Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 no-padding">
                <div class="index__services__wrapper  bg-tertiary">
                    <div class="slider__wrapper">
                        <div class="service__slider slider">
                            <figure >
                                <img src=" " alt="" />
                                <figcaption>
                                    <h3>asdasdas</h3 >
                                    <p>asdasdas</p>
                                </figcaption>
                            </figure>
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

<?php get_footer(); ?>