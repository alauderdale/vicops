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
                                <?php 
                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail();
                                } 
                                ?>
                            </div>
                            <div class="left thumb-left-info">
                                <h1>
                                    <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                    </a>
                                </h1>
                                <p>
                                     <?php echo excerpt(20); ?>
                                     <a class="read-more-link" href="<?php the_permalink(); ?>">more</a>
                                </p>
                            </div>
                        </article>
                    <!--end the loop-->
                    <?php endwhile; ?>
                </div><!-- end blog container -->
                <?php get_sidebar(); ?>
            </div> <!-- end wrapped -->
<?php get_footer(); ?>