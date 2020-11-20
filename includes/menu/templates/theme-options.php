<h1> Theme Options</h1>

<?php settings_errors(); ?>
<form method="post" action="options.php">
   <?php settings_fields('tmr-theme-option-group'); ?>
   <?php do_settings_sections('tmr_theme_options' ); ?>
   <?php submit_button()?>
</form>

