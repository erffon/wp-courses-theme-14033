<?php

add_action('wp_enqueue_scripts', 'register_assets');
function register_assets()
{
    //REGISTER STYLES
    wp_register_style('main-style', get_stylesheet_directory_uri() . '/style.css', '', '1.0.0');
    wp_register_style('theme-colors', get_stylesheet_directory_uri() . '/assets/css/colors.css', '', '1.0.0');

    wp_enqueue_style('main-style');
    wp_enqueue_style('theme-colors');

    //REGISTER SCRIPTS
    wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', ['jquery'], '1.0.0', ['in_footer' => 'true']);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '', '1.0.0', ['in_footer' => 'true']);
    wp_register_script('select2js', get_template_directory_uri() . '/assets/js/select2.min.js', '', '1.0.0', ['in_footer' => 'true']);
    wp_register_script('slickjs', get_template_directory_uri() . '/assets/js/slick.js', '', '1.0.0', ['in_footer' => 'true']);
    wp_register_script('counterupjs', get_template_directory_uri() . '/assets/js/counterup.min.js', '', '1.0.0', ['in_footer' => 'true']);
    wp_register_script('customjs', get_template_directory_uri() . '/assets/js/custom.js', '', '1.0.0', ['in_footer' => 'true']);
    wp_register_script('front-ajax', get_template_directory_uri() . '/assets/js/ajax.js', '', '1.0.0', ['in_footer' => 'true']);

    // REGISTER AJAX
    wp_register_script('ajaxjs', get_template_directory_uri() . '/assets/js/ajax.js', ['jquery'], '1.0.0', ['in_footer' => 'true']);
    wp_localize_script('ajaxjs', 'ajax', [
        'ajaxVar' => admin_url('admin-ajax.php'),
        '_nounce' => wp_create_nonce()
    ]);

    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('select2js');
    wp_enqueue_script('slickjs');
    wp_enqueue_script('counterupjs');
    wp_enqueue_script('customjs');
    wp_enqueue_script('ajaxjs');
    wp_enqueue_script('frontajax', get_template_directory_uri() . '/assets/js/front-ajax.js', ['jquery'], '1.0.0', ['in_footer' => 'true']);


    wp_localize_script('frontajax', 'frontajax', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        '_nonce' => wp_create_nonce()
    ]);
}
