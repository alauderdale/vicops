<?php get_header(); ?>
            <div class="wrapped bg-image">
                <h1 class="heading  full-width border-bottom">
                    <?php the_title(); ?>
                </h1>
                <div class="clearfix"></div>
                <div class="page-container main-content">
                    <!--start the loop-->
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>
                    
                    <!--end the loop-->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div> <!-- end wrapped -->
<?php get_footer(); ?>