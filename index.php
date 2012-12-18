<?php get_header(); ?>
            <div class="wrapped bg-image">
                <h1 class="heading full-width border-bottom">
                    Blog
                </h1>
                <div class="clearfix"></div>
                <div class="blog-container main-content">
                    <!--start the loop-->
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="border-bottom">
                            <h1>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?> 
                                </a>
                            </h1>
                            <div class="meta left full-width">
                                <div class="left">
                                    <p>
                                        <?php the_author(); ?>  on <?php the_time('M. jS, Y') ?>
                                    </p>
                                </div>
                                <div class="right share-this">
                                    <p style="color:#000;">
                                        <strong>Share This:</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="content">
                                <p>
                                     <?php echo excerpt(100); ?>
                                    <a class="read-more-link" href="<?php the_permalink(); ?>">more</a>
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