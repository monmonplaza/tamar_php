<?php get_header(); ?>
 <div class="banner-content">
     <a href="<?php echo esc_url(site_url('/')) ?>" class="go-back"><i class="fas fa-angle-left"></i> Back</a>
        <h1 class=""><?php the_field('page_header')?></h1>
    </div>
</div> 


<section class="template_two_col image-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 no-padding">
                <div class="template_two_col__wrapper img-left">
                <?php 
                    $image = get_field('feature_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-md-6 no-padding">
                <div class="template_two_col__wrapper">
                   <div class="template_two_col__content">
                   <span class="block-tag"><?php echo get_field('sub_header'); ?></span>
                    <h2  class="block-header "><?php echo get_field('main_header'); ?></h2>
                    <p><?php echo get_the_content(); ?></p> 
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dining__menu">
    <div class="container">
        <div class="dining__menu__header">
            <span class="block-tag">Must Try</span>
            <h2  class="block-header ">Our Menu</h2>            
        </div>

        <div class="food__nav">
            <ul>
                <?php 
                    $terms = get_terms( array(
                        'taxonomy' => 'food_category',
                        'hide_empty' => false,
                    ) );
                    
                    foreach ( $terms as $term ) {
                        $term_link = get_term_link( $term );
                        echo '<li class="food__nav__item" data-id ='. $term->term_id .'>'. $term->name  . '</li>';
                    }
                ?>      
            </ul>
        </div>

        <div class="food__content">
            <div class="food__content__wrapper">
               
            </div>        
        </div>
        
     </div>
</section>


<?php get_footer(); ?>

<script>
getMenu()
    
    function getMenu() {
        fetch('http://localhost/tamar/wp-json/wp/v2/dining_menu?food_category=21')
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.log('something happened'))
    }


    function createMenu(data) {

    }

</script>