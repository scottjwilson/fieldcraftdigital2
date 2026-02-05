<?php
/**
 * Front Page Template
 *
 * @package Clean_Vite_WP
 */

get_header(); ?>

<section class="hero">
    <div class="container">
        <div class="hero-content reveal">
            <h1 class="text-hero"><?php bloginfo("name"); ?></h1>
            <p class="hero-subtitle"><?php bloginfo("description"); ?></p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="prose">
                    <?php the_content(); ?>
                </div>
            <?php
            endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
