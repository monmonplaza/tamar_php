<h1> Theme Support Options</h1>

<?php settings_errors(); ?>
<form method="post" action="options.php">
   <?php settings_fields('tmr-theme-support-group'); ?>
   <?php do_settings_sections('tmr_theme_settings' ); ?>
   <?php submit_button()?>
</form>

