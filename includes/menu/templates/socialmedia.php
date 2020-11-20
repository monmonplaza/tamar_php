<h1> Social Media</h1>

<?php settings_errors(); ?>
<form method="post" action="options.php">
   <?php settings_fields('tmr-socmed-group'); ?>
   <?php do_settings_sections('tmr_socialmedia' ); ?>

   <?php submit_button()?>
</form>

