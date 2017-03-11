<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <?php get_template_part('view/index/content'); ?>
    <?php endwhile; ?>
<?php else : ?>
    <?php get_template_part('view/global/content-404'); ?>
<?php endif; ?>
<?php get_footer(); ?>
