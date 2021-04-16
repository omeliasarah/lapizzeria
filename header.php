<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="container">
            <a href="<?php echo home_url('/'); ?>">
                <div class="logo">
                    <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                    <?php if( has_custom_logo()): ?>

                    <img src="<?php echo esc_url($logo[0]) ?>" class="logoimage">
                    <?php else: ?>
                    <h1><?php echo get_bloginfo('name') ?></h1>
                    <?php endif; ?>
                </div>
            </a> <!-- logo -->
            <div class="header-information">
                <div class="socials">
                    <?php
            $args = array(
                'theme_location' => 'social-menu',
                'container' => 'nav',
                'container_class' => 'socials',
                'link_before' => '<span class="sr-text">',
                'link_after' => '</span>'
            );
            wp_nav_menu($args);

            ?>
                </div><!-- socials -->
                <div class="address">
                    <p>8179 Bay Avenue Mountain View, CA 94043</p>
                    <p>Phone Number: +1-92-456-7890</p>
                </div>
            </div><!-- header information -->
        </div><!-- container information -->
    </header>

    <!-- Navagation Menu -->
    <div class="main-menu">
        <div class="mobile-menu">
            <a href="#" class="mobile"><i class="fas fa-bars"></i> Menu </a>
        </div>
        <div class="navigation">
            <?php
            $args = array(
                'theme_location' => 'header-menu',
                'container' => 'nav',
                'container_class' => 'site-nav'
            );
            wp_nav_menu($args);

            ?>
        </div>
    </div>

    <!-- <header class="site-header">
        <div class="logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg">
            </a>
        </div>
    </header> -->