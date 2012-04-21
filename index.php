<?php
/*
Plugin Name: &lt;title&gt;KN Fix Your&lt;/title&gt;
Plugin URI: http://www.KakiNetwork.Com
Description: With this plugin, you can fix and handle your blog title!
Author: Freddie Aziz Jasbindar
Author URI: http://twitter.com/FreddieAziz
Version: 1.0.1
*/
include "functions.php";
register_activation_hook(__FILE__,'install_kn_fix_your_title');
register_deactivation_hook(__FILE__,'uninstall_kn_fix_your_title');

add_action('wp_head', 'kn_fix_your_title', '-99999999999999999');
?>