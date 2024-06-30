<?php

include_once '_inc/assets/register_assets.php';
include_once '_inc/theme-setup/theme-setup.php';

// ADD POST LEVEL META BOX
// include_once '_inc/meta-box/meta-box.php';

// COUNT POST VIEWS
include_once 'class/helper-class/PostView.php';

// ESTIMATE READING TIME
include_once 'class/helper-class/EstimateReadingTime.php';

// COUNT GOOGLE REFERER
include_once 'class/helper-class/GoogleReferrer.php';

// ADD WIDGETS
include_once '_inc/widget/sidebar-widget.php';
include_once '_inc/widget/CatsWidget.php';

// ADD SHORTCODES
include_once '_inc/admin/shortcodes.php';

// ADD CUSTOM POST TYPE TAXONOMY
include_once '_inc/custom-post-type/tech-post-type.php';

// POPULAR POST LOOP
include_once 'loop/index/popular-post-loop.php';
