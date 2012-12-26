<?php get_header(); ?>
            <div class="wrapped bg-image">
                <h1 class="heading full-width border-bottom">
                    Blog
                </h1>
                <div class="clearfix"></div>
                <div class="blog-container blog-index main-content">
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
                                    <!-- <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>" class="share-ln" target="_blank"></a> -->
                                    <!-- <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" class="share-fb" target="_blank"></a> -->
                                    <?php echo direct_email(); ?>
                                        <a href="http://twitter.com/share" class=" twitter-share twitter-share-button"
                                        data-url="<?php the_permalink(); ?>"
                                        data-via="GoVictorOps"
                                        data-text="<?php the_title(); ?>"
                                        data-related="GoVictorOps"
                                        data-count="none">Tweet</a>
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