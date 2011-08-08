<?php
// Uyghur

$text_direction = 'rtl';

add_action('admin_init','load_bedit_script');
add_action('init','load_bedit_script');
add_action('admin_init','set_font_face');
add_action('init','set_font_face');
// add bedit.js to admin-header.php
// and enable Uyghur input

function load_bedit_script () {
	wp_register_script('bEdit', WP_CONTENT_URL . '/languages/bedit.js');
	wp_enqueue_script('bEdit');
return;
}

function set_font_face () {
	$cssFile = dirname(dirname(__FILE__)). '/languages/fontfaces.css';
	if (!file_exists($cssFile)) {
		$hndFile = fopen($cssFile, 'w') or die("wp-content/languages/fontfaces.css ni qurghili bolmidi.");
    	$stringData = '@font-face {' . "\n\t" . 'font-family:UKIJ Tuz Tom;' . "\n\t" . 'font-size: normal;';
		$stringData = $stringData . "\n\t" . 'font-weight: normal;' . "\n\t" . 'src:url(';
		$stringData = $stringData . WP_CONTENT_URL . '/languages/UKIJTuT.eot);' . "\n\t" . 'src:local(\'UKIJ Tuz Tom\'),url(';
		$stringData = $stringData . WP_CONTENT_URL . '/languages/UKIJTuT.ttf);format("OpenType")' . "\n" . '}';
		fwrite($hndFile, $stringData);
		fclose($hndFile);
	}

	$cssFontFile = WP_CONTENT_URL . '/languages/fontfaces.css';
	wp_register_style('fontFaces', $cssFontFile);
	wp_enqueue_style( 'fontFaces');
}
?>