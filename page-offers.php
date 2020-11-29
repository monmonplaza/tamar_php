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
  $query = new WP_query(array (
    'post_type' => 'offer'
  ));

if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
      
      if (get_field('orientation') == 'image-content') {
        $orientation = 'image-content';
      } else {
        $orientation = 'content-image';
      }
?>

<section class="events <?php echo $orientation; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6 events__image">
                <?php if(has_post_thumbnail()) {
                    the_post_thumbnail('offers-lg');
                }?>
            </div>

            <div class="col-md-6">
                <div class="events__content">
                <span class="block-tag">Deals</span>
                        <h3 class="block-header"><?php the_title();?></h3>
                        <div class="main-text">
                            <?php echo get_the_content(); ?>
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