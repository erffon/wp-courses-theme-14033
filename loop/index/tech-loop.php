<?php
$args = [
    'posts_per_page' => 3,
    'post_type' => 'tech',
    'order' => 'ASC'
];
$the_query = new WP_Query($args);

$thumbnail_id = get_post_thumbnail_id($post->ID);
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post() ?>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="articles_grid_style">
                <div class="articles_grid_thumb">
                    <a href="<?php echo get_permalink(get_the_ID()) ?>"><img src=" <?php the_post_thumbnail_url(370) ?>" class="img-fluid" alt="<?php echo $alt; ?>" /></a>
                </div>

                <div class="articles_grid_caption">
                    <a href="<?php echo get_permalink(get_the_ID()) ?>">
                        <h4><?php echo get_the_title(); ?></h4>
                    </a>
                    <div class="articles_grid_author">
                        <div class="articles_grid_author_img"><img src=" <?php echo get_avatar_url(get_the_author_meta('ID')) ?>" class="img-fluid" alt="" /></div>
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" title="<?php echo esc_attr(get_the_author()); ?>"><?php the_author(); ?></a>

                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;
    $the_query->rewind_posts(); ?>

<?php else : ?>
    <div class="alert alert-primary">مطلبی موجود نیست</div>
<?php endif; ?>