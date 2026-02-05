</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand -->
            <div class="footer-brand">
                <a href="<?php echo esc_url(
                    home_url("/"),
                ); ?>" class="site-logo">
                    <?php bloginfo("name"); ?>
                </a>
                <p><?php bloginfo("description"); ?></p>
            </div>

            <!-- Footer Navigation -->
            <?php if (has_nav_menu("footer")): ?>
                <nav class="footer-nav">
                    <?php wp_nav_menu([
                        "theme_location" => "footer",
                        "container" => false,
                        "depth" => 1,
                    ]); ?>
                </nav>
            <?php endif; ?>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> <?php bloginfo(
     "name",
 ); ?>. <?php esc_html_e("All rights reserved.", "clean-vite-wp"); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
