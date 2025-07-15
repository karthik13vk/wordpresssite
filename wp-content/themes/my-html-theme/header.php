<?php $theme_url = get_template_directory_uri(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css"> -->
    <?php wp_head(); ?>
</head>

<body>
    <!-- header section -->
    <header class="header-section">
        <div class="container">
            <nav>
                <div class="header-left">
                    <div class="logo-part">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo esc_url( $theme_url ); ?>/assets/images/logo.png" alt="Logo" />
                        </a>
                    </div>
                    <div class="nav-section">
                        <ul>
                            <li><a href="<?php echo get_permalink( get_page_by_path('about') ); ?>">About</a></li>
                            <li><a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>">Contact</a></li>
                            <li><a href="javascript:void(0);">Company</a></li>
                            <li><a href="javascript:void(0);">Hire Resource</a></li>
                            <li><a href="javascript:void(0);">Carrers</a></li>
                        </ul>
                    </div>
                </div>

                <div class="header-right">
                    <button class="nav-btn" onclick="w3_open()">☰</button>
                    <div class="navbar-part" style="display:none" id="mySidebar">
                        <button onclick="w3_close()" class="bar-item"> &times;</button>
                        <ul>
                            <li> <a href="javascript:void(0);">Products</a></li>
                            <li><a href="javascript:void(0);">Services</a></li>
                            <li><a href="javascript:void(0);">Company</a></li>
                            <li><a href="javascript:void(0);">Hire Resource</a></li>
                            <li><a href="javascript:void(0);">Carrers</a></li>
                        </ul>
                    </div>

                    <div class="head-btn-area">
                        <a href="javascript:void(0)" class="btn"> Let’s Talk </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>