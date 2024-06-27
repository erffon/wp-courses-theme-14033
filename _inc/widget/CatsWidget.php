<?php

class CatsWidget extends WP_Widget
{

    public function __construct()
    {
        // Instantiate the parent object.
        parent::__construct(false, 'cats-widget');
    }
    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        echo 'my first widget';
        echo $args['after_widget'];
    }
    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }
    public function form($instance)
    {
        return '';
    }
}
add_action('widgets_init', 'wpdocs_register_widgets');

function wpdocs_register_widgets()
{
    register_widget('CatsWidget');
}
