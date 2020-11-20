<?php

// COMPANY INFORMATION
function tmr_information_name() {
    $name= esc_attr(get_option('tmr_name'));
    echo '<input type="text" name="tmr_name" value ="' . $name . '" placeholder="Enter company name"  style = "width: 100%; max-width: 500px"/>';
}

function tmr_information_logo() {
    $logo= esc_attr(get_option('tmr_logo'));
    echo '<input type="text" name="tmr_logo" value ="' . $logo . '" placeholder="Enter logo path" style = "width: 100%; max-width: 500px"/>';
}

function tmr_information_landline() {
    $landline= esc_attr(get_option('tmr_landline'));
    echo '<input type="text" name="tmr_landline" value ="' . $landline . '" placeholder="Enter landland"  style = "width: 100%; max-width: 500px"/>';
}

function tmr_information_address() {
    $address= esc_attr(get_option('tmr_address'));
    echo '<textarea name="tmr_address" value ="' . $address . '" placeholder="Enter Address" cols="30" rows="4" style="resize:none; width: 100%; max-width: 500px" />'. $address . '</textarea>';
}

function tmr_information_map() {
    $map= esc_attr(get_option('tmr_map'));
    echo '<input type="text" name="tmr_map" value ="' . $map . '" placeholder="Enter map path"  style = "width: 100%; max-width: 500px"/>';
}

function tmr_information_email() {
    $email= esc_attr(get_option('tmr_email'));
    echo '<input type="text" name="tmr_email" value ="' . $email . '" placeholder="Enter Email"  style = "width: 100%; max-width: 500px"/>';
}



//SOCIAL MEDIA 
function tmr_information_facebook() {
    $facebook= esc_attr(get_option('tmr_facebook'));
    echo '<input type="text" name="tmr_facebook" value ="' . $facebook . '" placeholder="Enter Email"  style = "width: 100%; max-width: 500px"/>';
}

function tmr_information_twitter() {
    $twitter= esc_attr(get_option('tmr_twitter'));
    echo '<input type="text" name="tmr_twitter" value ="' . $twitter . '" placeholder="Enter Email"  style = "width: 100%; max-width: 500px"/>';
}

function tmr_information_instagram() {
    $instagram= esc_attr(get_option('tmr_instagram'));
    echo '<input type="text" name="tmr_instagram" value ="' . $instagram . '" placeholder="Enter Email"  style = "width: 100%; max-width: 500px"/>';
}


// POST FORMAT START
function tmr_post_formats() {
    $options = get_option('post_formats');
    //var_dump($options);
    $formats = array('aside','gallery', 'link', 'quote', 'status', 'video', 'audio', 'chat');
    $output = '';

    foreach ( $formats as $format ) {
    $checked = (@$options[$format]  == 1 ? 'checked' : '');
    $output .= '<label><input type="checkbox" name="post_formats['.$format.']"  value="1" '.$checked.' /><span style="text-transform:Capitalize">' . $format .' </span></label><br>';
    
    }
    echo ($output);
}

// POST FORMAT END


// CUSTOM HEADER AND BACKGROUND

function tmr_custom_header() {
    $options = get_option('custom_header');
    $checked = (@$options == 1 ? 'checked' : '');
    $output = '<label><input type="checkbox" name="custom_header"  value="1" '.$checked.' /><span style="text-transform:Capitalize"> Activate? </span></label><br>';
    echo $output;
}

function tmr_custom_background() {
    $options = get_option('custom_background');
    $checked = (@$options == 1 ? 'checked' : '');
    $output = '<label><input type="checkbox" name="custom_background"  value="1" '.$checked.' /><span style="text-transform:Capitalize"> Activate? </span></label><br>';
    echo $output;
}

// CUSTOM HEADER AND BACKGROUND END




// THEME OPTIONS

function tmr_video_background() {
    $options = get_option('video_background');
    $checked = (@$options == 1 ? 'checked' : '');
    $output = '<label><input type="checkbox" name="video_background"  value="1" '.$checked.' /><span style="text-transform:Capitalize"> Activate </span></label><br>';
    echo $output;
}

function tmr_background_video_path() {
    $vbg= esc_attr(get_option('video_background_path'));
    echo '<input type="text" name="video_background_path" value ="' . $vbg . '" placeholder="Enter media background video path"  style = "width: 100%; max-width: 500px"/>';
}


function tmr_video_tour_path() {
    $tour= esc_attr(get_option('video_tour_path'));
    echo '<input type="text" name="video_tour_path" value ="' . $tour . '" placeholder="Enter media video path"  style = "width: 100%; max-width: 500px"/>';
}


function tmr_bg_image_path() {
    $bgi= esc_attr(get_option('bg_image_path'));
    echo '<input type="text" name="bg_image_path" value ="' . $bgi . '" placeholder="Enter media video path"  style = "width: 100%; max-width: 500px"/>';
}


