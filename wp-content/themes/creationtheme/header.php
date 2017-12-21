<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<title><?php the_title();  ?></title>
</head>
<body>
<div class="wrap">
    <div class="left-sidebar">
        <div class="logo">
            <span>
            <a href="<?php bloginfo('url') ?>"><img src="http://localhost/formation-wordpress/wp-content/themes/creationtheme/images/grid-img.jpg"></a>
            </span>
            <h1><?php bloginfo('name') ?></h1>
        </div>
        <div class="top-nav">
            <?php wp_nav_menu(); ?>
        </div>
    </div>