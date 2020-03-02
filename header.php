<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php wp_title(); ?></title>
    <?php wp_head() ?>
</head>
 
<body <?php body_class(); ?>>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <?php
            wp_nav_menu( array( 
                'menu' => 'main-menu', 
                'container_class' => 'main-menu' ) 
            ); 
            ?>
        </nav>
    </div>
</div>

<div class="container">

<header class="site-header blog-header">
    <h1 class="blog-title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <p class="lead blog-description"><?php bloginfo( 'description' ); ?></p>
</header>

<div class="row">