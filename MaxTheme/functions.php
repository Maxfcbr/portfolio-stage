<?php
//dit is mijn style sheet//
function mijn_portfolio_style(){
    wp_enqueue_style( 'style', get_template_directory_uri()."/style.css", array(),'','all');
}
add_action( 'wp_enqueue_scripts', 'mijn_portfolio_style');






?>