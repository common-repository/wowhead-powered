<?PHP
/*
Plugin Name: Powered by Wowhead
Plugin URI: http://wowhead.com/?powered
Description: Enables Powered by Wowhead in Wordpress seamlessly.
Version: 1.0
Author: nilved
Author URI: http://nilved.net
*/
function a(){echo "<script type=\"text/javascript\" src=\"http://static.wowhead.com/widgets/power.js\"></script>\n";}add_action('wp_head','a');
?>