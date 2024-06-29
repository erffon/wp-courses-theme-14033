<?php

function register_tech_post_type()
{
    $labels = array(
        'name'                  => 'تکنولوژی‌ها',
        'singular_name'         => 'tech',
        'menu_name'             => 'اخبار تکنولوژی',
        'name_admin_bar'        => 'tech',
        'add_new'               => 'افزودن جدید',
        'add_new_item'          => 'اضافه کردن مطلب تکنولوژی جدید',
        'new_item'              => 'آیتم جدید',
        'edit_item'             => 'ویرایش آِتم',
        'view_item'             => 'مشاهده',
        'all_items'             => 'همه',
        'search_items'          => 'جستجو',
        'parent_item_colon'     => 'آیتم والد',
        'not_found'             => 'چیزی یافت نشد',
        'not_found_in_trash'    => 'چیزی در زباله‌دان یافت نشد',
        'featured_image'        => 'تصویر شاخص',
        'set_featured_image'    => 'انتخاب بعنوان تصویر شاخص',
        'remove_featured_image' => 'حذف تصویر شاخص',
        'use_featured_image'    => 'استفاده از تصویر شاخص',
        'archives'              => 'آرشیوها',
        'insert_into_item'      => 'ورود آیتم جدید',
        'uploaded_to_this_item' => 'آپلود به این آیتم',
        'filter_items_list'     => 'فیلتر لیست آیتم‌ها',
        'items_list_navigation' => 'پیمایش بین آیتم‌ها',
        'items_list'            => 'لیست آیتم‌ها',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'tech'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    );

    register_post_type('tech', $args);
}
function register_tech_taxonomy()
{

    $labels = array(
        'name'              => 'دسته تکنولوژی‌ها',
        'singular_name'     => 'دسته بندی',
        'search_items'      => 'جستجو',
        'all_items'         => 'همه موارد',
        'view_item'         => 'مشاهده',
        'parent_item'       => 'آیتم والد',
        'parent_item_colon' => 'والد کولون',
        'edit_item'         => 'ویرایش',
        'update_item'       => 'به روز رسانی',
        'add_new_item'      => 'اضافه کردن جدید',
        'new_item_name'     => 'نام آیتم جدید',
        'not_found'         => 'چیزی یافت نشد',
        'back_to_items'     => 'بازگشت به آیتم',
        'menu_name'         => 'نام منو'
    );
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'tags'),
        'show_in_rest'      => true,
    );


    register_taxonomy('tags', 'tech', $args);
}

add_action('init', 'register_tech_post_type');
add_action('init', 'register_tech_taxonomy');
