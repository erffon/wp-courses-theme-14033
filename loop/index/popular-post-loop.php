<?php
add_action('wp_ajax_popular', 'popular');
add_action('wp_ajax_nopriv_popular', 'popular');

function popular()
{
    $args = [
        'post_type' => 'tech',
        'showposts' => 3,
        'meta_key' => '_post_view_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC'
    ];
    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :
        $html_output = '';
        while ($the_query->have_posts()) : $the_query->the_post();
            $html_output .= '<div class="col-lg-4 col-md-4 col-sm-12">
                <div class="articles_grid_style">
                    <div class="articles_grid_thumb">
                        <a href="' . get_permalink(get_the_ID()) . '"><img src=" ' . get_the_post_thumbnail_url() . '" class="img-fluid" /></a>
                    </div>
    
                    <div class="articles_grid_caption">
                        <a href="' . get_permalink(get_the_ID()) . '">
                            <h4>' . get_the_title() . '</h4>
                        </a>
                        <div class="articles_grid_author">
                            <div class="articles_grid_author_img"><img src=" ' . get_avatar_url(get_the_author_meta('ID')) . '" class="img-fluid" alt="" /></div>
                            <h4>' . get_the_author() . '</h4>
                        </div>
                    </div>
                </div>
            </div>';
        endwhile;
    endif;
    wp_reset_postdata();

    wp_send_json([
        'content' => $html_output,
        'success' => true
    ], 200);
}

add_action('wp_ajax_hot', 'hot');
add_action('wp_ajax_nopriv_hot', 'hot');

function hot()
{
    $args = [
        'post_type' => 'tech',
        'showposts' => 3,
        'orderby' => 'comements_count',
        'order' => 'DESC'
    ];
    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :
        $html_output = '';
        while ($the_query->have_posts()) : $the_query->the_post();
            $html_output .= '<div class="col-lg-4 col-md-4 col-sm-12">
                <div class="articles_grid_style">
                    <div class="articles_grid_thumb">
                        <a href="' . get_permalink(get_the_ID()) . '"><img src=" ' . get_the_post_thumbnail_url() . '" class="img-fluid" /></a>
                    </div>
    
                    <div class="articles_grid_caption">
                        <a href="' . get_permalink(get_the_ID()) . '">
                            <h4>' . get_the_title() . '</h4>
                        </a>
                        <div class="articles_grid_author">
                            <div class="articles_grid_author_img"><img src=" ' . get_avatar_url(get_the_author_meta('ID')) . '" class="img-fluid" alt="" /></div>
                            <h4>' . get_the_author() . '</h4>
                        </div>
                    </div>
                </div>
            </div>';
        endwhile;
    endif;
    wp_reset_postdata();

    wp_send_json([
        'content' => $html_output,
        'success' => true
    ], 200);
}

add_action('wp_ajax_new', 'newFilter');
add_action('wp_ajax_nopriv_new', 'newFilter');

function newFilter()
{
    $args = [
        'post_type' => 'tech',
        'showposts' => 3,
        'order' => 'ASC'
    ];
    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) :
        $html_output = '';
        while ($the_query->have_posts()) : $the_query->the_post();
            $html_output .= '<div class="col-lg-4 col-md-4 col-sm-12">
                <div class="articles_grid_style">
                    <div class="articles_grid_thumb">
                        <a href="' . get_permalink(get_the_ID()) . '"><img src=" ' . get_the_post_thumbnail_url() . '" class="img-fluid" /></a>
                    </div>
    
                    <div class="articles_grid_caption">
                        <a href="' . get_permalink(get_the_ID()) . '">
                            <h4>' . get_the_title() . '</h4>
                        </a>
                        <div class="articles_grid_author">
                            <div class="articles_grid_author_img"><img src=" ' . get_avatar_url(get_the_author_meta('ID')) . '" class="img-fluid" alt="" /></div>
                            <h4>' . get_the_author() . '</h4>
                        </div>
                    </div>
                </div>
            </div>';
        endwhile;
    endif;
    wp_reset_postdata();

    wp_send_json([
        'content' => $html_output,
        'success' => true
    ], 200);
}

add_action('wp_ajax_video', 'videoFilter');
add_action('wp_ajax_nopriv_video', 'videoFilter');

function videoFilter()
{
    $html_output = '<div class="alert alert-warning">محتوای ویدیویی موجود نیست!</div>';
    wp_send_json([
        'content' => $html_output,
        'success' => true
    ], 200);
}
