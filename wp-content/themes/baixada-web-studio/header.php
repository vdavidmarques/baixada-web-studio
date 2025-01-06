<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php $url_canonical = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
    <link rel="canonical" href="https://baixada-web-studio.great-site.net/">

    <?php wp_head(); ?>
    <title itemprop="name"><?php wp_title(); ?></title>
    <meta name="keywords" content="desenvolvimento web, web sites, Site Institucional, Landing Pages, desenvolvimento web marcenarias, sites para marcenarias">
    <meta name="author" content="Vinícius Marques">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php include 'utils/favicon.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Created to preloading image and make LCP better(page speed) -->
    <link rel="preload" as="image" href="https://baixada-web-studio.great-site.net//dist/images/o-que-oferecemos-baixada-web-studio.webp" />
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-menu-itens container">
            <div class="logotype">
                <a href="/" class="logo" aria-label="Baixada Web Studio - Desenvolvimento de sites profissionais para diversos setores">
                    <img
                        src="<?php echo get_template_directory_uri() . '/dist/icons/baixada-web-studio-logo-2.png' ?>"
                        alt=""
                        itemprop="image"
                        class="image" />
                        <span class="title">BAIXADA<span>WEB STUDIO</span></span>
                </a>
            </div>
            <div class="open-menu-mobile">
                <button onclick="openMenu()" class="bg-menu-mobile">Menu</button>
            </div>
            <div class="menu-items scroll-effect">
                <nav id="custom-header-menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'custom_header_menu',
                        'menu'           => 'Menu do Header',
                        'menu_id'        => 'custom-header-menu',
                        'menu_class'     => 'main-menu scroll-effect',
                        'fallback_cb'    => '__return_false',
                    ));
                    ?>
                </nav>

                <button onclick="closeMenu()" class="bg-close-menu-mobile">
                    Fechar menu
                </button>
            </div>
        </div>
    </header>
    <main id="content" role="main">
        <div class="home">
            <div class="page home">