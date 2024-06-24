<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="breadcrumbs-wrap">
                    <h1 class="breadcrumb-title"><?php echo the_title(); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">خانه</a></li>

                            <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo the_permalink(); ?>"><?php the_title() ?></a></li>

                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>