<?php 

// Load Scripts
function vc_add_scripts(){
    // Load main css
    wp_enqueue_style('vc-main-style', plugins_url().'/vanilla-carousel/css/style.css');
    
    // Load main JS
    wp_enqueue_script('vc-main-script', plugins_url().'/vanilla-carousel/js/main.js');
}

add_action('wp_enqueue_scripts', 'vc_add_scripts')
?>