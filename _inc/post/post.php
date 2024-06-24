<?php


if (the_post_thumbnail()) {
    the_post_thumbnail('large', [
        'class' => 'img-responsive',
        'alt' => get_the_title()
    ]);
} else {
    echo '<p>no image</p>';
}
