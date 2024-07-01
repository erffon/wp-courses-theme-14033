<!-- ============================ Full Width Courses  ================================== -->
<section class="pt-0">
    <div class="container">
        <!-- Onclick Sidebar -->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div id="filter-sidebar" class="filter-sidebar">
                    <div class="filt-head">
                        <h4 class="filt-first">جستجوی پیشرفته</h4>
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">بستن <i class="ti-close"></i></a>
                    </div>
                    <div class="show-hide-sidebar">

                        <!-- Find New Property -->
                        <div class="sidebar-widgets">

                            <!-- Search Form -->
                            <form class="form-inline addons mb-3">
                                <input class="form-control" type="search" placeholder="جستجو دوره" aria-label="Search">
                                <button class="btn my-2 my-sm-0" type="submit"><i class="ti-search"></i></button>
                            </form>

                            <!-- filters form-->
                            <form id="archive-filter">
                                <?php
                                $args = [
                                    'role__in' => ['Administrator', 'author', 'editor'],
                                    'fields' => ['ID', 'display_name']
                                ];
                                $users = new WP_User_Query($args);
                                $users = $users->get_results();
                                if ($users) :
                                ?>
                                    <h4 class="side_title">نویسنده</h4>
                                    <ul class="no-ul-list mb-3">
                                        <?php foreach ($users as $user) : ?>
                                            <li>
                                                <input id="user-id-<?php echo $user->ID ?>" value="<?php echo $user->ID ?>" class="checkbox-custom user-id" name="a-4" type="checkbox">
                                                <label for="user-id-<?php echo $user->ID ?>" class="checkbox-custom-label"><?php echo $user->display_name; ?></label>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <div class="alert alert-warning">نویسنده‌ای یافت نشد!</div>
                                    <?php endif; ?>
                                    </ul>

                                    <h4 class="side_title">دسته بندی</h4>
                                    <?php
                                    $args = [
                                        'orderby' => 'count',
                                        'hide_empty' => true,
                                        'taxonomy' => ['category']
                                    ];
                                    $terms = get_terms($args);
                                    if (!empty($terms) && is_array($terms)) : ?>
                                        <ul class="no-ul-list mb-3">
                                            <?php foreach ($terms as $term) : ?>
                                                <li>
                                                    <input id="term-id-<?php echo $term->term_id; ?>" class="checkbox-custom term-id" value="<?php echo $term->term_id; ?>" name="term-id-<?php echo $term->term_id; ?>" type="checkbox">
                                                    <label for="term-id-<?php echo $term->term_id; ?>" class="checkbox-custom-label"><?php echo $term->name ?></label>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>

                                    <h4 class="side_title">نوع دوره</h4>
                                    <ul class="no-ul-list mb-3">
                                        <li>
                                            <input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
                                            <label for="a-10" class="checkbox-custom-label">همه (75)</label>
                                        </li>
                                        <li>
                                            <input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
                                            <label for="a-11" class="checkbox-custom-label">رایگان (15)</label>
                                        </li>
                                        <li>
                                            <input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
                                            <label for="a-12" class="checkbox-custom-label">نقدی (60)</label>
                                        </li>
                                    </ul>

                                    <button class="btn btn-theme full-width mb-2" type="submit">فیلتر کن</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>