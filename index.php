<?php get_header(); ?>
    <div class="container grid-lines">
        <div class="row">
            <div class="col-sm-1">
                <div class="grid-lines__col"></div>
            </div>
            <div class="col-sm-1">
                <div class="grid-lines__col"></div>
            </div>
            <div class="col-sm-1">
                <div class="grid-lines__col"></div>
            </div>
            <div class="col-sm-1">
                <div class="grid-lines__col"></div>
            </div>
            <div class="col-sm-1">
                <div class="grid-lines__col"></div>
            </div>
            <div class="col-sm-1">
                <div class="grid-lines__col"></div>
            </div>
            <div class="col-sm-1">
                <div class="grid-lines__col"></div>
            </div>
            <div class="col-sm-1">
                <div class="grid-lines__col"></div>
            </div>
        </div>
    </div>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="container">
                <div class="row equal-height">
                    <div class="col-sm-5">
                        <div class="card">
                            <?php get_template_part('view/index/content'); ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card submit-box">
                            <p>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part('view/global/content-404'); ?>
    <?php endif; ?>
<?php get_footer(); ?>
