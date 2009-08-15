<?php
/** WordPress's Debianised default master config file
Please do NOT edit and read about how the configuration works in the README.Debian
**/

    #http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=435289
    #http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=440572 (underscores, not dashes)
    $debian_server = preg_replace('/:.*/', "", $_SERVER['HTTP_HOST']);
    $debian_file = '/etc/wordpress/config-'.strtolower($debian_server).'.php';

    $allowed_paths = array('/etc/wordpress');
    if (!in_array(dirname(realpath($debian_file)), $allowed_paths))
	    die("The config file for the specified host is not under an allowed path");

    if (!file_exists($debian_file)) {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not found";
        exit(1);
    }

    require_once($debian_file);

define('ABSPATH', '/usr/share/wordpress/');
define('WP_CORE_UPDATE', false);

require_once(ABSPATH.'wp-settings.php');
?>
