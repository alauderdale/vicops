        </div> <!-- end main -->
        <div class="clearfix">
        </div>
        <footer>
            <div class="wrapped footer-in">
                <div class="footer-top">
                    <h1 class="left">Be victorious.</h1>
                    <div class="footer-social right">
                        <p class="voi">&copy; 2012 VictorOps Inc.</p>
                        <ul class="social-icons">
                            <!-- <li >
                                <a class="foot-linkIn" href="#"></a>
                            </li> -->
                            <li>
                                <a class="foot-twitter" href="https://twitter.com/GoVictorOps"></a>
                            </li>
                            <!-- <li>
                                <a class="foot-facebook" href="#"></a>
                            </li> -->
                            <li>
                                <a class="foot-mail" href="mailto:info@victorops.com"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="footer-bottom">
                    <?php 
                        if ( dynamic_sidebar('footer_text') ) : 
                    ?>
                <?php endif; ?>
                    <div class="left email">
                        <?php echo do_shortcode('[newsletter]'); ?>
                    </div>
                </div>
            </div>
            <?php wp_footer(); ?>
        </footer>
    </div> <!-- end container -->
</body>
</html>