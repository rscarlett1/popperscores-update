 <?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Popperscores
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'horse-website' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding"
            <?php if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif;
                    
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>

             <div id="top-header">
                <div>We Deliver Every Weekday</div>
                <div><i class="fa fa-phone" aria-hidden="true"></i> &#40;04&#41;123 4567</div>
                <div>My Bag</div>
            </div>
                <div id="horse-image">
                    <div id="logo-area">
                       
                        <?php if ( get_header_image() ) : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
                            </a>
                        <?php endif;?>
                        
                        
                        <form role="search" method="get" class="search-form" action="http://localhost/wordpress/">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" value="" name="s" />
                            </label>
                        <input type="submit" class="search-submit" value="Search" />
                        <!-- <input type="text" name="search" placeholder="Search"/> -->
                        </form>
                    </div><!--  logo area -->





        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'popperscores' ); ?></button>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    

    