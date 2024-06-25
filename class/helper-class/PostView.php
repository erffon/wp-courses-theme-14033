<?php

class PostView
{
    private static $key = '_post_view_count';

    public static function set_post_view($postID)
    {
        $postView = get_post_meta($postID, self::$key, true);

        if (!metadata_exists('post', $postID, self::$key)) {
            add_post_meta($postID, self::$key, '0', true);
        }
        $postView++;
        update_post_meta($postID, self::$key, $postView);
    }
    public static function get_post_view($postID)
    {
        $postView = get_post_meta($postID, self::$key, true);

        if (!metadata_exists('post', $postID, self::$key)) {
            return '1';
        }

        return $postView;
    }
}
