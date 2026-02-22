<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Header / Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm fixed-top">
            <div class="container">
                <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
                <?php
else: ?>
                <a class="navbar-brand fw-bold fs-3" href="<?php echo esc_url(home_url('/')); ?>">
                    <span class="text-primary">
                        <?php bloginfo('name'); ?>
                    </span>
                </a>
                <?php
endif; ?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
wp_nav_menu(array(
    'theme_location' => 'main-menu',
    'container' => false,
    'menu_class' => 'navbar-nav ms-auto align-items-center',
    'fallback_cb' => '__return_false',
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 2,
));
?>
                    <!-- Static Fallback Items if no menu set -->
                    <?php if (!has_nav_menu('main-menu')): ?>
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item"><a class="nav-link mx-2" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link mx-2" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link mx-2" href="#about">About</a></li>
                        <li class="nav-item ms-lg-3">
                            <a class="btn btn-primary" href="#contact">Start Your Project</a>
                        </li>
                    </ul>
                    <?php
endif; ?>
                </div>
            </div>
        </nav>
    </header>