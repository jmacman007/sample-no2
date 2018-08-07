<?php
/*
Plugin Name:        Roots Rewrites
Plugin URI:         http://roots.io/plugins/roots-rewrites/
Description:        Clean URL rewrites for your WordPress plugins and theme dist folder.
Version:            1.0.1
Author:             Roots
Author URI:         http://roots.io/
License:            MIT License
License URI:        http://opensource.org/licenses/MIT
*/

/**
 * Rewrites do not happen for multisite installations or child themes
 *
 * Rewrite:
 *   /wp-content/themes/themename/dist/css/ to 					/dist/css/
 *   /wp-content/themes/themename/dist/js/  to						/dist/js/
 *   /wp-content/themes/themename/dist/img/ to 					/dist/img/
 *   /wp-content/plugins/ to 																/plugins/
 *
 * If you aren't using Apache, Nginx configuration settings can be found in the README
 */

defined('ABSPATH') or die('A common mistake that people make when trying to design something completely foolproof is to underestimate the ingenuity of complete fools. - Douglas Adams');

include_once('plugin.php');

new Roots_Rewrites(__FILE__);

?>