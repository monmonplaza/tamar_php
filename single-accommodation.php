<?php get_header(); 
$top_page_url = str_replace('archives/', '',get_post_type_archive_link('facility'));

?>
<div class="banner-content">
     <a href="<?php echo $top_page_url ?>" class="go-back"><i class="fas fa-angle-left"></i> Back</a>
        <h1 class=""><?php the_field('page_header')?></h1>
    </div>
</div> 
<!-- END OF BANNER -->
<?php
    global $post;
    
    $post_slug = $post->post_name;

    if($post_slug == 'hotel') {
        $postType = 'room_type';
        $label = "Hotel";
    } elseif($post_slug == 'chalets-family') {
        $postType = 'chalets-family';
        $label = "Chalets & Family";
    } elseif($post_slug == 'villas-cabin') {
        $postType = 'villas-cabin';
        $label = "Villas & Cabin";
    } 


  $query = new WP_query(array (
        'post_type' => $postType
  ));

  if($query->have_posts()) : while($query->have_posts()) : $query->the_post();

  if (get_field('orientation') == 'image-content') {
    $orientation = 'image-content';
  } else {
    $orientation = 'content-image';
  }  

?>



<section class="index__services  <?php echo $orientation; ?> child">
    <div class="container">
        <div class="row">
            <div class="col-md-6 no-padding">
                <div class="index__services__wrapper hotel-type" >
                    <div class="service__content__wrapper">
                        <span class="block-tag"><?php echo $label; ?></span>
                        <h2  class="block-header " ><?php the_title();?></h2>
                        <div class="amenities">

                            <div class="main-text">
                            <?php the_content(); ?>

                            </div>
          
                        </div>
                     
                        <div class="room__tabs">
                            <h3>Room facts</h3>
                            <div class="room__tabs__nav">
                                <ul>
                                    <li class="tab-rm isActive" id="tab-<?php echo $post->ID ?>-1"><a href="#">About</a></li>
                                    <li class="tab-rm " id="tab-<?php echo $post->ID ?>-2"><a href="#">Info</a></li>
                                    <li class="tab-rm " id="tab-<?php echo $post->ID ?>-3"><a href="#">Book Now</a></li>
                                </ul>
                            </div>

                            <div class="room__tabs__content">
                                <div class="room__content isShow" id="tab-<?php echo $post->ID ?>-1-content">
                                    <div class="room__item">
                                        <ul>
                                            <li>Room Area: </li>
                                            <li><?php echo get_field('room_area')?></li>
                                        </ul>

                                        <ul>
                                            <li>Occupancy: </li>
                                            <li><?php echo get_field('max_pax')?></li>
                                        </ul>

                                        <ul>
                                            <li>Bed: </li>
                                            <li><?php echo get_field('room_bed')?></li>
                                        </ul>

                                        <ul>
                                            <li>Bathroom Area: </li>
                                            <li><?php echo get_field('bathroom_area')?></li>
                                        </ul>

                                    </div>
                                    
                                    
                                </div>
                                <div class="room__content" id="tab-<?php echo $post->ID ?>-2-content">
                                <div class="room__item">
                                <?php
                                    $roomDetails = get_field('room_details');
                                    if ($roomDetails){
                                        foreach($roomDetails as $details) {
                                            echo ' <span>' .$details .' </span> ';
                                        }     
                                    }
                                ?>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 no-padding">
                <div class="index__services__wrapper  bg-tertiary">
                    <div class="slider__wrapper">
                        <div  id="slick__slider" class="slick__slider">

                            <?php 
                              $galleryArr = get_field('room_gallery');    
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

<section class="single__pagination">
    <div class="container">
        <div class="single__pagination__wrapper">
            <ul>
                <li><?php previous_post_link( 'Previous %link ', '%title'); ?></li>
                <li><?php next_post_link('Next %link ', '%title'); ?></li>
            </ul>
        </div>
    </div>
</section>



<?php get_footer(); ?>