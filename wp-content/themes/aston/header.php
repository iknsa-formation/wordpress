<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<title><?php the_title();  ?></title>
</head>
<body>
<!---start-wrap---->
<div class="wrap">
<!---start-sidebar---->
    <div class="left-sidebar">
        <div class="logo">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <h1><?php bloginfo('name') ?></h1>
        </div>
        <div class="top-nav">
                
            <?php 
              /*$params =  array(
                'theme_location' => 'menu_principal'
              );
            wp_nav_menu( $params);*/ 

            wp_nav_menu();
            ?>
        </div>
    </div>