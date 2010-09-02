<?php

$text_direction = 'rtl';


/* --------------------------------------------------------------------------- 
Localize defaults
http://trac.wordpress.org/ticket/6854
 ---------------------------------------------------------------------------*/ 

function schema_il() {
	add_option('start_of_week', 0); 
	add_option('rss_language', 'he');
	add_option('timezone_string', 'Asia/Jerusalem');
}

add_action ('populate_options', 'schema_il');

/* --------------------------------------------------------------------------- 
Comment directionality auto-detection by Tom Sella
http://www.dontsmile.info/my-plugins/plugin-comment_direction/
---------------------------------------------------------------------------*/ 

class comment_direction
{
  function domina($data = '')
  {
    $text  = $this->sanitize_text($data);
    $c_eng = $this->count_it($text, '/\w+/u');
    $c_heb = $this->count_it($text, '/[\x{05B0}-\x{05F4}\x{FB1D}-\x{FBF4}]+/u');
    $c_arb = $this->count_it($text, '/[\x{060C}-\x{06FE}\x{FB50}-\x{FEFC}]+/u');
    $dir   = ($c_eng >= ($c_heb + $c_arb)) ? 'ltr' : 'rtl';
    $data  = "<div style='direction: {$dir};'><p>" . $data . "</p></div>";
    return $data;
  }

  function sanitize_text($data = '')
  {
    $sanitized = preg_replace('/<.*?>/x', '', $data); // remove html content
    $sanitized = preg_replace('/[0-9]+/', '', $sanitized); // remove numbers content
    return $sanitized;
  }

  function count_it($data = '', $match)
  {
    $i = 0;
    while (preg_match($match, $data, $x, PREG_OFFSET_CAPTURE))
    {
      $i += strlen($x[0][0]);
      $data = substr($data,$x[0][1] + strlen($x[0][0]));
    }
    return $i;
  }
  
  function comment_direction()
  {
    add_action('comment_text', array(&$this, 'domina'));
  }
}

$countit = new comment_direction();

/* --------------------------------------------------------------------------- 
Unfancy Quote Plugin For WordPress by Semiologic
http://www.semiologic.com/software/unfancy-quote/
Slightly modified for better Hebrew support
 ---------------------------------------------------------------------------*/ 

add_filter('category_description', 'strip_fancy_quotes', 20);
add_filter('list_cats', 'strip_fancy_quotes', 20);
add_filter('comment_author', 'strip_fancy_quotes', 20);
add_filter('comment_text', 'strip_fancy_quotes', 20);
add_filter('single_post_title', 'strip_fancy_quotes', 20);
add_filter('the_title', 'strip_fancy_quotes', 20);
add_filter('the_content', 'strip_fancy_quotes', 20);
add_filter('the_excerpt', 'strip_fancy_quotes', 20);
add_filter('bloginfo', 'strip_fancy_quotes', 20);
add_filter('widget_text', 'strip_fancy_quotes', 20);

/**
 * strip_fancy_quotes()
 *
 * @param string $text
 * @return string $text
 **/

function strip_fancy_quotes($text = '') {
	$text = str_replace(array("&#8216;", "&#8217;", "&#8242;"), "'", $text);
	$text = str_replace(array("&#8220;", "&#8221;", "&#8243;"), "\"", $text);

	return $text;
} # strip_fancy_quotes()

?>
