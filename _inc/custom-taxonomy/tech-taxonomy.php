<?php
add_action('init', 'register_tech_post_type');

function register_tech_post_type()
{
    $labels = array(
        'name'                  => 'techs',
        'singular_name'         => 'tech',
        'menu_name'             => 'اخبار تکنولوژی',
        'name_admin_bar'        => 'tech',
        'add_new'               => 'افزودن جدید',
        'add_new_item'          => 'اضافه کردن مطلب تکنولوژی جدید',
        'new_item'              => '',
        'edit_item'             => '',
        'view_item'             => '',
        'all_items'             => '',
        'search_items'          => '',
        'parent_item_colon'     => '',
        'not_found'             => '',
        'not_found_in_trash'    => '',
        'featured_image'        => '',
        'set_featured_image'    => '',
        'remove_featured_image' => '',
        'use_featured_image'    => '',
        'archives'              => '',
        'insert_into_item'      => '',
        'uploaded_to_this_item' => '',
        'filter_items_list'     => '',
        'items_list_navigation' => '',
        'items_list'            => '',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'book'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    );

    register_post_type('tech', $args);
}
