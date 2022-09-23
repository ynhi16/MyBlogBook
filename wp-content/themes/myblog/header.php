<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My blog</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/responsive.css">
    <?php wp_head() ?>
</head>

<body>
    <div class="wallpaper">
        <header>
            <div class="main-header">
                <div class="container">
                    <div class="logo">
                        <a href="<?php bloginfo('url') ?>"><img
                                src="<?php bloginfo('template_directory') ?>/images/hocwordpress.png" alt="My Blog"></a>
                        <?php if(is_home()) {?>
                        <h1>
                            <?php bloginfo('name') ?></h1>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="main-nav">
                <div class="container">
                    <div class="menu-header">
                        <ul>
                            <?php wp_nav_menu( 
                            array( 
                                'theme_location' => 'main_nav', 
                                'container' => 'false', 
                                'menu_id' => 'main_nav', 
                                'menu_class' => 'menu'
                            ) 
                            ); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php wp_head() ?>
        </header>