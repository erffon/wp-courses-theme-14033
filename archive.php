<?php /* Template Name: آرشیو */ ?>

<?php get_header(); ?>
<?php echo get_template_part('partials/nav/nav', 'nav') ?>

<?php echo get_template_part('partials/archive/title', 'title') ?>

<?php echo get_template_part('partials/archive/sidebar-onclick', 'sidebar-onclick') ?>
<?php echo get_template_part('partials/archive/archive-content', 'archive-content') ?>

<?php get_footer(); ?>