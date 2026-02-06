<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
// Determine header variant based on template
$header_class = "site-header";
$use_light_header =
    is_front_page() || is_page_template(["about.php", "services.php"]);
if ($use_light_header) {
    $header_class .= " header-light";
}
?>

<header class="<?php echo esc_attr($header_class); ?>">
    <div class="container">
        <div class="header-inner">
            <!-- Logo -->
            <a href="<?php echo esc_url(home_url("/")); ?>" class="site-logo">
                <span class="logo-mark">
                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 8L16 4L24 8V16L16 28L8 16V8Z" fill="currentColor" opacity="0.9"/>
                        <path d="M16 4L24 8V16L16 12V4Z" fill="currentColor" opacity="0.6"/>
                        <path d="M16 12L24 16L16 28V12Z" fill="currentColor" opacity="0.3"/>
                    </svg>
                </span>
                <span class="logo-text">Fieldcraft</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="nav-desktop">
                <ul class="nav-menu">
                    <li><a href="<?php echo esc_url(
                        home_url("/"),
                    ); ?>" class="nav-link<?php echo is_front_page()
    ? " is-active"
    : ""; ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(
                        home_url("/services"),
                    ); ?>" class="nav-link">Services</a></li>
                    <li><a href="<?php echo esc_url(
                        home_url("/work"),
                    ); ?>" class="nav-link">Work</a></li>
                    <li><a href="<?php echo esc_url(
                        home_url("/about"),
                    ); ?>" class="nav-link">About</a></li>
                    <li><a href="<?php echo esc_url(
                        home_url("/blog"),
                    ); ?>" class="nav-link">Blog</a></li>
                </ul>
                <div class="nav-actions">
                    <a href="<?php echo esc_url(
                        home_url("/contact"),
                    ); ?>" class="btn btn-accent">
                        Get in Touch
                    </a>
                </div>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle" aria-expanded="false" aria-label="Open menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Drawer Overlay -->
<div class="drawer-overlay" aria-hidden="true"></div>

<!-- Mobile Drawer -->
<nav class="drawer" aria-hidden="true">
    <div class="drawer-header">
        <a href="<?php echo esc_url(home_url("/")); ?>" class="site-logo">
            <span class="logo-mark">
                <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 8L16 4L24 8V16L16 28L8 16V8Z" fill="currentColor" opacity="0.9"/>
                    <path d="M16 4L24 8V16L16 12V4Z" fill="currentColor" opacity="0.6"/>
                    <path d="M16 12L24 16L16 28V12Z" fill="currentColor" opacity="0.3"/>
                </svg>
            </span>
            <span class="logo-text">Fieldcraft</span>
        </a>
        <button class="drawer-close" aria-label="Close menu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
    <div class="drawer-body">
        <ul class="drawer-nav">
            <li><a href="<?php echo esc_url(
                home_url("/"),
            ); ?>" class="drawer-link<?php echo is_front_page()
    ? " is-active"
    : ""; ?>">Home</a></li>
            <li><a href="<?php echo esc_url(
                home_url("/services"),
            ); ?>" class="drawer-link">Services</a></li>
            <li><a href="<?php echo esc_url(
                home_url("/work"),
            ); ?>" class="drawer-link">Work</a></li>
            <li><a href="<?php echo esc_url(
                home_url("/about"),
            ); ?>" class="drawer-link">About</a></li>
            <li><a href="<?php echo esc_url(
                home_url("/blog"),
            ); ?>" class="drawer-link">Blog</a></li>
        </ul>
    </div>
    <div class="drawer-footer">
        <a href="<?php echo esc_url(
            home_url("/contact"),
        ); ?>" class="btn btn-accent btn-block">
            Get in Touch
        </a>
    </div>
</nav>

<main class="main-content">
