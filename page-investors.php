<?php
/*
Template Name: investors
 */
?>


<?php get_header(); ?>
            <div class="wrapped bg-image">
                <h1 class="heading full-width border-bottom">
                    <?php the_title(); ?>
                </h1>
                <div class="clearfix"></div>
                <div class="blog-container main-content">
                        <?php if ( get_post_meta($post->ID, 'header_text', true) ) : ?>
                            <div class="left full-width border-bottom page-heading">
                                <div class="left">
                                    <h2><?php echo get_post_meta($post->ID, 'header_text', true); ?></h2>
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
                        <?php endif; ?>
                    <!--start the investor loop-->
                    <?php
                    $investorloop = new WP_Query( array( 'post_type' => 'investor') );
                    ?>
                    <?php while ( $investorloop->have_posts() ) : $investorloop->the_post(); ?>
                        <article class="border-bottom left investor">
                            <div class="investor-thumb left">
                                <a target="_blank" href="<?php echo get_post_meta($post->ID, 'investor_url', true); ?>">
                                <?php 
                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail();
                                } 
                                ?>
                                </a>
                            </div>
                            <div class="left thumb-left-info">
                                <h1>
                                    <?php the_title(); ?>
                                </h1>
                                <p>
                                     <?php the_content(); ?>
                                </p>
                            </div>
                        </article>
                    <!--end the loop-->
                    <?php endwhile; ?>
                </div><!-- end blog container -->
                <?php get_sidebar(); ?>
            </div> <!-- end wrapped -->
<?php get_footer(); ?>