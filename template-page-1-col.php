<?php 
/*
    Template Name: 1-column
*/
?>

<?php get_header(); ?>
<div class="banner-content">
     <a href="<?php echo esc_url(site_url('/')) ?>" class="go-back"><i class="fas fa-angle-left"></i> Back</a>
        <h1 class=""><?php the_field('page_header')?></h1>
    </div>
</div> 


<section class="template">
    <div class="container">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="template-grid">
            <div class="template-empty">

            </div>
           
            <div class="template-main">
               

                <div class="template-main-body">
                    <div class="template-main-body-grid">
                        <div class="template-gobackhome">
                            <ul>
                                <li>Go back to</li>
                                <li><a href="#">Home</a></li>
                            </ul>
                        </div>
                        <div class="body-wrapper">
                        <div class="template-main-header">
                    <h2 class="block-header"><?php the_title(); ?></h2> 
                </div>
                            <?php echo get_the_content(); ?>

                            
                        </div>  

                        <div class="template-socialmedia">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    
                            </ul>
                        </div>
                    </div>
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

<section>
    <?php 
        $isAddContact = get_field('add_contact');
        if($isAddContact) {
            echo do_shortcode( '[cta slug="contact" bg_image ="http://localhost/tamar/wp-content/uploads/2020/11/pool.jpg" header="Reservation and Booking" body="Please call on the day of your planned visit to check availability to avoid disappointment" btn_label="Check for Availability" ] ' );
        }
    ?>
</section>



<?php get_footer(); ?>
