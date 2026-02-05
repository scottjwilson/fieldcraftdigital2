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
            <a href="<?php echo esc_url(
                home_url("/"),
            ); ?>" class="site-logo" aria-label="Fieldcraft Digital Home">
                <span class="logo-mark">
                    <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 8L16 4L24 8V16L16 28L8 16V8Z" fill="currentColor" opacity="0.9"/>
                        <path d="M16 4L24 8V16L16 12V4Z" fill="currentColor" opacity="0.6"/>
                        <path d="M16 12L24 16L16 28V12Z" fill="currentColor" opacity="0.3"/>
                    </svg>
                </span>
            </a>

            <!-- Navigation -->
            <nav class="nav-main">
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
                    ); ?>" class="btn btn-accent btn-sm">
                        Contact
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>

<main class="main-content">
