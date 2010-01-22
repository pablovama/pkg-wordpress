<?php
/** WordPress's Debianised default master config file
Please do NOT edit and read about how the configuration works in the README.Debian
**/

    #http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=435289
    #http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=440572 (underscores, not dashes)
    $debian_server = preg_replace('/:.*/', "", $_SERVER['HTTP_HOST']);
    $debian_server = preg_replace("/[^a-zA-Z0-9.\-]/", "", $debian_server);
    $debian_file = '/etc/wordpress/config-'.strtolower($debian_server).'.php';

    if (!file_exists($debian_file)) {
        header("HTTP/1.0 404 Not Found");
	echo "<b>$debian_file</b> could not be found. The file is either not readable by this process or does not exist. <br>
		Please check if <b>$debian_file</b> exists and contains the right password/username.";
        exit(1);
    }

    require_once($debian_file);

define('ABSPATH', '/usr/share/wordpress/');
define('WP_CORE_UPDATE', false);

require_once(ABSPATH.'wp-settings.php');
?>
