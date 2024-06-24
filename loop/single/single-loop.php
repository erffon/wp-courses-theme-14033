<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="article_detail_wrapss single_article_wrap format-standard">
            <div class="article_body_wrap">

                <div class="article_featured_image">
                    <?php echo get_template_part('/_inc/post/post', 'post'); ?>
                </div>

                <div class="article_top_info">
                    <ul class="article_middle_info">
                        <li><a href="#"><span class="icons"><i class="ti-user"></i></span>توسط <?php echo get_the_author(); ?></a></li>
                        <li><a href="#"><span class="icons"><i class="ti-comment-alt"></i></span><?php echo get_comments_number() === '' ? 0 : get_comments_number(); ?> نظر ثبت شده</a></li>
                    </ul>
                </div>
                <h2 class="post-title"><?php the_title() ?></h2>
                <?php the_content(); ?>
                <div class="article_bottom_info">
                    <div class="post-tags">
                        <h4 class="pbm-title">تگ های پربازدید</h4>
                        <?php $tags = get_the_tags(); ?>
                        <ul class="list">
                            <?php
                            if ($tags) :
                                foreach ($tags as $tag) : ?>
                                    <li><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="post-share">
                        <h4 class="pbm-title">شبکه های اجتماعی</h4>
                        <ul class="list">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-vk"></i></a></li>
                            <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                        </ul>
                    </div>
                </div>
                <?php get_template_part('partials/single/pagination', 'pagination') ?>

            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>