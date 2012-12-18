                <sidebar>
                    <div class="sidebar-section">
                        <p class="border-bottom">
                            <strong>
                                Recent Entries
                            </strong>
                        </p>
                        <ul class="recent">
                            <?php
                            $sidebarloop = new WP_Query( array( 
                                'post_type' => 'post',
                                'showposts' => 3
                                ) );
                            ?>
                            <?php while ( $sidebarloop->have_posts() ) : $sidebarloop->the_post(); ?>
                                <li class="border-bottom">
                                <?php echo excerpt(10); ?> <a href="<?php the_permalink(); ?> ">more</a>
                                </li>
                            <!-- end sidebar -->
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="sidebar-section">
                        <p class="border-bottom">
                            <strong>
                                Categories
                            </strong>
                        </p>
                            <ul class="categories">
                                <?php 
                                $args = array(
                                'title_li'           => __( '' ),
                                'exclude'            => '1'
                                ); 
                                ?>
                                <?php wp_list_categories($args); ?> 
                            </ul>
                    </div>
                </sidebar>