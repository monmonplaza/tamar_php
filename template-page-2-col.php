<?php 
/*
    Template Name: 2-column layout
*/
?>

<?php get_header(); ?>
<div class="banner-content">
     <a href="<?php echo esc_url(site_url('/')) ?>" class="go-back"><i class="fas fa-angle-left"></i> Back</a>
        <h1 class=""><?php the_field('page_header')?></h1>
    </div>
</div> 


<section class="template__page">
    <div class="container">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
   

    <div class="row">
        <div class="col-md-6 no-padding ">
            <div class="template__page__wrapper">
                <div class="template__services__content">
                <span class="block-tag">About</span>
                <h3 class="block-header"><?php the_title(); ?></h3>
                    <div class="main-text">
                        <?php get_the_content(); ?>
                    </div>
                </div>
            </div>
        </div>


    <div class="col-md-6 no-padding">
                <div class="template__page__wrapper">
                    <img src="http://localhost/tamar/wp-content/uploads/2020/11/pedal_car-300x181.jpg" alt="" width="300" height="181" class="alignnone size-medium wp-image-280" />
                </div>
        </div>
    </div>  
    <?php 
    endwhile;
        else :
            echo esc_html('No more information to load');
        endif;

    ?>
    </div>
</section>

<?php get_footer(); ?>
