<!DOCTYPE html>
<html>
<head>
    
    <link href="<?php bloginfo('template_url'); ?>/stylesheets/style.css" rel="stylesheet" type="text/css" media="screen" />
     <link rel= "shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />

<!-- jquery -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">

<!-- custom scripts -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/javascripts/scripts.js"></script>

    <title><?php wp_title(''); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div id="container">
        <header class="full-width">
            <div class="wrapped">
                <div class="logo left">
                    <a href="<?php echo get_option('home'); ?>">
                    </a>
                </div>
                <nav class="main-nav right">
                     <?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) );   ?>    
                </nav>
            </div>
        </header>
        <div class="clearfix"></div>
        <div class="main">