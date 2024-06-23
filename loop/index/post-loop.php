<?php

$args = [
    'posts_per_page' => 4
];
$the_query = new WP_Query($args);



if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post() ?>
        <div class="singles_items ">
            <div class="edu_cat">
                <div class="pic">
                    <div class="topic_level bg-info text-white">سطح : متوسط</div>
                    <div class="topic_cat bg-warning text-white">جاوااسکریپت</div>
                    <a class="pic-main" href="#" style="background-image:url(<?php echo get_template_directory_uri() . '/assets/img/course-7.jpg' ?>"></a>
                </div>
                <div class="edu_data singles_items_border_bottom">
                    <h4 class="title"><a href="single.html">پلاگین نویسی وردپرس</a></h4>
                    <ul class="meta d-flex mt-4">
                        <li class="d-flex align-items-center"></i>وحید صالحی</li>
                        <li class="video d-flex align-items-center"><i class="ti-video-clapper"></i>ویدئو</li>
                        <li class="video d-flex align-items-center"><i class="ti-eye"></i>321</li>
                        <li class="d-flex align-items-center"><i class="ti-calendar theme-cl"></i>26 مرداد 1399</li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else : ?>
    <div>مطلبی موجود نیست</div>
<?php endif; ?>