<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Rubik:700" rel="stylesheet">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>