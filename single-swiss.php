<?php get_header();
$top_page_url = str_replace('archives/', '',get_post_type_archive_link('swiss'));
?>
<div class="banner-content">
     <a href="<?php echo $top_page_url ?>" class="go-back"><i class="fas fa-angle-left"></i> Back</a>
        <h1 class=""><?php the_field('page_header')?></h1>
    </div>
</div> 



<section class="single__main">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
        
        <?php if(have_posts()) : while(have_posts()) : the_post();?>
                <div class="wrapper__swiss-single">
                    <?php 
                       	global $post;
                           // 						echo $post->ID;
                   if($post->ID != 340) { ?> 
                    <div class="swiss__img">
                        <?php if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        }?>
                    </div>

                    <div class="swiss_content">
                        <span class="block-tag">Grindelwald</span>
                        <h3><?php the_title();?></h3>
                        <div class="main-text">
                        <?php the_content();?>
                        <a href="<?php esc_url(site_url('/contact')); ?>">Contact</a>
                        </div>
                    </div>
                       <?php } else {
                          echo do_shortcode('[activity_list post_type="activity"]');
                       }

                    ?>

                    
                </div>

        

                <div class="operation__details">
                    <h3>Operation Details</h3>
                    <h4><?php  the_field('hours')?></h4>
                    <p><?php the_field('note')?></p>
                    <div class="social__media">
                    <h3>Like Us</h3>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href=""><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href=""><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                    </div>
                </div>
           <?php endwhile;
        endif;
        ?>
        </div>

        <div class="col-md-2">
            <aside class="single__sidebar">
            <h3>Swiss Village</h3>
                <ul>


                <?php 
                    $query = New WP_query(array(
                        'post_type'         => 'swiss',
                        'posts_per_page'    =>  -1
                    ));

                if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                    <li><a href="<?php the_permalink()?>"> <?php the_title(); ?></a></li>
                  <?php  endwhile;
                endif;
                ?>
                </ul>
            </aside>
        </div>
      </div>
    </div>
</section>

<?php
if(have_posts()) : while(have_posts()) : the_post();
    if(!empty(get_field('cta'))) {
        echo do_shortcode(get_field('cta'));
    }
        endwhile;
    endif;
?>


<?php get_footer(); ?>