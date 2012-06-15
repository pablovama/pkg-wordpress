<?php
/**
 * Extend Press This width to make room for translated strings.
 *
 * @since 3.1.0
 */
function ru_extend_press_this() {
	global $hook_suffix;

	if ( 'press-this.php' == $hook_suffix ) : ?>
<script type="text/javascript">
/* <![CDATA[ */
jQuery(document).ready( function() {
	window.resizeTo(765, 580);
});
/* ]]> */
</script>
<?php
	endif;
}
add_action('admin_print_footer_scripts', 'ru_extend_press_this');
?>