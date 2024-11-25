<?php
add_action( 'wp_enqueue_scripts', 'one_one_enqueue_styles' );

function one_one_enqueue_styles() {
    wp_enqueue_style(
        'grand-one-style',
        get_stylesheet_uri('style.css')
    );
}
?>