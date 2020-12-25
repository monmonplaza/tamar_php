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

$landline= esc_attr(get_option('tmr_landline'));
$address= esc_attr(get_option('tmr_address'));
$email= esc_attr(get_option('tmr_email'));
$map = esc_attr(get_option('tmr_map'));
$facebook= esc_attr(get_option('tmr_facebook'));
$twitter= esc_attr(get_option('tmr_twitter'));
?>

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact__details">
                    <span class="block-tag">Message</span>
                    <h2  class="block-header ">Get in Touch</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, incidunt. Odio quis ullam similique expedita illum veniam consequuntur minima quas?</p>
                    <h3>Location/Contact</h3>
                    <ul class="contact__info"> 
                        <li><i class="fas fa-map-marker"></i> <?php echo $address; ?></li>
                        <li><i class="fas fa-phone"></i> <?php echo $landline; ?></li>
                        <li><i class="fas fa-envelope"></i> <?php echo $email; ?></li>
                    </ul>
                    <h3>Follow Us</h3>
                    <ul class="contact__social"> 
                        <li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i>  Twitter</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact__form">
                    <form action="" class="main__contact">
                        <h3>Message Us</h3>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" placeholder="Full name">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="tel" placeholder="Phone/Mobile">
                        </div>

                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea name="" placeholder="Message"></textarea>
                        </div>

                        <div class="form-group">
                           <button class="btn">Send</button>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>

    <iframe src="<?php echo $map; ?>" allowfullscreen="" aria-hidden="false" tabindex="0" class="map"></iframe>

</div>

 

<?php
    if(!empty(get_field('cta'))) {
        echo do_shortcode(get_field('cta'));
    }
    
?>
<?php get_footer(); ?>