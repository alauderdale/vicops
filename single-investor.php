<?php get_header(); ?>
            <div class="wrapped bg-image">
                <h1 class="heading full-width border-bottom">
                    Investors
                </h1>
                <div class="clearfix"></div>
                <div class="blog-container main-content">
                    <!--start the loop-->
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article>
                            <?php 
                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail();
                                } 
                                ?>
                            <h1>
                                <?php the_title(); ?> 
                            </h1>
                            <div class="clearfix"></div>
                            <div class="content">
                                <p>
                                   <?php the_content(); ?>
                                </p>
                            </div>
                        </article>
                    <!--end the loop-->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- end blog container -->
                <?php get_sidebar(); ?>
            </div> <!-- end wrapped -->
<?php get_footer(); ?>