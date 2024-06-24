<?php

function register_level()
{
    add_meta_box(
        'level',
        'تنظیمات بیشتر',
        'level_html',
        '',
        'normal',
        'default'
    );
}

function level_html($post)
{
    wp_nonce_field('post_level_nounce', 'post_level_nounce');
?>

    <div>
        <label for="post-level">سطح مقاله</label>
        <input type="text" value="<?php echo get_post_meta($post->ID, 'post_level', true); ?>" name="post_level" id="post-level" placeholder="سطح مقاله را وارد نمایید">
    </div>
    <div style="padding: 20px 0;">
        <label for="post-cat">دسته بندی</label>
        <?php
        wp_dropdown_categories([
            'name' => 'post-cat'
        ]); ?>
    </div>
<?php
}

function save_meta_box_data($post_id)
{
    $post_level_field = $_POST['post_level'];
    $post_level_nonce = $_POST['post_level_nounce'];
    if (!wp_verify_nonce($post_level_nonce, 'post_level_nounce')) {
        return $post_id;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {

        return $post_id;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }
    if (!empty($post_level_field)) {
        $san_post_level = sanitize_text_field($post_level_field);
        update_post_meta($post_id, 'post_level', $san_post_level);
    }
}

add_action('add_meta_boxes', 'register_level');
add_action('save_post', 'save_meta_box_data');
