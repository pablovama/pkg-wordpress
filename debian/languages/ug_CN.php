<?php
// Uyghur

$text_direction = 'rtl';

// add bedit.js and bconfig.js to admin-header.php
// and enable Uyghur input

function load_bedit_script () {
     wp_enqueue_script('bedit', WP_CONTENT_URL . '/languages/bedit.js');
     wp_enqueue_script('bconfig', WP_CONTENT_URL . '/languages/bconfig.js');     
return;
}
add_action('admin_init','load_bedit_script');
add_action('init','load_bedit_script');
?>