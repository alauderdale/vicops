<?php
/*
Template Name: main
 */
?>

<?php get_header(); ?>
                <div class="clearfix"></div>
                <div class="page-container main-content">
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
                    </div>
                </div>
<?php get_footer(); ?>