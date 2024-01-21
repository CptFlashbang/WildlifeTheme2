<?php
    function WildlifeTheme_add_stylesheet () {
        wp_enqueue_style ('style', get_stylesheet_uri());
    }
    add_action ('wp_enqueue_scripts','WildlifeTheme_add_stylesheet');