<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<section class="posts sites">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="sites__title-container">
						<h2 class="sites__title">
							<?php if ( is_tax( 'color' ) ) : ?>
								<?php _e( 'Color: ', 'mwwp' ); ?>
							<?php endif; ?>
							<?php if ( is_tax( 'industry' ) ) : ?>
								<?php _e( 'Industry: ', 'mwwp' ); ?>
							<?php endif; ?>
							<?php single_term_title(); ?>
						</h2>
					</div>
				</div>
				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<?php get_template_part( 'template-parts/index/content' ); ?>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php else : ?>
	<?php get_template_part( 'template-parts/global/content-404' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
