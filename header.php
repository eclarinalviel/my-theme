<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Wordpress Customized Theme </title>
        <?php wp_head(); ?>
    </head>
<body>
    <?php get_header_image(); ?>
    <!-- NAVIGATION -->
    <?php if ( has_nav_menu( 'primary' ) ) { ?>
        <nav class="nav-container" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'nav navbar-nav navbar-right'
                            )
                        );
                    ?>
                </div>
            </div>
        </nav>
    <?php }else{ ?>
        <nav class="nav-container" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </div>
                
            </div>
        </nav>

    <?php } ?>
    <!-- END OF NAVIGATION -->