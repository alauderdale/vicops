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
                        <article>
                            <h1>
                                <?php the_title(); ?> 
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
                                    <a href="#" class="share-ln"></a>
                                    <a href="#" class="share-twitter"></a>
                                    <a href="#" class="share-fb"></a>
                                    <a href="#" class="share-mail"></a>
                                </div>
                            </div>
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