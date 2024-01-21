<?php
    function WildlifeTheme_add_stylesheet () {
        wp_enqueue_style ('style', get_stylesheet_uri());
    }
    add_action ('wp_enqueue_scripts','WildlifeTheme_add_stylesheet');

    function WildlifeTheme_add_menus() {
        register_nav_menus( array(
            'primary' => __( 'Primary' ),
            'secondary' => __( 'Secondary' ),
        ) );
    }
    add_action( 'after_setup_theme',
                'WildlifeTheme_add_menus' );