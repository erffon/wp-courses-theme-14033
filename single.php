<?php get_header(); ?>
<?php echo get_template_part('partials/nav/nav', 'nav') ?>

<?php echo get_template_part('partials/single/title', 'title') ?>

<?php echo get_template_part('partials/single/start-layout', 'start-layout') ?>

<?php echo get_template_part('partials/single/main-content', 'main-content'); ?>

<?php echo get_template_part('partials/single/sidebar', 'sidebar'); ?>

<?php echo get_template_part('partials/single/end-layout', 'end-layout') ?>
<?php get_footer(); ?>