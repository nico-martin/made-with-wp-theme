<?php get_header(); ?>
    <?php if (have_posts()) : ?>
        <section class="posts">
            <div class="container">
                <div class="row">
	                <?php while (have_posts()) : ?>
		                <?php the_post(); ?>
                        <?php get_template_part('template-parts/page/content'); ?>
	                <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php else : ?>
        <?php get_template_part('template-parts/global/content-404'); ?>
    <?php endif; ?>
<?php get_footer(); ?>
