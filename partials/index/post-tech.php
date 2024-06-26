<section class="min-sec">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 mb-3">
                <div class="sec-heading2 sec-heading-flex">
                    <div class="sec-left">
                        <h3>مطالب تکنولوژی</h3>
                    </div>
                    <div class="sec-right">
                        <select class="form-control form-control-sm bg-success text-white" name="" id="change-post-type">
                            <option value="new">نمایش بر اساس : جدیدترین ها</option>
                            <option value="popular">محبوب ترین ها</option>
                            <option value="hot">داغ ترین ها</option>
                            <option value="video">مطالب ویدئویی</option>
                        </select>
                        <!-- <a href="javascript:void(0);" class="btn-br-more">همه مطالب</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id='ajax-tech-posts'>
            <?php get_template_part('loop/index/tech-loop', 'tech-loop'); ?>
        </div>
    </div>
</section>