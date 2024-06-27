<?php


function register_sidebar_widgets()
{
    register_sidebar([
        'name' => 'my_theme_sidebar',
        'id' => 'sidebar-1',
        'description' => 'custom theme sidebar',
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h4 class="title">',
        'after_title' => '</h4>?'
    ]);
}
add_action('widgets_init', 'register_sidebar_widgets');
