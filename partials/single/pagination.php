<div class="single_article_pagination">
    <?php $prevPost = get_previous_post();
    if (!empty($prevPost)) : ?>
        <div class="prev-post">
            <a href="<?php echo get_permalink($prevPost->ID); ?>" class="theme-bg">
                <div class="title-with-link">
                    <span class="intro">پست قبلی</span>
                </div>
            </a>
        </div>
    <?php endif; ?>

    <div class="article_pagination_center_grid">
        <a href="#"><i class="ti-layout-grid3"></i></a>
    </div>
    <?php $nextPost = get_next_post();
    if (!empty($nextPost)) : ?>
        <div class="next-post">
            <a href="<?php echo get_permalink($nextPost->ID); ?>" class="theme-bg">
                <div class="title-with-link">
                    <span class="intro">پست بعدی</span>
                </div>
            </a>
        </div>
    <?php endif; ?>
</div>