<?php
/**
* Plugin Name: Vanilla Carousel - A Simple Content Slider
* Plugin URI: https://7bitstudios.com/vanilla-carousel-plugin/
* Description: Vanilla Carousel is a content slider that relies on simple css and vanilla javascript. Since it does not rely on JQuery or Owl Carousel, things should not break when JQuery or wordpress are updated.
* Author: 7Bit Studios
* Version: 0.0.1
* License: GPLv2 or later
*/

if(!defined('ABSPATH')){
    exit;
}

require_once(plugin_dir_path(__FILE__).'/includes/vanilla-carousel-scripts.php');
require_once(plugin_dir_path(__FILE__).'/php/vanilla-carousel-admin.php');
require_once(plugin_dir_path(__FILE__).'/php/vanilla-carousel-frontend.php');
?>