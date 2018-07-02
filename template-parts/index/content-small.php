<article <?php post_class( 'col-lg-6 site' ); ?>>
	<div class="site__inner">
		<div class="site__image-container">
			<a class="site__permalink" href="<?php the_permalink(); ?>">
				<figure class="site__image-figure">
					<?php the_post_thumbnail( 'medium' ); ?>
				</figure>
			</a>
			<div class="site__quicklinks">
				<a href="<?php the_field( 'website_url' ); ?>" class="site__link site__link--outgoing">
                    <span class="site__icon">
                        <?php get_template_part( 'template-parts/icons/content', 'browser' ); ?>
                    </span>
				</a>
				<a href="<?php the_permalink(); ?>" class="site__link site__link--detail">
                    <span class="site__icon">
                        <?php get_template_part( 'template-parts/icons/content', 'detail' ); ?>
                    </span>
				</a>
			</div>
		</div>
		<div class="site__content">
			<div class="site__information">
				<?php $industries = get_the_terms( $posts->ID, 'industry' ); ?>
				<?php if ( has_term( '', 'industry' ) ) : ?>
					<?php foreach ( $industries as $industry ) : ?>
						<a class="site__industry" href="<?php echo get_term_link( $industry->term_id ); ?>">
							<?php echo $industry->name; ?>
						</a>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="site__title-color-container">
				<div class="row">
					<div class="col-8">
						<h2 class="site__title">
							<a href="<?php the_permalink(); ?>" class="site__title-link">
								<?php the_title(); ?>
							</a>
						</h2>
					</div>
					<div class="col-4">
						<?php $colors = get_the_terms( $posts->ID, 'color', array( 'order' => 'DESC' ) ); ?>
						<?php if ( has_term( '', 'color' ) ) : ?>
							<div class="site__colors">
								<?php foreach ( $colors as $color ) : ?>
									<a class="site__color site__color--<?php echo $color->name; ?>"
									   href="<?php echo get_term_link( $color->term_id ); ?>"></a>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php //the_field( 'website_url'); ?>
</article>
