<?php
/*
Template Name: main
 */
?>

<?php get_header(); ?>
                <div class="clearfix"></div>
                <div class="page-container main-content acord-contain">
                    <div id="accordion">
                        <?php
                        $investorloop = new WP_Query( array( 'post_type' => 'accordion') );
                        ?>
                        <?php while ( $investorloop->have_posts() ) : $investorloop->the_post(); ?>
                            <h1 class="heading wrapped border-bottom"><?php the_title(); ?>
                            </h1>
                            <div class="acord-inner acord-info" style="background-image:url(<?php
                                    $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                                    echo $imgsrc2[0];
                                    ?>); ">
                                <div class="wrapped">
                                    <span class="descrip">
                                        <?php the_content(); ?> 
                                    </span>
                                </div>
                            </div>
                        <!--end the loop-->
                        <?php endwhile; ?>
                        <!--people-->
                        <h1 class="heading wrapped border-bottom people-heading">
                            Who we are
                        </h1>
                        <div class="acord-inner acord-people">
                            <div class="wrapped">
                                <div class="acord-people-wrapper">
                                    <div class="six-col left">
                                        <span class="descrip">
                                            <?php if (have_posts()) : ?>
                                            <?php while (have_posts()) : the_post(); ?>

                                                <?php the_content(); ?>

                                            <!--end the loop-->
                                            <?php endwhile; ?>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                    <div class="six-col right">
                                        <?php
                                            $investorloop = new WP_Query( array( 'post_type' => 'employee') );
                                        ?>
                                        <?php while ( $investorloop->have_posts() ) : $investorloop->the_post(); ?>
                                        <div class="person left">
                                            <?php the_post_thumbnail(); ?>
                                            <p><strong><?php the_title(); ?></strong></p>
                                            <p><strong><?php echo get_post_meta($post->ID, 'employee_title', true); ?></strong></p>
                                            <a class="bio" href="<?php the_permalink(); ?>">
                                            <p>Bio &amp; War Story</p>
                                            </a>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="content-wrap hidden">
                                        <div id="content" class="person-detail-wrap">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix left margin-bottom"></div>
<?php get_footer(); ?>