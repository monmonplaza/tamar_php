<?php get_header(); ?>
    <div class="banner-content">
        <a href="<?php echo esc_url(site_url('/'))?>" class="go-back"><i class="fas fa-angle-left"></i> Back</a>
        <h1 class=""><?php the_field('page_header')?></h1>
    </div>
</div>
<?php if(have_posts()) : while(have_posts()) :the_post();
    the_content();
?>
      



<?php 
    endwhile;
    else :
        echo esc_html('No more information to load');
    endif;
    wp_reset_postdata();
?>




<?php get_footer(); ?>          