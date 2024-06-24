<?php

function theme_setup()
{
    add_filter('show_admin_bar', '__return_false');

    //REGISTER THEME NAV
    register_nav_menu('top nav', 'منوی اصلی');

    // POSTS COVER IMAGE SUPPORT
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(400, 400);
}
add_action('after_setup_theme', 'theme_setup');
