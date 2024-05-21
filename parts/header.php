<!DOCTYPE html>
<html lang='pt-br'>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Black Panther</title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        
        <!-- slick css start -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- slick css end -->

        <!-- header wordpress -->
        <?php wp_head() ?>
        <!-- fecha header wordpress -->
    </head>
    <body>  
        <header class="header">
            <a class="header__logo" href="/#home">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg"  width="60px" height="60px"/>
            </a>
            <nav>
                <a href="/#quem-somos" rel="noopener noreferrer">QUEM SOMOS</a>    
                <a href="/#aonde-jogamos" rel="noopener noreferrer">AONDE JOGAMOS</a>    
                <a href="/#nossos-treinos" rel="noopener noreferrer">NOSSOS TREINOS</a>    
            </nav>
            <?php get_template_part('parts/participate-btn') ?>

            
            <div class="header__menu-icon js-header__menu-icon">
                <span class="header__menu-icon__bar"></span>
                <span class="header__menu-icon__bar"></span>
                <span class="header__menu-icon__bar"></span>
            </div>

            <div class="header__menu js-header__menu">
                <h2>Menu</h2>
                <nav>
                    <a class="js-links-menu-mobile nohover" href="/#quem-somos">Quem somos</a>
                    <a class="js-links-menu-mobile nohover" href="/#aonde-jogamos">Aonde jogamos</a>
                    <a class="js-links-menu-mobile nohover" href="/#nossos-treinos">Nossos treinos</a>
                </nav>
                <?php get_template_part('parts/participate-btn') ?>
            </div>
        </header>