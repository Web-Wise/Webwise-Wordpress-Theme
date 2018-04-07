<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>
            <?php wp_title('&laquo;', true, 'right'); ?>
            <?php bloginfo('name'); ?>
        </title>

        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width">


        <!-- Wordpress Head Items -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        
    <?php get_sidebar('menu'); ?>

        <div id="container">
            <nav id="header" class="main row hold text-center align-center " style="">

                <div class="nav-item">
                    <a id="menu-button" class="menu-button"><svg fill="#ffffff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h24v24H0z" fill="none"/>
    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
</svg> &nbsp; Menu</a>
                </div>

                <div class="nav-item">
                    <h1>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ww-icon.png" alt="Webwise Logo" class="logo" height="30px" width="30px" />
                    </h1>
                </div>

                <div class="nav-item">
                    <a href="#" id="app-button" class="app-button">Services &nbsp; <svg fill="#ffffff" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/>
    <path d="M0 0h24v24H0z" fill="none"/>
</svg></a>
                </div>
            </nav>

            