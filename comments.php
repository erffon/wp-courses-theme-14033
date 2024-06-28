<div class="article_detail_wrapss single_article_wrap format-standard">

    <div class="comment-area">
        <div class="all-comments">
            <?php if (get_comments_number() === '0') : ?>
                <h3 class="comments-title">صفر دیدگاه</h3>
            <?php else : ?>
                <h3 class="comments-title"><?php echo get_comments_number(); ?> دیدگاه</h3>
            <?php endif; ?>
            <div class="comment-list">
                <ul>
                    <?php wp_list_comments(); ?>
                </ul>
            </div>
        </div>
        <?php if (comments_open()) : ?>
            <div class="comment-box submit-form">
                <h3 class="reply-title">ثبت دیدگاه</h3>
                <div class="comment-form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="نام کامل">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="ایمیل معتبر">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="comment" class="form-control" cols="30" rows="6" placeholder="نظر خود را بنویسید..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <a href="#" class="btn search-btn">ثبت</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> <?php else : ?>
            <div class="alert alert-info">امکان ثبت دیدگاه وجود ندارد!</div>
        <?php endif; ?>
    </div>

</div>