<?php

require get_template_directory() . '/includes/enqueues.php';
require get_template_directory() . '/includes/cpt.php';
require get_template_directory() . '/includes/shortcode.php';
require get_template_directory() . '/includes/class.php';
require get_template_directory() . '/includes/api.php';

require get_template_directory() . '/includes/theme-support.php';

require get_template_directory() . '/includes/menu/custom-menus.php';


add_action('wp_footer', 'show_template');
function show_template() {
    global $template;
    echo '<div class"template-name" style="position:fixed; left: 30px; bottom: 30px; padding:2px; background: coral; color:#fff; font-size: 13px;">'.basename($template).'</div>';
}
