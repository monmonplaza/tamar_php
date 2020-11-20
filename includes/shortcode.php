<?php

add_shortcode( 'activity_list', 'tamar_activities');
function tamar_activities($atts, $content){
    $option = shortcode_atts(array('post_type' => ''), $atts );
    
    $query = new WP_query(array(
        'post_type' => $option['post_type']
    
    )
);

if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
    $tablink .= '<li><a href="#" class="act__btn" >'. get_the_title ().'</a></li>';

    
$tabContent .= '<div class="tab__info__wrapper" >  <img src="'. get_the_post_thumbnail_url().'" alt="">'.
'<div class="tab__info__content"><h3>'. get_the_title ().'</h3><p>'. get_the_content ().'</p></div></div>';      

endwhile;
wp_reset_postdata(  );
endif;





$output = '<div class="tab__wrapper"><div class="tab__btn"><h2>Activities</h2><ul>'.  $tablink .' </ul></div><div class="tab__info">'.$tabContent .'</div></div>';

return $output;
}