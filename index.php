<?php get_header(); ?>

<?php
$args = array(
	'post_type' => 'sites',
	'category_name' => 'featured',
	'posts_per_page' => -1
);

$featured = new WP_Query( $args );
?>

<?php if ( $featured->have_posts() && ! is_paged() ) : ?>
	<section class="slider sites">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sites__title-container">
						<h2 class="sites__title">
							<?php _e( 'Featured WordPress projects ', 'mwwp' ); ?>
						</h2>
					</div>
					<div class="slider__slick">
						<?php while ( $featured->have_posts() ) : ?>
							<?php $featured->the_post(); ?>
							<?php get_template_part( 'template-parts/index/content', 'big' ); ?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ( have_posts() ) : ?>
	<section class="posts sites">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sites__title-container">
						<h2 class="sites__title">
							<?php _e( 'Latest WordPress projects ', 'mwwp' ); ?>
						</h2>
					</div>
				</div>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<?php get_template_part( 'template-parts/index/content', 'small' ); ?>
				<?php endwhile; ?>
				<?php get_template_part( 'template-parts/pagination/content' ); ?>
			</div>
		</div>
	</section>
<?php else : ?>
	<?php get_template_part( 'template-parts/global/content-404' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
