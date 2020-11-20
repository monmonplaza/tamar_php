<h1> Tamar Options</h1>

<?php settings_errors(); ?>
<form method="post" action="options.php">
   <?php settings_fields('tmr-info-group'); ?>
   <?php do_settings_sections('tmr_info' ); ?>

   <?php submit_button()?>
</form>                              
