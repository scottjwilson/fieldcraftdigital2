<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url("/")); ?>" class="site-logo">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <span class="logo-icon">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <circle cx="8" cy="8" r="6" fill="currentColor"/>
                        </svg>
                    </span>
                    <?php bloginfo("name"); ?>
                <?php endif; ?>
            </a>

            <!-- Desktop Navigation -->
            <nav class="nav-desktop">
                <?php wp_nav_menu([
                    "theme_location" => "primary",
                    "container" => false,
                    "menu_class" => "nav-menu",
                    "fallback_cb" => false,
                    "depth" => 2,
                ]); ?>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle" aria-expanded="false" aria-label="<?php esc_attr_e(
                "Toggle menu",
                "clean-vite-wp",
            ); ?>">
                <span class="icon-menu"><?php echo clean_vite_wp_icon(
                    "menu",
                    24,
                ); ?></span>
                <span class="icon-close"><?php echo clean_vite_wp_icon(
                    "close",
                    24,
                ); ?></span>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <nav class="nav-mobile">
        <?php wp_nav_menu([
            "theme_location" => "primary",
            "container" => false,
            "menu_class" => "nav-menu-mobile",
            "fallback_cb" => false,
            "depth" => 1,
        ]); ?>
    </nav>
</header>

<main class="main-content">
