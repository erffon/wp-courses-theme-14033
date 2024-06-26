<?php


class GoogleReferer
{
    private static $key = '_google_referer_count';
    public static function set_google_referer($postID, $referer)
    {
        if (strpos($referer, 'https://google.com')) {

            $gReferreCount = get_post_meta($postID, self::$key, true);

            if (!metadata_exists('post', $postID, self::$key)) {
                add_post_meta($postID, self::$key, '0', true);
            }
            $gReferreCount++;
            update_post_meta($postID, self::$key, $gReferreCount);
        }
    }
    public static function get_google_referer($postID)
    {
        $gReferreCount = get_post_meta($postID, self::$key, true);

        if (!metadata_exists('post', $postID, self::$key)) {
            return '0';
        }

        return $gReferreCount;
    }
}
