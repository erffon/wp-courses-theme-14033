<!-- Categories -->
<div class="single_widgets widget_category">
    <h4 class="title">ویجت اختصاصی آخرین مطالب</h4>
    <!--<ul>
        <li><a href="#">سبک زندگی <span>09</span></a></li>
        <li><a href="#">تدریس خصوصی <span>12</span></a></li>
        <li><a href="#">آموزش آنلاین <span>19</span></a>
        </li>
        <li><a href="#">برندسازی <span>17</span></a></li>
        <li><a href="#">موزیک <span>10</span></a></li>
    </ul> -->
    <?php if (is_active_sidebar('sidebar-1')) { ?>
        <ul id="sidebar">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </ul>
    <?php } ?>

</div>