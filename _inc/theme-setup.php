<?php

function theme_setup()
{
    add_filter('show_admin_bar', '__return_false');

    //REGISTER THEME NAV
    register_nav_menu('top nav', 'منوی اصلی');
}
add_action('after_setup_theme', 'theme_setup');
