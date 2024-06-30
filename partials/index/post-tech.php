<section class="min-sec">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 mb-3">
                <div class="sec-heading2 sec-heading-flex">
                    <div class="sec-left">
                        <h3>مطالب تکنولوژی</h3>
                    </div>
                    <div class="sec-right">
                        <select class="form-control form-control-sm bg-success text-white" name="" id="">
                            <option value="">نمایش بر اساس : جدیدترین ها</option>
                            <option value="">محبوب ترین ها</option>
                            <option value="">داغ ترین ها</option>
                            <option value="">مطالب ویدئویی</option>
                        </select>
                        <!-- <a href="javascript:void(0);" class="btn-br-more">همه مطالب</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php get_template_part('loop/index/tech-loop', 'tech-loop'); ?>
        </div>
    </div>
</section>