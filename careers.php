<?php
/**
 * Template Name: Careers Page
 *
 * Careers and job listings page for Fieldcraft Digital.
 *
 * @package Fieldcraft
 */

get_header(); ?>

<style>
/* Careers Page Styles */
.careers-hero {
    position: relative;
    padding: 10rem 0 6rem;
    background: linear-gradient(135deg, var(--color-dark-950) 0%, var(--color-primary-950) 100%);
    color: white;
    overflow: hidden;
}

.careers-hero::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 60%;
    height: 100%;
    background: radial-gradient(ellipse at 70% 50%, rgba(139, 92, 246, 0.2) 0%, transparent 60%);
    pointer-events: none;
}

.careers-hero-content {
    position: relative;
    z-index: 1;
    max-width: 700px;
}

.careers-hero .text-label {
    color: var(--color-accent-400);
    margin-bottom: var(--space-4);
    display: block;
}

.careers-hero h1 {
    font-size: var(--text-hero);
    color: white;
    margin-bottom: var(--space-6);
}

.careers-hero-text {
    font-size: var(--text-xl);
    color: var(--color-dark-300);
    line-height: var(--leading-relaxed);
}

/* Culture Section */
.careers-culture {
    padding: var(--section-padding) 0;
    background: white;
}

.culture-grid {
    display: grid;
    gap: var(--space-12);
    align-items: center;
}

@media (min-width: 1024px) {
    .culture-grid {
        grid-template-columns: 1fr 1fr;
        gap: var(--space-16);
    }
}

.culture-image {
    border-radius: var(--radius-3xl);
    overflow: hidden;
}

.culture-image img {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: cover;
}

.culture-content h2 {
    font-size: var(--text-4xl);
    margin-bottom: var(--space-4);
}

.culture-content > p {
    color: var(--color-neutral-600);
    line-height: var(--leading-relaxed);
    margin-bottom: var(--space-6);
}

.perks-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-4);
}

.perk-item {
    display: flex;
    align-items: center;
    gap: var(--space-3);
}

.perk-item svg {
    flex-shrink: 0;
    color: var(--color-primary-500);
}

.perk-item span {
    font-size: var(--text-sm);
    color: var(--color-neutral-700);
    font-weight: 500;
}

/* Open Positions */
.careers-positions {
    padding: var(--section-padding) 0;
    background: var(--color-neutral-50);
}

.positions-list {
    display: grid;
    gap: var(--space-4);
    margin-top: var(--space-12);
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.position-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: var(--space-6);
    padding: var(--space-6) var(--space-8);
    background: white;
    border-radius: var(--radius-2xl);
    border: 1px solid var(--color-neutral-200);
    transition: border-color var(--transition-base), box-shadow var(--transition-base);
}

.position-card:hover {
    border-color: var(--color-primary-300);
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
}

.position-info h3 {
    font-size: var(--text-lg);
    margin-bottom: var(--space-2);
}

.position-meta {
    display: flex;
    gap: var(--space-4);
    flex-wrap: wrap;
}

.position-meta-item {
    display: flex;
    align-items: center;
    gap: var(--space-1);
    font-size: var(--text-sm);
    color: var(--color-neutral-500);
}

.position-meta-item svg {
    flex-shrink: 0;
}

.position-card .btn {
    flex-shrink: 0;
}

@media (max-width: 639px) {
    .position-card {
        flex-direction: column;
        align-items: flex-start;
    }
}

/* Values Section */
.careers-values {
    padding: var(--section-padding) 0;
    background: white;
}

.careers-values-grid {
    display: grid;
    gap: var(--space-6);
    margin-top: var(--space-12);
}

@media (min-width: 768px) {
    .careers-values-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .careers-values-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.careers-value-card {
    padding: var(--space-6);
    background: var(--color-neutral-50);
    border-radius: var(--radius-2xl);
    border: 1px solid var(--color-neutral-200);
}

.careers-value-icon {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--color-primary-100);
    border-radius: var(--radius-xl);
    color: var(--color-primary-600);
    margin-bottom: var(--space-4);
}

.careers-value-card h3 {
    font-size: var(--text-base);
    font-weight: 600;
    margin-bottom: var(--space-2);
}

.careers-value-card p {
    font-size: var(--text-sm);
    color: var(--color-neutral-600);
    line-height: var(--leading-relaxed);
}

/* CTA Section */
.careers-cta {
    padding: var(--section-padding) 0;
    background: var(--color-dark-950);
    color: white;
}

.careers-cta-content {
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}

.careers-cta h2 {
    font-size: var(--text-4xl);
    color: white;
    margin-bottom: var(--space-4);
}

.careers-cta p {
    font-size: var(--text-lg);
    color: var(--color-dark-300);
    line-height: var(--leading-relaxed);
    margin-bottom: var(--space-8);
}
</style>

<!-- Hero Section -->
<section class="careers-hero">
    <div class="container">
        <div class="careers-hero-content reveal">
            <span class="text-label">Careers</span>
            <h1>Join our team</h1>
            <p class="careers-hero-text">
                We're a team of designers, developers, and strategists building the future of digital experiences. Come do the best work of your career.
            </p>
        </div>
    </div>
</section>

<!-- Culture Section -->
<section class="careers-culture">
    <div class="container">
        <div class="culture-grid">
            <div class="culture-image reveal">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=700&h=525&fit=crop&fm=webp&q=80"
                     alt="Fieldcraft team collaborating" loading="lazy" width="700" height="525">
            </div>
            <div class="culture-content reveal reveal-delay-1">
                <h2>Why Fieldcraft?</h2>
                <p>
                    We believe great work comes from great teams. At Fieldcraft, you'll work alongside talented people who care deeply about their craft and push each other to grow. We foster an environment where creativity thrives and every voice is heard.
                </p>
                <p>
                    Whether you're collaborating on a rebrand for a Fortune 500 or shipping a product for a scrappy startup, you'll have the autonomy and support to make meaningful impact.
                </p>
                <div class="perks-grid">
                    <div class="perk-item">
                        <?php echo fieldcraft_icon("check", 18); ?>
                        <span>Remote-first culture</span>
                    </div>
                    <div class="perk-item">
                        <?php echo fieldcraft_icon("check", 18); ?>
                        <span>Flexible hours</span>
                    </div>
                    <div class="perk-item">
                        <?php echo fieldcraft_icon("check", 18); ?>
                        <span>Health & dental</span>
                    </div>
                    <div class="perk-item">
                        <?php echo fieldcraft_icon("check", 18); ?>
                        <span>401(k) matching</span>
                    </div>
                    <div class="perk-item">
                        <?php echo fieldcraft_icon("check", 18); ?>
                        <span>Learning stipend</span>
                    </div>
                    <div class="perk-item">
                        <?php echo fieldcraft_icon("check", 18); ?>
                        <span>Unlimited PTO</span>
                    </div>
                    <div class="perk-item">
                        <?php echo fieldcraft_icon("check", 18); ?>
                        <span>Home office budget</span>
                    </div>
                    <div class="perk-item">
                        <?php echo fieldcraft_icon("check", 18); ?>
                        <span>Team retreats</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Open Positions -->
<section class="careers-positions">
    <div class="container">
        <div class="section-header center reveal">
            <span class="text-label">Open Positions</span>
            <h2 class="text-display">Find your role</h2>
        </div>

        <div class="positions-list">
            <div class="position-card reveal">
                <div class="position-info">
                    <h3>Senior UI/UX Designer</h3>
                    <div class="position-meta">
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("layers", 14); ?> Design
                        </span>
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("map-pin", 14); ?> Remote (US)
                        </span>
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("star", 14); ?> Full-time
                        </span>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Apply</a>
            </div>

            <div class="position-card reveal reveal-delay-1">
                <div class="position-info">
                    <h3>Full-Stack Developer</h3>
                    <div class="position-meta">
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("code", 14); ?> Engineering
                        </span>
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("map-pin", 14); ?> Remote (US)
                        </span>
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("star", 14); ?> Full-time
                        </span>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Apply</a>
            </div>

            <div class="position-card reveal reveal-delay-2">
                <div class="position-info">
                    <h3>SEO Strategist</h3>
                    <div class="position-meta">
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("search", 14); ?> Marketing
                        </span>
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("map-pin", 14); ?> Remote (US)
                        </span>
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("star", 14); ?> Full-time
                        </span>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Apply</a>
            </div>

            <div class="position-card reveal">
                <div class="position-info">
                    <h3>Project Manager</h3>
                    <div class="position-meta">
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("target", 14); ?> Operations
                        </span>
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("map-pin", 14); ?> San Francisco, CA
                        </span>
                        <span class="position-meta-item">
                            <?php echo fieldcraft_icon("star", 14); ?> Full-time
                        </span>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Apply</a>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="careers-values">
    <div class="container">
        <div class="section-header center reveal">
            <span class="text-label">What We Look For</span>
            <h2 class="text-display">Our values in action</h2>
        </div>

        <div class="careers-values-grid">
            <div class="careers-value-card reveal">
                <div class="careers-value-icon">
                    <?php echo fieldcraft_icon("star", 24); ?>
                </div>
                <h3>Craft Obsessed</h3>
                <p>You sweat the details and take pride in producing work that's exceptional, not just good enough.</p>
            </div>

            <div class="careers-value-card reveal reveal-delay-1">
                <div class="careers-value-icon">
                    <?php echo fieldcraft_icon("users", 24); ?>
                </div>
                <h3>Team Player</h3>
                <p>You thrive in collaboration, share knowledge freely, and lift up those around you.</p>
            </div>

            <div class="careers-value-card reveal reveal-delay-2">
                <div class="careers-value-icon">
                    <?php echo fieldcraft_icon("lightning", 24); ?>
                </div>
                <h3>Self-Starter</h3>
                <p>You take ownership of your work, solve problems proactively, and don't wait to be told what to do.</p>
            </div>

            <div class="careers-value-card reveal reveal-delay-3">
                <div class="careers-value-icon">
                    <?php echo fieldcraft_icon("chart", 24); ?>
                </div>
                <h3>Growth Minded</h3>
                <p>You're always learning, seeking feedback, and pushing yourself beyond your comfort zone.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="careers-cta">
    <div class="container">
        <div class="careers-cta-content reveal">
            <h2>Don't see the right role?</h2>
            <p>We're always looking for talented people. Send us your portfolio and tell us what excites you about Fieldcraft.</p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-accent btn-lg">
                Send General Application <?php echo fieldcraft_icon("arrow-right"); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
