<?php

$args = [
    'posts_per_page' => 4,
    'post_type' => 'post',
    'order' => 'ASC'
];
$the_query = new WP_Query($args);



if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post() ?>
        <div class="singles_items ">
            <div class="edu_cat">
                <div class="pic">
                    <div class="topic_level bg-info text-white">سطح : <?php echo !empty(get_post_meta(get_the_ID(), 'post_level', true)) ? get_post_meta(get_the_ID(), 'post_level', true) : 'ناموجود'; ?></div>
                    <div class="topic_cat bg-warning text-white">جاوااسکریپت</div>
                    <?php echo get_template_part('/_inc/post/post', 'post'); ?>
                </div>
                <div class="edu_data singles_items_border_bottom">
                    <h4 class="title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
                    <ul class="meta d-flex mt-4">
                        <li class="d-flex align-items-center"></i><?php echo get_the_author() ?></li>
                        <li class="video d-flex align-items-center"><i class="ti-video-clapper"></i>ویدئو</li>
                        <li class="video d-flex align-items-center"><i class="ti-eye"></i>321</li>
                        <li class="d-flex align-items-center"><i class="ti-calendar theme-cl"></i>26 مرداد 1399</li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata(); ?>

<?php else : ?>
    <div>مطلبی موجود نیست</div>
<?php endif; ?>