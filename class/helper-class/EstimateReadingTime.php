<?php

class EstimateReadingTime
{
    public static function get_reading_time($content, $timeBase = 300)
    {
        $clean_content = strip_tags(strip_shortcodes($content));
        $word_count = strlen($clean_content);
        return ceil($word_count / $timeBase);
    }
}
