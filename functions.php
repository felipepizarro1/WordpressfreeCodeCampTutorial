<?php
function tutorialwp_register_styles(){

    wp_enqueue_style('tutorialwp-css', get_stylesheet_uri(), array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'tutorialwp_register_styles');

?>