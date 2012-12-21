<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <div id="content">
        <div class="seven-col left">
            <h2><?php the_title(); ?>/<?php echo get_post_meta($post->ID, 'employee_title', true); ?></h2>
            <p class="med-font">
               <?php the_content(); ?>
            </p>
        </div>
        <div class="four-col margin-top right">
            <h2>
               <?php echo get_post_meta($post->ID, 'employee_quote', true); ?>
            </h2>
        </div>
    </div>
    <!--end the loop-->
<?php endwhile; ?>
<?php endif; ?>